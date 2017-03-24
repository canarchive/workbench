<?php

namespace spider\models\merchant;

use common\models\SpiderModel;

class ListModel extends SpiderModel
{
    public static function tableName()
    {
        return '{{%list_merchant}}';
    }

    public function listFile()
    {
        $file = "merchant/{$this->site_code}/list/{$this->source_city_code}-{$this->page}.html";
        return $file;
    }
}
