<?php

namespace baseapp\spread\controllers;

use Yii;
use backend\components\ControllerTraitView;

trait UserMerchantTrait
{
    use ControllerTraitView;

    public function actionListout()
    {
        $action = Yii::$app->request->get('action');
        if (in_array($action, array('view'))) {
			$method = "_{$action}Method";
            $datas = $this->$method();
            return $datas;
            exit();
        }

        return $this->_listinfoInfo('listout');
	}

    public function actionUpdateout()
    {
    }

    protected function _viewMethod()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$ids = Yii::$app->request->post('ids');

        $modelClass = $this->modelClass;
        $model = new $modelClass();
		$merchantIds = isset($this->privInfo['merchant_id']) ? $this->privInfo['merchant_id'] : [];
		$datas = $model->viewInfo($merchantIds, $ids);;

        return $datas;
    }
}
