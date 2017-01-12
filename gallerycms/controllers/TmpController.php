<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;
use gallerycms\cmsad\models\Article;

class TmpController extends GallerycmsController
{
    public function actionTest()
    {
        $model = new Article();
        $catdirs = $model->db->createCommand('SELECT `category_id` FROM wc_article GROUP BY category_id')->queryAll();
        $sql = '';
        foreach ($catdirs as $catdir) {
            $sql .= "UPDATE `wc_article` SET `status` = 1 WHERE `category_id` = {$catdir['category_id']} AND `status` = 0 LIMIT 10 \n";
        }
        echo $sql; 
        print_r($catdirs);
    }
}
