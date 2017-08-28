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
			if (empty($value) && !in_array($field, ['merchant_sort'])) {
				return ['status' => 400, 'message' => "{$field}不能为空"];
			}
			if ($field == 'password' && strlen($value) < 6) {
				return ['status' => 400, 'message' => "密码最少6位"];
			}
		}
		$checkEmail = $this->_validateEmail($data['email'], 'signup');
		if ($checkEmail['status'] != 200) {
			return $checkEmail;
		}

		$checkCode = $this->checkMobileCode(['mobile' => $data['mobile'], 'type' => 'signup', 'code' => $data['code']]);
		if ($checkCode['status'] != 200) {
			return $checkCode;
		}

		unset($data['code']);
		$data['merchant_id'] = $this->dealMerchant($data);
		$result = $this->registerUser($data);
		return $result;
    }

	public function dealMerchant(& $data)
	{
		$fields = ['name', 'sort'];
		$mData = [];
		foreach ($fields as $mField) {
			$mData[$mField] = $data['merchant_' . $mField];
			unset($data['merchant_' . $mField]);
		}
		if (empty($mData['name'])) {
			return '';
		}

		$mModel = new MerchantPond($mData);
		$mModel->insert(false);
		return ",{$mModel->id},";
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

	public function getUserInfo($where)
	{
        $model = new User();
		$userInfo = $model->getInfo($where);
		return $userInfo;
	}
}
