<?php

namespace spider\models\shoot;

use common\models\SpiderModel;

class ListModel extends SpiderModel
{
    public static function tableName()
    {
        return '{{%list_shoot}}';
    }

    public function listFile()
    {
        $file = "shoot/{$this->site_code}/list/{$this->sort}/{$this->page}.html";
        return $file;
    }
}
