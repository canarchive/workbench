<?php

namespace gallerycms\eale\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\EaleController;
use gallerycms\eale\models\Info AS InfoModel;
use gallerycms\eale\models\Category;

class InfoController extends EaleController
{
	public function actionIndex()
	{
		$page = Yii::$app->request->get('page');
        $sort = Yii::$app->request->get('sort');
        $sort = $sort == 'info' ? $this->siteCode : $sort;

        $where = ['sort' => $sort];
		$model = new InfoModel();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 12]);
		$datas = [
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];

		$pageStr = $page > 1 ? "第{$page}页_" : '';

        $tagStr = isset($tagInfo['cInfo']) ? $tagInfo['cInfo']['name'] : '资讯列表';
		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('info-list', $dataTdk);
		return $this->render('/info/index', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new InfoModel();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}

		$dataTdk = ['{{INFONAME}}' => $info['name']];
		$this->getTdkInfos('sample-show', $dataTdk);

        $relatedInfos = $this->getRelatedInfos($info);
		$datas = [
			'info' => $info,
            'relatedInfos' => $relatedInfos,
		];
		return $this->render('/info/show', $datas);
	}
}
