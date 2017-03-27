<?php

namespace spider\models\news;

use common\models\SpiderModel;

class ListModel extends SpiderModel
{
    public static function tableName()
    {
        return '{{%list_news}}';
    }

    public function listFile()
    {
        $file = "news/{$this->site_code}/list/{$this->sort}/{$this->page}.html";
        return $file;
    }
}
