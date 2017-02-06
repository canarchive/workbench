<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\house\models\Sample;

class SampleController extends HouseController
{
	public function actionIndex()
	{
		$tag = Yii::$app->request->get('tag', '');
		$model = new Sample();
		$houseSortInfos = $model->houseSortInfos;
		$tagInfos = $model->formatTag($tag, $houseSortInfos);
		if ($tagInfos === false) {
            throw new NotFoundHttpException('页面不存在');
		}
        $this->layout = '@gallerycms/views/layouts/main-plat-pic';

		$page = Yii::$app->request->get('page');
		//$infos = $model->getInfos([]);
        $where = [];//$tagInfos['ids'] === null ? ['status' => 1] : ['status' => 1, 'category_id' => $tagInfos['ids']];
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 30]);
		$datas = [
			'tag' => $tag,
			'page' => $page,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
			'tagInfos' => $tagInfos,
			'houseSortInfos' => $houseSortInfos,
			'model' => $model,
		];
		$tagStr = '';
		foreach ($tagInfos as $tagKey => $tagValue) {
			if (empty($tagValue)) {
				continue;
			}
			$tagStr .= $houseSortInfos[$tagKey]['values'][$tagValue];
		}
		//$tagStr = rtrim($tagStr, '-');
        $pageStr = $page > 1 ? "_第{$page}页-" : '-';

		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        /*$model = new Sample();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}
		$houseSortInfos = $model->houseSortInfos;
		$tagStr = '';
		foreach ($houseSortInfos as $tagKey => $tagValue) {
			if (empty($info[$tagKey])) {
				continue;
			}
			$tagKeyInfo = $info[$tagKey];
			if ($tagKey == 'area') {
				$tagKeyInfo = ceil($tagKeyInfo / 10) * 10;
				$tagKeyInfo = $tagKeyInfo > 130 ? 130 : $tagKeyInfo;
			}
			$str = $tagValue['values'][$tagKeyInfo];
			$tagStr .= $str;
			$info[$tagKey] = $str;
		}

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
        $this->getTdkInfos('sample-show', $dataTdk);*/
		$datas = [
			'info' => [],//$info,
		];
		return $this->render('show', $datas);
	}
}
