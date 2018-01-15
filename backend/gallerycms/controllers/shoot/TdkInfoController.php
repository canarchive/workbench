<?php

namespace backend\gallerycms\controllers\shoot;

use Yii;
use backend\gallerycms\controllers\TdkInfo;

class TdkInfoController extends TdkInfo
{
    protected $modelClass = '';
    public $showSubnav = false;

    public function actionListinfo()
    {
        $datas = $this->getUrlTdkInfos();
        $datas['domain'] = Yii::$app->params['baseDomain'];
        //print_r($datas);exit();
        return $this->render('listinfo', $datas);
    }

    public function getUrlTdkInfos()
    {
        $type = Yii::$app->request->get('type', 'shoot');
        $siteInfos = require Yii::getAlias('@gallerycms') . '/config/shoot/site-infos.php';
        $type = !in_array($type, array_keys($siteInfos)) ? 'shoot' : $type;

        $fileTdk = Yii::getAlias('@gallerycms') . "/config/shoot/tdk-{$type}.php";
        $tdkInfos = require($fileTdk);
        $urlInfos = require(Yii::getAlias('@gallerycms') . '/config/shoot/url.php');

        $pcDomain = $siteInfos[$type]['pc'];
        $mobileDomain = $siteInfos[$type]['mobile'];

        $return = [
            'currentElem' => $type, 
            'tdkInfos' => $tdkInfos, 
            'urlInfos' => $urlInfos, 
            'pcDomain' => $pcDomain, 
            'mobileDomain' => $mobileDomain,
            'siteInfos' => $siteInfos,
        ];
        return $return;
    }
}
