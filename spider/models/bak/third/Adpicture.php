<?php

namespace spider\models\third;

use Yii;
use common\models\GallerycmsModel;

class Adpicture extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%adpicture}}';
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
}
