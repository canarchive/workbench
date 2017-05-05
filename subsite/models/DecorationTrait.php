<?php

namespace spread\models;

use Yii;

trait DecorationTrait
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public function _getClassPrefix()
    {
        return "\spread\decoration\models\\";
    }
}
