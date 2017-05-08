<?php

namespace subsite\models;

use Yii;

trait DecorationTrait
{
    public static function getDb()
    {
        return Yii::$app->dbSubsite;
    }    

    public function _getClassPrefix()
    {
        return "\subsite\decoration\models\\";
    }
}
