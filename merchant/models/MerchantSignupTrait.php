<?php

namespace merchant\models;

use baseapp\auth\models\SignupTrait;

trait MerchantSignupTrait
{
    use SignupTrait;
    public $mobile;
    public $email;
    public $truename;
    public $password;

    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            [['mobile', 'password'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            ['mobile', 'unique', 'targetClass' => '\merchant\models\User', 'message' => '该手机账户已存在，可以直接登录'],

            ['password', 'string', 'min' => 6],
            ['email', 'email'],
        ];
    }

    public function signup()
    {
        $result = $this->_signup();
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
