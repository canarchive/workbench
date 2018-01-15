<?php

namespace backend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Managerlog;
use backend\models\searchs\Managerlog as ManagerlogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use backend\components\ControllerTraitView;

class ManagerlogController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'backend\models\Managerlog';
    protected $modelSearchClass = 'backend\models\searchs\Managerlog';

    public function actionListinfom()
    {
        $managerId = Yii::$app->params['managerInfo']['id'];
        $_GET['Managerlog']['manager_id'] = $managerId;
        Yii::$app->params['currentManager'] = true;
        return $this->_listinfoInfo();
    }
}
