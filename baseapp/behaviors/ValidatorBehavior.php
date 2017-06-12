<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use common\validators\MobileValidator;
use yii\validators\EmailValidator;

class ValidatorBehavior extends Behavior
{
    public function checkMobile($mobile)
    {
        if (empty($mobile)) {
            return ['status' => 400, 'message' => '手机号码不能为空'];
        }

        $validator = new MobileValidator();
        $valid =  $validator->validate($mobile);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '手机号码格式有误'];
        }

        return true;
    }

    /**
     * 验证邮箱格式
     *
     * @param $email string
     * @return boolean
     */
    public function checkEmail($email)
    {
        if (empty($email)) {
            return ['status' => 400, 'message' => '邮箱不能为空'];
        }

        $validator = new EmailValidator();
        $valid =  $validator->validate($email);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '邮箱有误'];
        }

        return true;
    }
}
