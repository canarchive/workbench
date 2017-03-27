<?php

namespace spider\models\merchant;

use Yii;
use common\models\SpiderModel;

class Merchant extends SpiderModel
{
    public static function tableName()
    {
        return '{{%merchant}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbMerchant;
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
        $file = "merchant/{$this->source_site_code}/show/{$this->source_city_code}/{$this->source_id}.html";
        return $file;
    }
}
