<?php

namespace backend\statistic\controllers;

use yii\web\NotFoundHttpException;

trait StatisticTrait
{
    public function actionListinfo()
    {
        $this->showSubnav = false;
        return $this->_listinfoInfo($this->viewCurrent);
    }
}
