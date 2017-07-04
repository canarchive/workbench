<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use common\smser\Smser;

class ValidatorBehavior extends Behavior
{
	public function validateMobileCode($data)
	{
        $result = true;

		$smser = new Smser();
		$check = $smser->checkCode($data['mobile'], $data['type'], $data['code']);
		return $check;
	}

    public function checkMobile($value, $allowEmpty = false)
    {
		$param = [
			'code' => 'mobile',
			'name' => '手机号',
			'class' => '\common\validators\MobileValidator',
		];
		return $this->_check($param, $value, $allowEmpty);
	}

    public function checkEmail($value, $allowEmpty = false)
    {
		$param = [
			'code' => 'email',
			'name' => '邮箱',
			'class' => '\yii\validators\EmailValidator',
		];
		return $this->_check($param, $value, $allowEmpty);
	}

    public function checkCaptcha($value, $allowEmpty = false)
    {
		$param = [
			'code' => 'captcha',
			'name' => '图形验证码',
			'class' => '\yii\captcha\CaptchaValidator',
		];
		return $this->_check($param, $value, $allowEmpty);
	}

	protected function _check($param, $value, $allowEmpty)
	{
        if (empty($value) && $allowEmpty) {
            return true;
        }

        if (empty($value)) {
            return ['status' => 400, 'message' => $param['name'] . '不能为空'];
        }

        $validator = new $param['class'];
        $valid =  $validator->validate($value);
        if (empty($valid)) {
            return ['status' => 400, 'message' => $param['name'] . '格式有误'];
        }

        return true;
    }
}
