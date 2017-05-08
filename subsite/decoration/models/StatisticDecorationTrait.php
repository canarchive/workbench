<?php

namespace subsite\decoration\models;

use Yii;

trait StatisticDecorationTrait
{
    public static function getDb()
    {
        return Yii::$app->dbStatisticDecoration;
    }    

    public function _getClassPrefix()
    {
        return __NAMESPACE__ . '\\';
    }
}
