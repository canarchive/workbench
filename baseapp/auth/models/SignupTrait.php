<?php

namespace baseapp\auth\models;

use Yii;

trait SignupTrait
{
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    protected function _signup()
    {
        $this->load(Yii::$app->request->post(), '');
        $validate = $this->validate();
        if (empty($validate)) {
            return $this->_formatFailResult('报名失败，请您重试');
        }

        return $this->registerUser();
    }

	public function checkCode()
	{
        $check = $this->checkMobileCode($this->_datas['mobile'], 'register', $this->_data['mobileCode']);
        if ($check !== true) {
            $this->addError('mobile_code', '手机验证码有误');
        }
        return false;
	}
}
