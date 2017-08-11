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
        $this->searchModel = new Spreadurl();
        $datas = $this->searchModel->createDatas(Yii::$app->request->getQueryParams());

        $view = $this->searchModel->show_full ? 'detail' : 'listinfo';
        return $this->render('/spreadurl/' . $view, ['infos' => $datas]);
    }
}
