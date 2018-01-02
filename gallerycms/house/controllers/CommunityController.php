<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller;
use gallerycms\house\models\Community;

class Controller extends Controller
{
	public function actionIndex()
	{
		$model = new Community();
		$infos = $model->getInfos([]);
		$datas = [
			'infos' => $infos,
		];
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Community();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
