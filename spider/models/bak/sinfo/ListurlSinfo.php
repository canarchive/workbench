<?php

namespace spider\models\sinfo;

use common\models\SpiderModel;

class ListurlSinfo extends SpiderModel
{
    public static function tableName()
    {
        return '{{%listurl_sinfo}}';
    }

    public function listFile()
    {
        $file = "sinfo/{$this->site_code}/list/{$this->id}-{$this->page}.html";
        return $file;
    }
}
