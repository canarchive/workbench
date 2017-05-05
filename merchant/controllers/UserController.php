<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;

class UserController extends LoginedController
{
	public function actionIndex()
	{
		$merchantId = isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;

        $datas = [];
		if ($this->userInfo->role == 'valid') {
            Yii::$app->user->logout();
            return $this->goHome();
		}
        $userModel = $this->getSpreadModel('user');
        //print_r($this->userInfo->role);
        if (!empty($userModel)) {
            //$where = ['merchant_id' => $merchantId];
            $where = $this->userInfo->role == 'service' ? ['merchant_id' => $merchantId, 'service_id' => $this->userInfo->service_id] : ['merchant_id' => $merchantId];
		    $datas = $userModel->getInfosByPage(['where' => $where]);
        }
        return $this->render('index', $datas);
	}

	public function actionMessage()
	{
		$listUrl = Url::to(['/user/index']);
		$data = $this->checkInfo();
		if (Yii::$app->request->isPost) {
			$dataNew['content'] = strip_tags(Yii::$app->request->post('content'));
			$dataNew['user_merchant_id'] = $data['id'];
			$dataNew['created_at'] = Yii::$app->params['currentTime'];
			$model = new MerchantNote($dataNew);
			$r = $model->insert(false);
		    return Yii::$app->response->redirect($listUrl)->send();
        } 		

        return $this->render('message', $data);
	}

	public function actionNotelist()
	{
		$datas = $this->checkInfo();
		$merchantNote = new MerchantNote();
		$datas['infos'] = $merchantNote->find()->where(['user_merchant_id' => $datas['id']])->orderBy('reply_at DESC')->all();
		//print_R($datas);exit();
        return $this->render('notelist', $datas);
	}

	public function actionViewAjax()
	{
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$type = Yii::$app->request->get('type');
		$ids = Yii::$app->request->post('ids');
		$datas = $this->getSpreadModel('user')->viewInfo($this->merchantInfo['id'], $ids);

		return $datas;
		//print_r($_POST);
	}

	protected function checkInfo()
	{
		//$listUrl = Url::to(['/user/index']);
		$user = Yii::$app->user->getIdentity();
		$id = Yii::$app->request->get('id');
		$id = empty($id) ? Yii::$app->request->post('id') : $id;
		if (empty($id)) {
            return ['status' => 400, 'message' => '参数有误！'];
		    //return Yii::$app->response->redirect($listUrl)->send();
		}

		$info = $getUserSpread()->findOne($id);
		if (empty($info) || $info['merchant_id'] != $user->merchant_id) {
            return ['status' => 400, 'message' => '您没有操作该记录的权限'];
		    //return Yii::$app->response->redirect($listUrl)->send();
		}
		$data = [
			'user' => $user,
			'id' => $id,
			'userInfo' => $info,
		];

		return $data;
	}
}
