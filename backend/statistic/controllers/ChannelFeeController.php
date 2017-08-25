<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;

class ChannelFeeController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'channel-fee';
    protected $modelClass = 'baseapp\statistic\models\ChannelFee';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\ChannelFee';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }
}
