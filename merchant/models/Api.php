<?php

namespace merchant\models;

use common\models\BaseModelNotable;
use baseapp\auth\models\ApiTrait;

class Api extends BaseModelNotable
{
    use ApiTrait;

	public function register($data)
	{
		foreach ($data as $field => $value) {
			if (empty($value)) {
				return ['status' => 400, 'message' => "{$field}不能为空'"];
			}
			if ($field == 'password' && strlen($value) < 6) {
				return ['status' => 400, 'message' => "密码最少6位"];
			}
		}
		$checkEmail = $this->_validateEmail($data['email'], 'register');
		if ($checkEmail['status'] != 200) {
			return $checkEmail;
		}

		$checkCode = $this->checkMobileCode(['mobile' => $data['mobile'], 'type' => 'register', 'code' => $data['code']]);
		if ($checkCode['status'] != 200) {
			return $checkCode;
		}
		unset($data['code']);
		unset($data['merchant_name']);
		unset($data['merchant_sort']);
		$result = $this->registerUser($data);
		return $result;
    }

    public function registerUser($data)
    {
        $model = new User($data);
        $result = $model->insert(false);
        if (empty($result)) {
            return ['status' => 400, 'message' => ''];
        }
        return ['status' => 200, 'model' => $model];
    }
}
