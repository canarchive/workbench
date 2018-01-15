<?php

namespace spread\models;

use Yii;

trait ShootTrait
{
    public static function getDb()
    {
        return Yii::$app->dbShoot;
    }    
}
