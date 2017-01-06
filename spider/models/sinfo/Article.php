<?php

namespace spider\models\sinfo;

use common\models\GallerycmsModel;

class Article extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%article}}';
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
        $file = "{$this->source_site_code}/show/{$this->category_code_first}/{$this->category_code}/{$this->source_id}.html";
        return $file;
    }
}
