<?php

namespace backend\gallerycms\controllers\house;

use Yii;
use backend\gallerycms\controllers\TdkInfo;

class TdkInfoController extends TdkInfo
{
    protected $modelClass = '';

    public function actionListinfo()
    {
        $datas = $this->getUrlTdkInfos();
        $datas['domain'] = Yii::$app->params['baseDomain'];
        $datas['domainPc'] = Yii::getAlias('@gallerycmsurl');//$app->params['baseDomain'];
        //print_r($datas);exit();
        return $this->render('listinfo', $datas);
    }

    public function getUrlTdkInfos()
    {
        $tdkMerchant = require(Yii::getAlias('@gallerycms') . '/config/merchant/tdk.php');
        $tdkHouse = require(Yii::getAlias('@gallerycms') . '/config/house/tdk.php');
        $tdkInfos = array_merge($tdkHouse, $tdkMerchant);
        $urlMerchant = require(Yii::getAlias('@gallerycms') . '/config/merchant/url.php');
        $urlHouse = require(Yii::getAlias('@gallerycms') . '/config/house/url.php');
        $urlInfos = array_merge($urlHouse, $urlMerchant);

        return ['tdkInfos' => $tdkInfos, 'urlInfos' => $urlInfos];
    }
}
