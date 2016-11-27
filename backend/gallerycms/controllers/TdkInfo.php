<?php

namespace backend\gallerycms\controllers;

use Yii;
use backend\components\AdminController;

class TdkInfo extends AdminController
{
    //public $viewPrefix = '/tdk-info/';

    public function actionListinfo()
    {
        $datas = $this->getUrlTdkInfos();
        $datas['domain'] = Yii::$app->params['baseDomain'];
        //print_r($datas);exit();
        return $this->render('/tdk-info/listinfo', $datas);
    }
}
