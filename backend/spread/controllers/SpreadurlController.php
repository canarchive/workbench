<?php

namespace backend\spread\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use spread\models\Spreadurl;

class SpreadurlController extends AdminController
{
    public function actionListinfo()
    {
        $_GET['show_full'] = 0;
        $this->searchModel = new Spreadurl();
        $datas = $this->searchModel->createDatas(Yii::$app->request->getQueryParams());

        return $this->render('/spreadurl/listinfo', ['infos' => $datas]);
    }

    public function actionDetail()
    {
        $_GET['show_full'] = 1;
        $this->searchModel = new Spreadurl();
        $datas = $this->searchModel->createDatas(Yii::$app->request->getQueryParams());

        return $this->render('/spreadurl/detail', ['infos' => $datas]);
    }
}
