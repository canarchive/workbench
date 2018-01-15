<?php

namespace spread\shoot\controllers;

use Yii;
use spread\components\Controller;

class SiteController extends Controller
{
    public function actionStatistic()
    {
        $this->_statistic('\spread\shoot\models\Visit');
        exit();
    }
}
