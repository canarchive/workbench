<?php

namespace merchant\decoration\models;

use Yii;

trait ModelTrait
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
