<?php

namespace backend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Managerlog;
use backend\models\searchs\Managerlog as ManagerlogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class ManagerlogController extends AdminController
{
	protected $modelClass = 'backend\models\Managerlog';
	protected $modelSearchClass = 'backend\models\searchs\Managerlog';
    use ControllerViewTrait;

    public function actionListinfom()
    {
        $managerId = Yii::$app->params['managerInfo']['id'];
        $_GET['Managerlog']['manager_id'] = $managerId;
        Yii::$app->params['currentManager'] = true;
        return $this->_listinfoInfo();
    }
}
