<?php

namespace spider\models\cmsad;

use common\models\GallerycmsModel;

class Merchant extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%merchant}}';
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
