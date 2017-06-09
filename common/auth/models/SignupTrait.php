<?php

namespace common\auth\models;

trait SignupTrait
{
    //public $username;
    //public $email;
    public $mobile;
    public $mobileCode;
    public $captcha;
    public $password;
    public $passwordConfirm;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            [['mobile', 'password', 'mobileCode'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            ['mobile', 'unique', 'targetClass' => '\passport\models\User', 'message' => 'This mobile address has already been taken.'],

            ['mobileCode', 'required'],
			['mobileCode', 'checkCode'],
            //['captcha', 'captcha'],
			//['aggreement', 'compare', 'compareValue' => 1, 'operator' => '=='],
            ['password', 'string', 'min' => 6],
			['passwordConfirm', 'compare','compareAttribute'=>'password'],
        ];
    }

	public function checkCode()
	{
		$smser = new \common\components\sms\Smser();
		$result = 'OK';//$smser->checkCode($this->mobile, 'register', $this->mobileCode);
        if ($result !== 'OK') {
            $this->addError('mobileCode', '手机验证码有误');
        }
	}

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
			$data = [
				'mobile' => $this->mobile,
				'password' => $this->password,
			];
            return $user->registerUser($data);
        }

        return null;
    }
}
