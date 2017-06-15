<?php

namespace merchant\models;

use baseapp\auth\models\SigninTrait;

trait MerchantSigninTrait
{
    use SigninTrait;
    public $mobile;
    public $password;
    public $rememberMe = true;
    //public $captcha;

    public function getBehaviorCodes()
    {
        return ['merchant'];
    }

    public function rules()
    {
        return [
            [['mobile', 'password'], 'required'],
            //['rememberMe', 'boolean'],
            //['captcha', 'default', 'value' => true],
            //['captcha', 'checkCaptcha'],
            ['password', 'validatePassword'],
        ];
    }

    public function signin()
    {
        $result = $this->_signin();
        return $result;
    }

    public function registerUser()
    {
        $data = [ 
            'mobile' => $this->mobile,
            'password' => $this->password,
            'truename' => strip_tags($this->truename),
        ];  
        $model = new User($data);
        $result = $model->insert(false);
        if (empty($result)) {
            return ['status' => 400, 'message' => ''];
        }
        return ['status' => 200, 'model' => $model];
    }
}
