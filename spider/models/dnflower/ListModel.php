<?php

namespace spider\models\dnflower;

use common\models\SpiderModel;

class ListModel extends SpiderModel
{
    public static function tableName()
    {
        return '{{%list_flower}}';
    }

    public function listFile()
    {
        $file = "dnflower/{$this->site_code}/list/{$this->sort}/{$this->page}.html";
        return $file;
    }
}
