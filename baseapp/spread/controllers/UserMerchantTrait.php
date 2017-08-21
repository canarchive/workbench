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

        return $this->_listinfoInfo('@backend/subsite/views/user-merchant/listout');
	}

    public function actionUpdateout($id = 0)
    {
        $model = $this->findModel($id);
        $privInfo = $model->_privInfo();
        if (Yii::$app->getRequest()->method == 'POST') {
            $listUrl = $this->menuInfos['menus']['subsite_decoration_user-merchant_listout']['url'];
		    $merchantIds = isset($privInfo['merchant_id']) ? $privInfo['merchant_id'] : [];
            if (empty($merchantIds)) {
                return Yii::$app->response->redirect($listUrl)->send($listUrl);
                exit();
            }

            $content = strip_tags(Yii::$app->request->post('content'));
            $model->addGuestbook(['content' => $content]);

            $status = Yii::$app->request->post('status', '');
            if (in_array($status, ['', 'back_reply'])) {// && $model->isLock !== true) {
                $model->status = $status;
                $model->update(false);
            }
            return Yii::$app->response->redirect($listUrl)->send($listUrl);
            exit();
        }

        return $this->render($this->viewPrefix . 'updateout', ['model' => $model]);
    }

    protected function _viewMethod()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$ids = Yii::$app->request->post('ids');

        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $privInfo = $model->_privInfo();
		$merchantIds = isset($privInfo['merchant_id']) ? $privInfo['merchant_id'] : [];
		$datas = $model->viewInfo($merchantIds, $ids);;

        return $datas;
    }
}
