<?php
namespace gallerycms\shoot\models;

use common\models\BaseModel;
use baseapp\spread\models\SignupFormTrait;

class SignupForm extends BaseModel
{
    use SignupFormTrait;

    public function init()
    {
        parent::init();
        $this->inputFieldExts = ['sort', 'book_date'];
        //$this->_intFields = array_merge($this->_intFields, ['area_input']);
    }

    public function signup()
    {
        $result = $this->_signup();

        if (empty($result)) {
            $result = $this->_formatFailResult();
        }
        return $result;
    }

    public function getUserModel($returnNew = false)
    {
        static $model = null;
        if (is_null($model) || $returnNew) {
            $model = new User();
        }

        return $model;
    }
}
