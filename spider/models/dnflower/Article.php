<?php

namespace spider\models\ndflower;

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

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function showFile()
    {
        $file = "ndflower/{$this->source_site_code}/show/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}
