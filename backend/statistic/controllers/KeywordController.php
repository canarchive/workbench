<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class KeywordController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'keyword';
    protected $modelClass = 'common\statistic\models\Keyword';
    protected $modelSearchClass = 'common\statistic\models\searchs\Keyword';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
