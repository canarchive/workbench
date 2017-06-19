<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class DispatchController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'dispatch';
    protected $modelClass = 'baseapp\statistic\models\Dispatch';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Dispatch';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
