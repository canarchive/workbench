<?php

namespace backend\statistic\controllers;

use Yii;
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

        $update = Yii::$app->request->get('action-sort');
        if ($update == 'update-sql') {
            $class = $this->modelClass;
            $model = new $class();
            $model->channelFeeSql();
			$url = '/statistic/channel-fee/listinfo.html?field_hit=created_day';
            return Yii::$app->response->redirect($url)->send();
            exit();
        }

        return parent::beforeAction($action);
    }
}
