<?php
namespace merchant\models;

use Yii;
use yii\base\Model;

class SigninForm extends Model
{
    public $name;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect name or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided name and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function signin()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[name]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $userModel = new User();
            $this->_user = $userModel->getInfo(['mobile' => $this->name]);
        }

        return $this->_user;
    }
}
