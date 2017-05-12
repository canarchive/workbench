<?php
namespace subsite\decoration\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;
use merchant\models\Merchant;
use common\models\spread\Conversion;

class SignupForm extends Model
{
    public $cid;
    public $mobile;
    public $name;
    public $message;
    public $position;
    public $position_name;
    public $city_input;
    public $area_input;
    public $isMobile;
    public $userModel;
    public $userInfo;
    public $quoteInfo = [];
	public $merchantInfo = [];
    public $existOwner;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            //[['city_input', 'area_input'], 'default', 'value' => ''],
            [['cid', 'city_input', 'area_input', 'message', 'position', 'position_name'], 'safe'],
        ];
    }

    /**
     * Signs owner up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        $isValidate = $this->isValidate();
        if (!$isValidate) {
            return $isValidate;
        }

        $dataBase = [
            'merchant_id' => intval($this->cid),
            'mobile' => $this->mobile,
            'name' => strip_tags($this->name),
            'client_type' => $this->isMobile ? 'h5' : 'pc',
        ];
        $note = strip_tags($this->position_name);
        $data = array_merge($dataBase, [
            'city_input' => empty(strip_tags($this->city_input)) ? '' : strip_tags($this->city_input),
            'area_input' => empty(strip_tags($this->area_input)) ? 0 : strip_tags($this->area_input),
            'position' => strip_tags($this->position),
            'note' => $note,
            'message' => strip_tags($this->message),
        ]);

        $infoExist = User::findOne(['merchant_id' => $dataBase['merchant_id'], 'mobile' => $this->mobile]);
        if ($infoExist) {
            $infoExist->signup_at = Yii::$app->params['currentTime'];
            $infoExist->signup_num = $infoExist->signup_num + 1;
            $infoExist->update(false);
            $this->addError('error', '您的手机号已报名成功');
            $this->existOwner = true;
            return false;
        }
		$this->merchantInfo = Merchant::findOne($dataBase['merchant_id']);

        $userModel = new User();
        $userInfo = $userModel->addOwner($data);
        if (!$userInfo) {
            $this->addError('mobile', '报名失败，请您重新报名');
            return false;
        }

        $conversionModel = new Conversion();
        $conversionInfo = $conversionModel->successLog($dataBase);
        if ($this->area_input > 20 && $this->area_input < 500) {
            $rateDatas = [
                '677' => '2.7',
                '674' => '2.7',
                '671' => '3',
            ];
            $priceRate = isset($rateDatas[$dataBase['merchant_id']]) ? $rateDatas[$dataBase['merchant_id']] : 2;
            
            $this->quoteInfo = $this->_getQuoteInfo($this->area_input, $priceRate);
        }

        $serviceModel = $userInfo->dealService($data);
        $userInfo->updateAfterInsert($conversionInfo);
        $data['service_code'] = $serviceModel->code;

        $this->sendSms($data, $serviceModel->mobile);
        $this->sendSmsService($data, $serviceModel);
        if ($userInfo['merchant_id'] == '671') {
            //$this->_getPushData($userInfo);
        }
        return ['status' => 200, 'message' => 'OK', 'quoteInfo' => $this->quoteInfo];
    }

    protected function isValidate()
    {
        if (!$this->validate()) {
            $this->addError('error', '信息有误');
            return false;
        }

        return true;
    }

    protected function sendSms($data)
    {
        $mobile = $data['mobile'];
		$message = isset($this->merchantInfo['msg']) ? $this->merchantInfo['msg'] : '';
		if (empty($message)) {
            $siteName = Yii::$app->params['siteNameBase'];
            $hotline = Yii::$app->params['siteHotline'];
            $message = "您已成功预约，装修顾问会在15分钟内回访了解您的具体装修需求，请保持您的电话畅通，详情咨询{$hotline}【{$siteName}】";
		}

        $smser = new Smser();
        $smser->send($mobile, $message, 'decoration_signup');
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
		if (empty($this->merchantInfo) || $employee['status_sendmsg'] == 0) {
			return ;
		}

        $mobile = $employee['mobile'];
		$signStr = !isset($this->merchantInfo->name) ? '' : "【{$this->merchantInfo->name}】";
		$content = "有业主：{$data['name']}，电话：{$data['mobile']}，咨询您公司的家装业务，请立即回访【兔班长装修网】";
        //$content = "业主家装报名：{$data['name']}，电话：{$data['mobile']}，请立即回访{$signStr}";

        $smser = new Smser();
        $smser->send($mobile, $content, 'decoration_service');
		if ($employee['status_sendmsg'] == 2 && !empty($employee['mobile_ext'])) {
            $smser->send($employee['mobile_ext'], $content, 'decoration_service');
		}
        
        return true;
    }

    public function _getQuoteInfo($area, $priceRate = 2)
    {
        $quote = new Quote(); 
        $info = $quote->getResult($area, $priceRate);
        return $info;
    }

    public function _getPushData($data)
    {

        $fields = ['signup_at', 'name', 'mobile', 'city_input', 'channel', 'area_input', 'keyword', 'signup_city', 'note', 'signup_ip'];
        $datas = [];
        foreach ($fields as $field) {
            $datas[$field] = $data[$field];
        }
        $url = 'http://www.jzjz.com/cms/api/user/jz?';
        $url .= http_build_query($datas);
        $r = file_get_contents($url);
        
        return true;
    }
}
