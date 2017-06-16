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
}
