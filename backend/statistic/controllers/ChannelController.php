<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class ChannelController extends AdminController
{
    use StatisticTrait;
    public $viewPrefix = '/';
    protected $viewCurrent = 'channel';
    protected $modelClass = 'spread\models\statistic\Report';
    protected $modelSearchClass = 'spread\models\statistic\searchs\Report';
    protected $showInfo = false;


    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
