<?php

namespace shop\controllers;

use shop\components\Controller as ShopController;

class RealTimeController extends ShopController
{
    public function actionIndex()
    {
		//$indexGoods = new \shop\models\IndexGoods();
		$infos = [];//$indexGoods->getInfos();
        return $this->render('index', ['infos' => $infos]);
    }
}
