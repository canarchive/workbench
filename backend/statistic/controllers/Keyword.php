<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class Keyword extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'keyword';

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
