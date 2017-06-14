<?php

namespace baseapp\auth\models;

trait SignupTrait
{
    public $_datas;

	public function checkCode()
	{
        $check = $this->checkMobileCode($this->_datas['mobile'], 'register', $this->_data['mobileCode']);
        if ($check !== true) {
            $this->addError('mobile_code', '手机验证码有误');
        }
        return false;
	}

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    protected function _signup()
    {
        $this->_formatDatas();
        $validate = $this->validateDatas();
        if (empty($validate)) {
            return false;
        }

        return $this->_register();
    }

    protected function _register()
    {
        $result = $this->userModel()->insert();
        return null;
    }

    protected function _formatDatas()
    {
        $inputFields = [
            'mobile', 'name', 'mobile_code', 'password', 'password_confirm', 'captcha', 'email',
        ];
        $inputFields = array_merge($inputFields, $this->inputFieldExts);

        $datas = [];
        foreach ($inputFields as $field) {
            $datas[$field] = trim(strip_tags(Yii::$app->request->post($field)));
            //$datas[$field] = trim(strip_tags(Yii::$app->request->get($field)));
        }

        $this->_datas = $datas;
        return ;
    }
}
