<?php

namespace gallerycms\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\cmsad\models\Article;
use gallerycms\sinfo\models\Info;

class TmpController extends GallerycmsController
{
    public function actionAvatar()
    {   
        for ($i = 1; $i <= 2000; $i++) {
            $url = "img.to8to.com/headphoto/{$i}.jpg?v=14569289320";
            $j = 50000 + $i;
            echo "wget -O {$j}.jpg {$url}<br />";
        }
    }   
}
