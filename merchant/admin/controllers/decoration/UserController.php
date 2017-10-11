<?php

namespace merchant\admin\controllers\decoration;

use Yii;
use backend\subsite\controllers\decoration\UserController as UserControllerBase;

class UserController extends UserControllerBase
{
    use BaseTrait;

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
        if ($action->id == 'change-service') {
        $privInfo = Yii::$app->params['privInfo'];
        print_r($privInfo);exit();
        if (isset($_GET['merchant_id'])) {
            unset($_GET['merchant_id']);
        }
        if (isset($_GET['service_id'])) {
            unset($_GET['service_id']);
        }
        }
        echo $action->id;
    }

    public function actionListpond()
    {
        $_GET['ext_param'] = 'pond';
        return $this->_listinfoInfo($this->viewPrefix . 'listpond');
    }

    public function actionChangeService($id)
    {
        $model = $this->findModel($id);
        var_dump($model);
    }
}
