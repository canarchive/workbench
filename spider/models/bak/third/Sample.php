<?php

namespace spider\models\third;

use Yii;
use common\models\GallerycmsModel;

class Sample extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%sample}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbEale;
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
        $file = "eale/showsample/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}
