<?php

namespace spread\models;

use Yii;
use baseapp\spread\models\SpreadModel;

class BaseModel extends SpreadModel
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    
}
