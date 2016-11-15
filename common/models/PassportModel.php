<?php

namespace common\models;

use Yii;

class PassportModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->db;
    }
}
