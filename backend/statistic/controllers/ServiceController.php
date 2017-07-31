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

    protected $modelWageClass = 'baseapp\statistic\models\ServiceWage';
    protected $modelSearchWageClass = 'baseapp\statistic\models\searchs\ServiceWage';
    protected $showInfo = false;

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

    public function actionWage()
    {
        $searchClass = $this->modelSearchWageClass;
        $searchModel = new $searchClass();
        $searchDatas = $searchModel->getSearchDatas();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'wage', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'searchDatas' => $searchDatas,
        ]);
    }
}
