<?php

namespace backend\gallerycms\controllers\sinfo;

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
        $type = Yii::$app->request->get('type', 'qqyuntongji');
        $siteInfos = require Yii::getAlias('@gallerycms') . '/config/sinfo/site-infos.php';
        $type = !in_array($type, array_keys($siteInfos)) ? 'sinfo' : $type;

        $baseTdkInfos = require(Yii::getAlias('@gallerycms') . "/config/sinfo/tdk-base.php");
        $siteTdkInfos = require(Yii::getAlias('@gallerycms') . "/config/sinfo/tdk.php");
        $tdkInfos = array_merge($baseTdkInfos, $siteTdkInfos[$type]);
        $urlInfos = require(Yii::getAlias('@gallerycms') . '/config/sinfo/url.php');

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
