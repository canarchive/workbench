<?php

namespace gallerycms\sinfo\models;

use Yii;

trait SinfoTrait
{
    public static function getDb()
    {
        return Yii::$app->dbSinfo;
    }    

    public function _getClassPrefix()
    {
        return '\gallerycms\sinfo\models\\';
    }
}
