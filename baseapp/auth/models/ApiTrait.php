<?php

namespace baseapp\auth\models;

use Yii;

trait ApiTrait
{
	public function getBehaviorCodes()
	{
		return array_merge(parent::getBehaviorCodes(), ['sms']);
	}

    public function validateCommon($data)
    {
        $method = '_validate' . ucfirst($data['field']);
        if (!method_exists($this, $method)) {
            return ['status' => 400, 'message' => "{$data['field']}有误！"];
        }

        unset($data['field']);
        return $this->$method($data['value'], $data['type']);
    }

	public function generateCode($data)
	{
		$captcha = $this->checkCaptcha($data['captcha'], $this->captchaRequire);
		if ($captcha !== true) {
			//return $captcha;
		}

		$mobileCheck = $this->_validateMobile($data['mobile'], $data['type']);
		if ($mobileCheck['status'] != 200) {
			return $mobileCheck;
		}

        $result = $this->sendSmsCode($data['mobile'], $data['type']);
		return $result;
	}

	public function checkMobileCode($data)
	{
		$mobileCheck = $this->_validateMobile($data['mobile'], $data['type']);
		if ($mobileCheck['status'] != 200) {
			return $mobileCheck;
		}

		$result = $this->validateMobileCode($data);
		$result = $result === true ? ['status' => 200, 'message' => 'OK'] : ['status' => 400, 'message' => '手机验证码有误'];
		return $result;
	}

    protected function _validateMobile($value, $type)
    {
        $valid =  $this->checkMobile($value);
        if ($valid !== true) {
            return ['status' => 400, 'message' => '手机号格式有误'];
        }

        return $this->_checkUser(['mobile' => $value], $type);
    }

    protected function _validateEmail($value, $type, $allowEmpty = false)
    {
        $valid =  $this->checkEmail($value, $allowEmpty);
        if ($valid !== true) {
            return ['status' => 400, 'message' => '邮箱格式有误'];
        }

        return $this->_checkUser(['mobile' => $value], $type);
    }

    protected function _checkUser($where, $type)
    {
        if (!in_array($type, ['signin', 'signup'])) {
            return ['status' => 200, 'message' => 'OK'];
        }

        $userInfo = $this->getUserInfo($where);
        if ($type == 'signin' && empty($userInfo)) {
            return ['status' => 400, 'message' => '用户不存在，请先注册'];
        }

        if ($type == 'signup' && !empty($userInfo)) {
            return ['status' => 400, 'message' => '用户已存在，请直接登录'];
        }

        return ['status' => 200, 'message' => 'OK'];
    }

	protected function getCaptchaRequire()
	{
		return true;
	}
}
