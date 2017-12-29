<?php

namespace backend\statistic\controllers;

use Yii;
use backend\components\AdminController;

class SalemanController extends AdminController
{
    use StatisticTrait;
    protected $viewCurrent = 'saleman';
    protected $modelClass = 'baseapp\statistic\models\Saleman';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Saleman';
    protected $showInfo = false;
    public $showSubnav = false;

    public function beforeAction($action)
    {
        $controllerId = $this->id;

        return parent::beforeAction($action);
    }

    public function actionListservice()
    {
        $searchClass = $modelSearchDispatchClass = 'baseapp\statistic\models\searchs\SalemanService';
        $this->searchModel = new $searchClass();
        $dataProvider = $this->searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'saleman-service', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpdate()
    {
        $updateType = Yii::$app->request->get('update_type', '');
        $class = $this->modelClass;
        $model = new $class();
        if ($updateType == 'service') {
            $model->salemanServiceSql();
	    	$url = '/statistic/saleman/listservice.html';
        } else {
            $model->salemanSql();
			$url = '/statistic/saleman/listinfo.html?field_hit=created_day';
        } 
        return Yii::$app->response->redirect($url)->send();
    }
}
