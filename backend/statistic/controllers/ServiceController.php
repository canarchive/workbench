<?php

namespace backend\statistic\controllers;

use Yii;
use backend\components\AdminController;

class ServiceController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'service';
    protected $modelClass = 'baseapp\statistic\models\ReportService';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\ReportService';
    protected $showInfo = false;
    public $showSubnav = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }

    public function actionUpdate()
    {
        $class = $this->modelClass;
        $model = new $class();
        echo $model->serviceSql();
    }

    public function actionDispatch()
    {
        //$modelDispatchClass = 'baseapp\statistic\models\ServiceDispatch';
        $searchClass = $modelSearchDispatchClass = 'baseapp\statistic\models\searchs\ServiceDispatch';
        $this->searchModel = new $searchClass();
        $dataProvider = $this->searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'service-dispatch', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionWage()
    {
        //$modelWageClass = 'baseapp\statistic\models\ServiceWage';
        $searchClass = $modelSearchWageClass = 'baseapp\statistic\models\searchs\ServiceWage';
        $this->searchModel = new $searchClass();
        $dataProvider = $this->searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'service-wage', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
