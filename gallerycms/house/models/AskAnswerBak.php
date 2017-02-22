<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class AskAnswer extends GallerycmsModel
{
    public static function getDb()
    {
        return \Yii::$app->dbAsk;
    }	
}
