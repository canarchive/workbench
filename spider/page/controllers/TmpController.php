<?php

namespace spider\page\controllers;

use Yii;
use spider\components\Controller as SpiderController;
use spider\page\models\Asset;
use spider\page\models\Page;

class TmpController extends SpiderController
{
    public $siteInfos;
    public $showSubnav = true;
    public $pageModel;
    //public $pageInfos;
    
    public function init()
    {
        parent::init();

        $siteInfos = require(Yii::getAlias('@spider') . '/config/page/site.php');
        $this->pageModel = new Page();
        $pageInfos = $this->pageModel->find()->all();
        $datas = [];
        foreach ($pageInfos as $info) {
            $siteInfos[$info['site_code']]['pageInfos'][$info['is_mobile']][] = $info;
        }
        $this->siteInfos = $siteInfos;
        $this->layout = '@common/views/layouts/main-backend';
    }

    public function actionListinfo()
    {   
        $datas = [
            'model' => $this->pageModel,
            'siteInfos' => $this->siteInfos,
        ];
        return $this->render('listinfo', $datas);
    }   

    public function actionSpider()
    {
        $this->pageModel = new Page();
        $pageInfos = $this->pageModel->find()->where(['status' => 0])->all();
        foreach ($pageInfos as $info) {
            //echo $info['site_code'] . '-' . $info['is_mobile'] . '-' . $info['name'];exit();
            $info->spider();
        }
    }

    public function actionSpiderCss()
    {
        $model = new Asset();
        $infos = $model->find()->where(['name_ext' => 'css', 'status' => 1])->limit(2000)->all();
        //$infos = $model->find()->limit(2000)->all();
        //$infos = $model->find()->where(['name_ext' => 'css', 'status' => [0, 1, 2]])->limit(2000)->all();
        //echo count($infos);exit();
        foreach ($infos as $info) {
            $info->spider();
        }
    }

    public function actionDown()
    {
        $model = new Asset();
        $infos = $model->find()->where(['status' => 0])->limit(2000)->all();
        //$infos = $model->find()->limit(2000)->all();
        foreach ($infos as $info) {
            $info->down();
        }
    }

    public function actionDeal()
    {
        $this->pageModel = new Page();
        $pageInfos = $this->pageModel->find()->where(['status' => 1])->all();
        foreach ($pageInfos as $info) {
            $info->deal();
        }
    }

    public function actionDealCss()
    {
        $model = new Asset();
        $infos = $model->find()->where(['name_ext' => 'css'])->limit(2000)->all();
        //$infos = $model->find()->where(['name_ext' => 'css', 'status' => [0, 1, 2]])->limit(2000)->all();
        //echo count($infos);exit();
        foreach ($infos as $info) {
            $info->deal();
        }
    }
}
