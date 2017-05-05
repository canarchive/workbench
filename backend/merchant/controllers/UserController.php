<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class UserController extends AdminController
{
    protected $modelClass = 'merchant\models\User';
    protected $modelSearchClass = 'merchant\models\searchs\User';
	use ControllerFullTrait;

    public function actionUpdate($id = 0)
    {
        if (Yii::$app->request->isAjax) {
            return $this->_updateByAjax();
        }

        return $this->_updateInfo($id, 'update');
    }

	protected function _addData()
	{
        return ['scenario' => 'create'];
	}

    protected function _getScenario()
    {
        return 'update';
    }
}
