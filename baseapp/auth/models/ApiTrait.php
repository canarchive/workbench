<?php

namespace baseapp\auth\models;

use Yii;

trait ApiTrait
{
    public function getBehaviorCodes()
    {
        return ['sms'];
	}

    public function validateCommon($data)
    {
        $method = '_validate' . ucfirst($data['field']);
        if (!method_exists($this, $method)) {
            return ['status' => 400, 'message' => "{$data['field']}有误！"];
        }

        unset($data['field']);
        return $this->$method($data);
    }

	public function generateCode($data)
	{
		$captcha = $this->checkCaptcha($data['captcha'], $this->captchaRequire);
		if ($captcha !== true) {
			return $captcha;
		}

		$data['value'] = $data['mobile'];
		$mobile = $this->_validateMobile($data);
		if ($mobile['status'] != 200) {
			return $mobile;
		}

        $result = $this->sendSmsCode($data['mobile'], $data['type']);
    	$status = $result == 'OK' ? 200 : 400;
    	return ['status' => $status, 'message' => $result];
	}

    protected function _validateMobile($data)
    {
        $type = $data['type'];
        $value = $data['value'];
        $valid =  $this->checkMobile($value);
        if ($valid !== true) {
            return ['status' => 400, 'message' => '手机号格式有误'];
        }

        return $this->_checkUser(['mobile' => $value], $type);
    }

    protected function _validateEmail($value)
    {
        $type = $data['type'];
        $value = $data['value'];
        $valid =  $this->checkEmail($value, true);
        if ($valid !== true) {
            return ['status' => 400, 'message' => '邮箱格式有误'];
        }

        return $this->_checkUser(['mobile' => $value], $type);
    }

    protected function _checkUser($where, $type)
    {
        if (!in_array($type, ['login', 'register'])) {
            return ['status' => 200, 'message' => 'OK'];
        }

        $userInfo = $this->getUserInfo($where);
        if ($type == 'login' && empty($userInfo)) {
            return ['status' => 400, 'message' => '用户不存在，请先注册'];
        }

        if ($type == 'register' && !empty($userInfo)) {
            return ['status' => 400, 'message' => '用户已存在，请直接登录'];
        }

        return ['status' => 200, 'message' => 'OK'];
    }

	protected function getCaptchaRequire()
	{
		return true;
	}
}
