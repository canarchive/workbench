<?php

namespace spider\models\third;

use Yii;
use common\models\GallerycmsModel;

class Star extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%star}}';
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
