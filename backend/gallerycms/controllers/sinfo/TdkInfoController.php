<?php

namespace backend\gallerycms\controllers\eale;

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
        $type = Yii::$app->request->get('type', 'eale');
        $tdkInfos = require(Yii::getAlias('@gallerycms') . '/config/eale/tdk-' . $type . '.php');
        $urlInfos = require(Yii::getAlias('@gallerycms') . '/config/eale/url-' . $type . '.php');
        $domain = $type == '' ? 'eale' : $type;
        $pcDomain = Yii::getAlias("@{$domain}.cmsurl");
        $mobileDomain = Yii::getAlias("@m.{$domain}.cmsurl");

        $return = ['currentElem' => $type, 'tdkInfos' => $tdkInfos, 'urlInfos' => $urlInfos, 'pcDomain' => $pcDomain, 'mobileDomain' => $mobileDomain];
        return $return;
    }
}
