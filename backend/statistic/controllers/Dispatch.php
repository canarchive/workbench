<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class Dispatch extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'dispatch';

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
