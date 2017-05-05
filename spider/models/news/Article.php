<?php

namespace spider\models\news;

use Yii;
use common\models\SpiderModel;

class Article extends SpiderModel
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbHouse;
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
        $file = "news/{$this->source_site_code}/show/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}