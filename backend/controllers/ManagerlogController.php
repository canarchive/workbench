<?php

namespace backend\controllers;

use Yii;
use backend\components\ControllerTraitView;

class ManagerlogController extends Controller
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

    protected function getListinfoView()
    {
        return $this->viewPrefix . 'listinfo';
    }
}
