<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\ControllerTraitFull;

class UserController extends Controller
{
	use ControllerTraitFull;
    protected $modelClass = 'merchant\models\User';
    protected $modelSearchClass = 'merchant\models\searchs\User';

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
