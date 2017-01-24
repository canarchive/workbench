<?php

namespace gallerycms\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\cmsad\models\Article;
use gallerycms\sinfo\models\Info;

class TmpController extends GallerycmsController
{
    public function actionTest()
    {   
        $action = Yii::$app->request->get('action');
        $this->$action();
    }   

    protected function updateCmsad()
    {   
        $model = new Article();
        $catdirs = $model->db->createCommand('SELECT `category_id` FROM wc_article GROUP BY category_id')->queryAll();
		$time = time();
        $sql = "UPDATE `wc_article` SET `status` = 1, `created_at` = {$time}, `updated_at` = {$time} WHERE `status` = 0 LIMIT 30; \n";
        /*foreach ($catdirs as $catdir) {
            $sql .= "UPDATE `wc_article` SET `status` = 1 WHERE `category_id` = {$catdir['category_id']} AND `status` = 0 LIMIT 10; \n";
	    }*/
        echo $sql; 
        print_r($catdirs);
    }   

    protected function updateInfo()
    {   
        $model = new Info();
		//$model->autoPublish();
		//exit();
        $siteInfos = require(Yii::getAlias('@gallerycms') . '/config/sinfo/site-infos.php');
        $siteCodes = array_keys($siteInfos);
        $model = new Info();
		$sortInfos = $model->sortInfos;
        $sql = ''; 
		$time = time();
		foreach ($siteCodes as $siteCode) {
			foreach ($sortInfos as $sort => $name) {
                $sql .= "UPDATE `wc_article` SET `status` = 1, `created_at` = {$time}, `updated_at` = {$time} WHERE `sort` = '{$sort}' AND `site_code`= '{$siteCode}' AND `status` = 0 LIMIT 1; \n";
			}
		}
		echo $sql;exit();

        //$infos = $model->find()->select('id, sort, site_code')->limit(20)->all();
        $infos = $model->find()->select('id, sort, site_code')->all();
        $i = 0;
        foreach ($infos as $info) {
            $j = $i % 8;
            $siteCode = $siteCodes[$j];
            echo $j. $siteCode . '<br />';
            $info->site_code = $siteCode;
            //$info->update(false);
            $i++;

        }   
        print_r($infos);
        echo count($infos);
    }   
}
