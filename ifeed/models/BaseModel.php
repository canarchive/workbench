<?php

namespace ifeed\models;

use Yii;

trait EaleTrait
{
    public static function getDb()
    {
        return Yii::$app->dbEale;
    }    

    public function _getClassPrefix()
    {
        return '\ifeed\eale\models\\';
    }
}
