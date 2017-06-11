<?php
namespace subsite\decoration\models;

use yii\base\Model;
use baseapp\merchant\models\SignupFormTrait;

class SignupForm extends Model
{
    use SignupFormTrait;
    public $city_input;
    public $area_input;
    public $quoteInfo = [];

    public function getUserModel($returnNew = false)
    {
        static $model = null;
        if (is_null($model) || $returnNew) {
            $model = new User();
        }

        return $model;
    }
}
