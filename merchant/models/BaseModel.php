<?php

namespace merchant\models;

use Yii;
use baseapp\merchant\models\MerchantModel;

class BaseModel extends MerchantModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }    
}
