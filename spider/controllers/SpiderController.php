<?php

namespace spider\controllers;

use Yii;
use spider\components\Controller;
use spider\models\Site;

class SpiderController extends Controller
{
    public function actionCompanylist()
    {
        $siteInfo = $this->siteInfo();
        $siteInfo->companylist();
    }

    public function actionSpider()
    {
        $siteInfo = $this->siteInfo();
        $action = Yii::$app->request->get('action');
        $siteInfo->spider($action);
    }

    public function actionDeal()
    {
        $siteInfo = $this->siteInfo();
        $action = Yii::$app->request->get('action');
        $siteInfo->deal($action);
    }

    public function actionFileDown()
    {
        $siteInfo = $this->siteInfo();
        $siteInfo->fileDown();
    }

    protected function siteInfo()
    {
        $siteId = Yii::$app->request->get('id');
        if (empty($siteId)) {
            exit('param error');
        }

        $siteInfo = Site::findOne($siteId);
        if (empty($siteInfo)) {
            exit('info empty');
        }

        return $siteInfo;
    }
}
