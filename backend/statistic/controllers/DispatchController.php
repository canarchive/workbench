<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class DispatchController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'dispatch';
    protected $modelClass = 'common\models\statistic\Dispatch';
    protected $modelSearchClass = 'common\models\statistic\searchs\Dispatch';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
