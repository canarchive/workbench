<?php

namespace spider\models\dnflower;

use Yii;
use common\models\SpiderModel;

class Article extends SpiderModel
{
    public static function tableName()
    {
        return '{{%flower_metarial}}';
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
        $file = "dnflower/{$this->source_site_code}/show/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}
