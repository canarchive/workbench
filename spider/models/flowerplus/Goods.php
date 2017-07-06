<?php

namespace spider\models\flowerplus;

use Yii;
use common\models\SpiderModel;

class Goods extends SpiderModel
{
    public static function tableName()
    {
        return '{{%goods}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbShop;
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function showFile()
    {
        $file = "shop/flowerplus/show/{$this->source_id}.html";
        return $file;
    }
}
