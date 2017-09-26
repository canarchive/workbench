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
		//echo date('Y-m-d H:i:s', $time) . '<br />';
		$sql = '';
		for ($j = 0; $j < 30; $j++) {
		$timeBase = time() - 86400 * $j;
		for ($i = 0; $i < 100; $i++) {
			$time = $timeBase - rand(10000, 36000);
			//echo date('Y-m-d H:i:s', $time) . '<br />';
        $sql .= "UPDATE `wc_article` SET `status` = 1, `created_at` = {$time}, `updated_at` = {$time} WHERE `status` = 0 LIMIT 1; \n";
		}
		}
        /*foreach ($catdirs as $catdir) {
            $sql .= "UPDATE `wc_article` SET `status` = 1 WHERE `category_id` = {$catdir['category_id']} AND `status` = 0 LIMIT 10; \n";
	    }*/
        echo $sql; 
        //print_r($catdirs);
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
		//$timeBase = time();
		for ($i = 0; $i < 8; $i++) {
		$timeBase = time() - 86400 * $i;
		foreach ($siteCodes as $siteCode) {
			foreach ($sortInfos as $sort => $name) {
                if ($sort != 'sqq') { continue;}
			    //if ($sort != 'smobile') { continue;}
			    //if ($sort != 'svisitor') { continue;}
			    //if ($sort != 'market') { continue;}
			$time = $timeBase - rand(10000, 18000) + 3600 * 3;
			echo date('Y-m-d H:i:s', $time); echo '<br />';
                $sql .= "UPDATE `wc_article` SET `status` = 1, `created_at` = {$time}, `updated_at` = {$time} WHERE `sort` = '{$sort}' AND `site_code`= '{$siteCode}' AND `status` = 0 LIMIT 1; \n";
			}
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
