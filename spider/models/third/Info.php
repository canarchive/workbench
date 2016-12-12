<?php

namespace spider\models\third;

use Yii;
use common\models\GallerycmsModel;

class Info extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%info}}';
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
        $file = "eale/show/{$this->sort}/{$this->source_id}.html";
        return $file;
    }
}
