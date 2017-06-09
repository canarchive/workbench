<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class ChannelController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'channel';
    protected $modelClass = 'common\statistic\models\Report';
    protected $modelSearchClass = 'common\statistic\models\searchs\Report';
    protected $showInfo = false;


    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
