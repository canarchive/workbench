<?php

namespace merchant\models;

use baseapp\auth\models\SignupTrait;

trait MerchantSignupTrait
{
    use SignupTrait;

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function signup()
    {
        $this->_signup();
    }

    public function getUserModel()
    {
        return new User();
    }
}
