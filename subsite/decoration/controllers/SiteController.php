<?php

namespace subsite\decoration\controllers;

use Yii;
use yii\helpers\Url;
use subsite\components\Controller;
use subsite\decoration\models\SignupForm;
use subsite\decoration\models\Statistic;
use subsite\decoration\models\User;

class SiteController extends Controller
{
    public function actionStatistic()
    {
        $data['sort'] = 'decoration';
        $this->_statistic($data);
        exit();
    }
}
