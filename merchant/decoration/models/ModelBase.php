<?php

namespace merchant\decoration\models;

use Yii;
use baseapp\merchant\models\MerchantModel;

class ModelBase extends MerchantModel
{

    /*public static function getDb()
    {
        return Yii::$app->dbSubsite;
	}*/

    public function _getClassPrefix()
    {
        return "\merchant\decoration\models\\";
    }
}
