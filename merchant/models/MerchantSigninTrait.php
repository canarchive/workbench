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

    protected function getUser()
    {
        if (is_null($this->_user)) {
			$nameField = $this->nameField;
            $this->_user = $this->getPointInfo('merchant-user', [$nameField => $this->$nameField]);
        }
        return $this->_user;
    }
}
