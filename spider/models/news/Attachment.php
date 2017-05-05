<?php

namespace spider\models\news;

use Yii;
use common\models\SpiderModel;

class Attachment extends SpiderModel
{
    public static function tableName()
    {
        return '{{%attachment_news}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbHouse;
    }
}