<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class ServiceController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'service';
    protected $modelClass = 'common\models\statistic\ReportService';
    protected $modelSearchClass = 'common\models\statistic\searchs\ReportService';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
