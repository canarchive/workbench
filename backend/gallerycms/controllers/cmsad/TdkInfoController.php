<?php

namespace backend\gallerycms\controllers\cmsad;

use Yii;
use backend\gallerycms\controllers\TdkInfo;

class TdkInfoController extends TdkInfo
{
    protected $modelClass = '';

    public function getUrlTdkInfos()
    {
        $tdkInfos = require(Yii::getAlias('@gallerycms') . '/config/tdk-cmsad.php');
        $urlInfos = require(Yii::getAlias('@gallerycms') . '/config/url-cmsad.php');

        return ['tdkInfos' => $tdkInfos, 'urlInfos' => $urlInfos];
    }
}
