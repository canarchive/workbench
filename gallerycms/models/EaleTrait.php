<?php

namespace gallerycms\models;

use Yii;

trait EaleTrait
{
    public static function getDb()
    {
        return Yii::$app->dbEale;
    }    

    public function _getClassPrefix()
    {
        return '\gallerycms\eale\models\\';
    }
}
