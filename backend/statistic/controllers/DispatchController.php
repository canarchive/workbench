<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class DispatchController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'dispatch';
    protected $modelClass = 'spread\models\statistic\Dispatch';
    protected $modelSearchClass = 'spread\models\statistic\searchs\Dispatch';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
