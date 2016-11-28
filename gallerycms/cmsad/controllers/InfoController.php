<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\CmsadController;
use gallerycms\cmsad\models\Article;

class InfoController extends CmsadController
{
	public function actionIndex()
	{
		$model = new Article();

		$page = Yii::$app->request->get('page');
		$infos = $model->getInfos([]);
		$datas = [
			'page' => $page,
			'infos' => $infos,
			'model' => $model,
		];
		$pageStr = $page > 1 ? "_第{$page}页-" : '-';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Article();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$dataTdk = ['{{INFONAME}}' => $info['name']];
		$this->getTdkInfos('sample-show', $dataTdk);
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
