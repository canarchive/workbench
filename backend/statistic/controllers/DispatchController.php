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
        $model->updateType = $updateType;
        echo $model->dispatchSql();
    }
}
