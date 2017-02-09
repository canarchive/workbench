<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\house\models\Quote;

class QuoteController extends HouseController
{
    public function init()
    {
        parent::init();

        //$this->layout = '@gallerycms/views/layouts/main-quote';
    }

	public function actionIndex()
	{
		$tag = Yii::$app->request->get('tag', '');
        $tag = substr($tag, 1);
		$model = new Quote();
		$quoteSortInfos = $model->quoteSortInfos;
		$tagInfos = $model->formatTag($tag, $quoteSortInfos);
		if ($tagInfos === false) {
            throw new NotFoundHttpException('页面不存在');
		}

		$page = Yii::$app->request->get('page');
		//$infos = $model->getInfos([]);
        $where = [];//$tagInfos['ids'] === null ? ['status' => 1] : ['status' => 1, 'category_id' => $tagInfos['ids']];
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 12, 'pagePreStr' => '_']);
		$datas = [
			'tag' => $tag,
			'page' => $page,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
			'tagInfos' => $tagInfos,
			'quoteSortInfos' => $quoteSortInfos,
			'model' => $model,
		];
        //print_r($tagInfos);print_r($quoteSortInfos);exit();
		$tagStr = '';
		foreach ($tagInfos as $tagKey => $tagValue) {
			if (empty($tagValue)) {
				continue;
			}
			$tagStr .= $quoteSortInfos[$tagKey]['values'][$tagValue];
		}
		//$tagStr = rtrim($tagStr, '-');
        $pageStr = $page > 1 ? "_第{$page}页-" : '-';

		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('quote-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Quote();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}
		$quoteSortInfos = $model->quoteSortInfos;
		$tagStr = '';
		foreach ($quoteSortInfos as $tagKey => $tagValue) {
			if (empty($info[$tagKey])) {
				continue;
			}
			$tagKeyInfo = $info[$tagKey];
			$str = $tagValue['values'][$tagKeyInfo];
			$tagStr .= $str;
			$info[$tagKey] = $str;
		}

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
        $this->getTdkInfos('quote-show', $dataTdk);
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
