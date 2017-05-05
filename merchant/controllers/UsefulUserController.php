<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;
use spread\decoration\models\UserMerchant;
use spread\decoration\models\Guestbook;
use spread\decoration\models\User;
use spread\decoration\models\House;

class UsefulUserController extends LoginedController
{
	public function actionIndex()
	{
		$merchantId = isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;

		$datas = [];
		if ($merchantId > 0) {
		    $userMerchant = new UserMerchant();
			$where = ['merchant_id' => $merchantId];
			//$infos = $userMerchant->getInfos(['merchant_id' => $merchantId]);
		    $datas = $userMerchant->getInfosByPage(['where' => $where, 'pageSize' => 20]);
			foreach ($datas['infos'] as $key => & $info) {
				if (!$info['view_at']) {
					$info['mobile'] = substr_replace($info['mobile'], '******', 3, 6);
				}
			}
		}
        return $this->render('index', $datas);
	}

	public function actionMessage()
	{
		$listUrl = Url::to(['/useful-user/index']);
		$data = $this->checkInfo();
        $info = $data['info'];
		if (Yii::$app->request->isPost) {
			$dataNew['content'] = strip_tags(Yii::$app->request->post('content'));
			$dataNew['user_merchant_id'] = $data['id'];
			$dataNew['created_at'] = Yii::$app->params['currentTime'];
            $status = Yii::$app->request->post('status');
            if (($status == 'back_reply' && $info['status'] == '') || $status == '') {
                if (Yii::$app->params['currentTime'] - $info['created_at'] < 86400 || $status == '') {
                    $info->status = $status;
                    $info->update(false);
                }
            }
			$model = new Guestbook($dataNew);
			$r = $model->insert(false);
		    return Yii::$app->response->redirect($listUrl)->send();
        } 		

        return $this->render('message', $data);
	}

	public function actionNotelist()
	{
		$datas = $this->checkInfo();
		$guestbook = new Guestbook();
		$datas['infos'] = $guestbook->find()->where(['user_merchant_id' => $datas['id']])->orderBy('created_at DESC')->all();
		//print_R($datas);exit();
        return $this->render('notelist', $datas);
	}

	public function actionViewAjax()
	{
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$type = Yii::$app->request->get('type');
		if ($type == 'notelist') {
			$result = $checkInfo();
			if ($result) {
				return ['status' => 400, 'message' => 'error'];
			}
			$guestbookModel = new Guestbook();
			$currentTime = Yii::$app->params['currentTime'];
			$sql = "UPDATE `view_at` = {$currentTime} WHERE `user_merchant_id` = {$id} AND `view_at` = 0";
			//$noteModel->
			return ['status' => 200, 'message' => 'OK'];
		}
		$ids = Yii::$app->request->post('ids');
		$userMerchant = new UserMerchant();
		$datas = $userMerchant->viewInfo($this->merchantInfo['id'], $ids);

		return $datas;
		//print_r($_POST);
	}

	protected function checkInfo()
	{
		$listUrl = Url::to(['/useful-user/index']);
		$user = Yii::$app->user->getIdentity();
		$id = Yii::$app->request->get('id');
		$id = empty($id) ? Yii::$app->request->post('id') : $id;
		if (empty($id)) {
		    return Yii::$app->response->redirect($listUrl)->send();
		}

		$info = UserMerchant::findOne($id);
		if (empty($info) || $info['merchant_id'] != $user->merchant_id) {
		    return Yii::$app->response->redirect($listUrl)->send();
		}
		$ownerInfo = User::find()->where(['mobile' => $info['mobile']])->orderBy(['id' => SORT_DESC])->one();
		$houseInfo = House::findOne($info['house_id']);
		$data = [
			'user' => $user,
			'id' => $id,
            'info' => $info,
			'ownerInfo' => $ownerInfo,
		    'ownerName' => !empty($ownerInfo) ? $ownerInfo->name : '',
		    'houseAddress' => !empty($houseInfo) ? $houseInfo->address : '',
		];

		return $data;
	}
}
