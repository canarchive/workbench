<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\house\models\Sample;

class SampleController extends HouseController
{
    public function init()
    {
        parent::init();
        $this->metaLocation = '';
    }

	public function actionIndex()
	{
		$tag = Yii::$app->request->get('tag', '');
		$model = new Sample();
		$houseSortInfos = $model->houseSortInfos;
		$tagInfos = $model->formatTag($tag, $houseSortInfos);
		if ($tagInfos === false) {
            throw new NotFoundHttpException('页面不存在');
		}
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = '@gallerycms/views/layouts/main-plat-pic';
        }

		$page = Yii::$app->request->get('page');
		//$infos = $model->getInfos([]);
        $where = [];
        foreach ($tagInfos as $field => $value) {
            if (empty($value)) {
                continue;
            }
            $where[$field] = $value;
        }
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 15]);
		$datas = [
			'tag' => $tag,
			'page' => $page,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
			'tagInfos' => $tagInfos,
			'houseSortInfos' => $houseSortInfos,
			'model' => $model,
		];
        $datas = array_merge($datas, $this->_commonDatas());
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
        $tdkIndex = empty($tag) ? 'sample-index' : 'sample-tag';
		$this->getTdkInfos($tdkIndex, $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Sample();
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
			$str = $tagValue['values'][$tagKeyInfo];
			$tagStr .= $str;
			$info[$tagKey] = $str;
		}

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
        $this->getTdkInfos('sample-show', $dataTdk);

        //$askModel = new AskQuestion();
        $infos = $model->getInfos([], 18);
		$datas = [
			'info' => $info,
            'infos' => $infos,
            //'askInfos' => $askInfos,
		];
		return $this->render('show', $datas);
	}
}