<?php

namespace spider\models\sinfo;

use Yii;
use common\models\GallerycmsModel;

class Article extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%article}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbSinfo;
    }

    public function showFile()
    {
        $file = "sinfo/{$this->source_site_code}/show/{$this->id}.html";
        return $file;
    }
}
