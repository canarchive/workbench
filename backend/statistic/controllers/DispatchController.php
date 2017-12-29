<?php

namespace backend\statistic\controllers;

use Yii;
use backend\components\AdminController;

class DispatchController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'dispatch';
    protected $modelClass = 'baseapp\statistic\models\Dispatch';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Dispatch';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }

    public function actionUpdate()
    {
        $updateType = Yii::$app->request->get('update_type', '');
        $class = $this->modelClass;
        $model = new $class();
        if ($updateType == 'service') {
            $model->serviceDispatchSql();
			$url = '/statistic/service/dispatch.html';
        } else {
			$url = '/statistic/dispatch/listinfo.html?field_hit=created_day';
            $model->dispatchSql();
        } 
        return Yii::$app->response->redirect($url)->send();
    }
}
