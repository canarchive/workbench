<?php

namespace backend\subsite\controllers\decoration;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitView;

class UserMerchantController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'subsite\decoration\models\UserMerchant';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\UserMerchant';
    public $viewPrefix = '@backend/subsite/views/user-merchant/';

    public function actionListout()
    {
        $action = \Yii::$app->request->get('action');
        if (in_array($action, array('view'))) {
			$method = "_{$action}Method";
            $datas = $this->$method();
            return $datas;
            exit();
        }

        return $this->_listinfoInfo('listout');
	}

    protected function _viewMethod()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$ids = Yii::$app->request->post('ids');

        $modelClass = $this->modelClass;
        $model = new $modelClass();
		$merchantIds = isset($this->privInfo['merchant_id']) ? $this->privInfo['merchant_id'] : [];
		$datas = $model->viewInfo($merchantIds, $ids);;

        return $datas;
    }
}
