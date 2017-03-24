<?php

namespace spider\models\cmsad;

use common\models\SpiderModel;

class ListurlCmsad extends SpiderModel
{
    public static function tableName()
    {
        return '{{%listurl_cmsad}}';
    }

    public function listFile()
    {
        $file = "{$this->site_code}/list/{$this->sort}-{$this->sort_sub}-{$this->page}.html";
        return $file;
    }
}
