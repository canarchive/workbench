<?php

namespace spider\models\third;

use Yii;
use common\models\GallerycmsModel;

class Customer extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%customer}}';
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
