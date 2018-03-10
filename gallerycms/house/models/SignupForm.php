<?php
namespace gallerycms\house\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;

class SignupForm extends Model
{
    public $mobile;
    public $name;
    public $message;
    public $position;
    public $note;
    public $info_id;
    public $info_sort;
    public $page_code;
    public $page_url;
    
    public $city_input;
    public $area_input;
    public $isMobile;
    public $existOwner;
    public $quoteInfo = [];

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
            [['info_id', 'info_sort', 'position', 'page_code', 'page_url', 'city_input', 'area_input', 'message', 'note'], 'safe'],
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
            'mobile' => $this->mobile,
            'name' => $this->name,
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

        $infoExist = Owner::findOne(['mobile' => $this->mobile]);
        if ($infoExist) {
            $infoExist->signup_at = Yii::$app->params['currentTime'];
            $infoExist->signup_num = $infoExist->signup_num + 1;
            $infoExist->update(false);
            $this->addError('error', '您的手机号已报名成功');
            $this->existOwner = true;
            return false;
        }

        $userModel = new Owner();
        $userInfo = $userModel->addOwner($data);
        if (!$userInfo) {
            $this->addError('mobile', '报名失败，请您重新报名');
            return false;
        }

        if ($this->area_input > 20 && $this->area_input < 500) {
            $this->quoteInfo = $this->_getQuoteInfo($this->area_input);
        }

		$this->sendData($data);
        //$this->sendSms($data);
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
		$message = "有业主：{$data['name']}，电话：{$mobile}，咨询您公司的家装业务，请立即回访【兔班长装修网】";
		$sMobile = '18801394072';

        $smser = new Smser();
        $smser->send($sMobile, $message, 'decoration_service');
        return true;
    }

    protected function sendSmsold($data)
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

    public function _getQuoteInfo($area)
    {
        $quote = new Quote(); 
        $info = $quote->getResult($area);
        return $info;
    }

    public function sendData($data)
    {
        $ch = curl_init();
		$url = 'http://hd.5895306.com/tu8zhang.html?';//http://hlyx.subsite.plat.alyee.com/tu8zhang.html?';
		foreach ($data as $field => $value) {
			$url .= "&{$field}={$value}";
		}
		file_put_contents('/tmp/url.txt', $url);
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		//curl_setopt($ch, CURLOPT_TIMEOUT, (int)$timeout);

        $result = curl_exec($ch);
		file_put_contents('/tmp/url-r.txt', $result);
		return ;
    }
}
