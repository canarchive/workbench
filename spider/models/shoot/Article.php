<?php

namespace spider\models\shoot;

use Yii;
use common\models\SpiderModel;

class Article extends SpiderModel
{
    public static function tableName()
    {
        return '{{%sample}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbShoot;
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
        $file = "shoot/{$this->source_site_code}/show/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}
