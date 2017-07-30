<?php

namespace backend\statistic\controllers;

use Yii;
use backend\components\AdminController;

class DispatchServiceController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'dispatch';
    protected $modelClass = 'baseapp\statistic\models\DispatchService';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\DispatchService';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
