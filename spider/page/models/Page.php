<?php

namespace spider\page\models;

use Yii;
use yii\helpers\FileHelper;
use common\models\SpiderModel;

class Page extends SpiderModel
{
    public function getIsMobileInfos()
    {
        $datas = [
            0 => 'PC端页面',
            1 => '移动端页面',
            2 => '自适应页面',
        ];

        return $datas;
    }
}
