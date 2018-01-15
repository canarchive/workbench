<?php

namespace spread\models\saccount;

use Yii;
use common\models\SpreadModel;

class BaseModel extends SpreadModel
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    
}
