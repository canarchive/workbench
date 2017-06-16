<?php

namespace backend\models;

use common\models\BaseModelNotable;
use baseapp\auth\models\SigninTrait;

class Signin extends BaseModelNotable
{
	use SigninTrait;
    public $name;
    public $password;
    public $rememberMe;

    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            //['rememberMe', 'boolean'],
            //['captcha', 'default', 'value' => true],
            //['captcha', 'checkCaptcha'],
            ['password', 'validatePassword'],
        ];
    }

    public function signin()
    {
        $result = $this->_signin(true);
        return $result;
    }

    public function getUser()
    {
        if ($this->_user === null) {
            $this->_user = Manager::findByName($this->name);
        }
        return $this->_user;
    }

    public function getNameField()
    {
        return 'name';
    }
}
