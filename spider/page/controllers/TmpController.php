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
}
