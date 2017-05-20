<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class KeywordController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'keyword';
    protected $modelClass = 'common\models\statistic\Keyword';
    protected $modelSearchClass = 'common\models\statistic\searchs\Keyword';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
