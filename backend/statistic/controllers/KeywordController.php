<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class KeywordController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'keyword';
    protected $modelClass = 'baseapp\statistic\models\Keyword';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Keyword';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
