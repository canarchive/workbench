<?php
namespace baseapp\merchant\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;
use common\models\QuoteHouse;
use baseapp\merchant\models\Merchant;
use baseapp\statistic\models\Conversion;

trait SignupFormTrait
{
    public $cid;
    public $mobile;
    public $name;
    public $message;
    public $position;
    public $note;
    public $isMobile;
    public $userModel;
    public $userInfo;
	public $merchantInfo = [];
    public $existUser;

    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            //[['city_input', 'area_input'], 'default', 'value' => ''],
            [['cid', 'message', 'position', 'note'], 'safe'],
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
        $note = strip_tags($this->note);
        $data = array_merge($dataBase, [
            'city_input' => empty(strip_tags($this->city_input)) ? '' : strip_tags($this->city_input),
            'area_input' => empty(strip_tags($this->area_input)) ? 0 : strip_tags($this->area_input),
            'position' => strip_tags($this->position),
            'note' => $note,
            'message' => strip_tags($this->message),
        ]);

        $infoExist = false;//$this->getUserModel()->findOne(['merchant_id' => $dataBase['merchant_id'], 'mobile' => $this->mobile]);
        if ($infoExist) {
            $infoExist->signup_at = Yii::$app->params['currentTime'];
            $infoExist->signup_num = $infoExist->signup_num + 1;
            $infoExist->update(false);
            $this->addError('error', '您的手机号已报名成功');
            $this->existUser = true;
            return false;
        }

        $conversionModel = new Conversion();
        $conversionInfo = $conversionModel->successLog($dataBase);
        $data['conversion_id'] = $conversionInfo['id'];
        if ($this->area_input > 20 && $this->area_input < 500) {
            $rateDatas = [
                '677' => '2.7',
                '674' => '2.7',
                '671' => '3',
            ];
            $priceRate = isset($rateDatas[$dataBase['merchant_id']]) ? $rateDatas[$dataBase['merchant_id']] : 2;
            
            $this->quoteInfo = $this->_getQuoteInfo($this->area_input, $priceRate);
        }

        $userModel = $this->getUserModel(true);
        $userInfo = $userModel->addUser($data);
        if (!$userInfo) {
            $this->addError('mobile', '报名失败，请您重新报名');
            return false;
        }
		$this->merchantInfo = $userInfo->merchantInfo;

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
        $ext = $this->validateExt();
        if (!$ext) {
            $this->addError('error', '信息有误1');
            return false;
        }

        return true;
    }

    protected function validateExt()
    {
        return true;
    }

    public function getUserModel($returnNew = false)
    {
    }
}
