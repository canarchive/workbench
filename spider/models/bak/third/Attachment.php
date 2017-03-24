<?php

namespace spider\models\third;

use Yii;
use common\models\SpiderModel;

class Attachment extends SpiderModel
{
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbEale;
    }
}
