<?php

namespace backend\statistic\controllers;

use Yii;
use backend\components\AdminController;

class SalemanController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'channel';
    protected $modelClass = 'baseapp\statistic\models\Saleman';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Saleman';
    protected $showInfo = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }

    public function actionListservice()
    {
        //$modelDispatchClass = 'baseapp\statistic\models\ServiceDispatch';
        $searchClass = $modelSearchDispatchClass = 'baseapp\statistic\models\searchs\ServiceDispatch';
        $this->searchModel = new $searchClass();
        $dataProvider = $this->searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'service-dispatch', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpdate()
    {
        $updateType = Yii::$app->request->get('update_type', '');
        $class = $this->modelClass;
        $model = new $class();
        if ($updateType == 'service') {
            echo $model->salemanServiceSql();
        } else {
            echo $model->salemanSql();
        } 
    }
}
