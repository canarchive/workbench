<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\house\models\Quote;
use common\models\Quote as QuoteTool;

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
        $where = ['city_code' => $this->currentCityCode, 'status' => 1];
        foreach ($tagInfos as $field => $value) {
            if (empty($value)) {
                continue;
            }
            $where[$field] = $value;
        }
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
        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $pageStr = $page > 1 ? "_第{$page}页" : '';

		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
        $tdkIndex = empty($tagStr) ? 'quote-list' : 'quote-list-sort';
		$this->getTdkInfos($tdkIndex, $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
		$code = \Yii::$app->getRequest()->get('id'); 
        $model = new Quote();
		$info = $model->getInfo(['code' => $code]);
		if (empty($info) || $info['code'] != $code) {
			throw new NotFoundHttpException('页面不存在');
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
        $quoteTool = new QuoteTool();
        $priceDatas = $quoteTool->getResult($info['area_real']);

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
        $this->getTdkInfos('quote-show', $dataTdk);
		$datas = [
			'info' => $info,
            'priceDatas' => $priceDatas,
		];
        //print_r($priceDatas);exit();
		return $this->render('show', $datas);
	}
}
