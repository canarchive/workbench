<?php

namespace gallerycms\eale\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\EaleController;
use gallerycms\eale\models\Sample AS SampleModel;

class SampleController extends EaleController
{
	public function actionIndex()
	{
        $page = Yii::$app->request->get('page');
        $sort = Yii::$app->request->get('sort');
        $this->currentPage = 'sample-' . $sort;

        $where = $sort == 'work' ? ['recommend' => 'iealecn'] : ['sort' => $sort];
		$model = new SampleModel();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 18]);
		$datas = [
            'sort' => $sort,
            'sortName' => $model->sortInfos[$sort],
            'tag' => '',
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
		$pageStr = $page > 1 ? "第{$page}页_" : '';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-' . $sort, $dataTdk);
		return $this->render('/sample/index', $datas);
	}

	public function actionTag()
	{
        $page = Yii::$app->request->get('page');
        $tag = Yii::$app->request->get('tag');
        if (empty($tag)) {
            exit();
        }
        $isValid = false;
        $sort = '';
        $tagInfos = $this->getSampleTags();
        foreach ($tagInfos as $cSort => $subInfos) {
            if ($isValid) {
                break;
            }
            foreach ($subInfos as $tagKey => $tagValue) {
                if ($tagKey == $tag) {
                    $isValid = true;
                    $sort = $cSort;
                    $tagName = $tagValue;
                    break;
                }
            }
        }
        if (!$isValid) {
            exit('no tag');
        }

        $where = ['like', 'tag', $tag];
		$model = new SampleModel();
		$infos = $model->getInfosByPage(['where' => $where, 'pageSize' => 18]);
		$datas = [
            'sort' => $sort,
            'sortName' => $model->sortInfos[$sort],
            'tag' => $tag,
            'tagName' => $tagName,
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
        $this->currentPage = 'sample-' . $sort;
		$pageStr = $page > 1 ? "第{$page}页_" : '';

		$dataTdk = ['{{TAG}}' => $tagName, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('tag-list', $dataTdk);
		return $this->render('/sample/index', $datas);
	}

	public function actionSearch()
	{
        $page = Yii::$app->request->get('page');
        $keyword = Yii::$app->request->get('keyword');
		if (empty($keyword)) {
			$this->redirect('/');
			return ;
		}

        $where = ['like', 'search', $keyword];
		$model = new SampleModel();
		$infos = $model->getInfosByPage(['where' => $where, 'pageSize' => 18]);
		$pageStr = $page > 1 ? "第{$page}页_" : '';
		$datas = [
            'keyword' => $keyword,
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];

		$dataTdk = ['{{KEYWORD}}' => $keyword, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('search-list', $dataTdk);
		return $this->render('/sample/search', $datas);
    }

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new SampleModel();
		$info = $model->getInfo($id);
		if (empty($info)) {
			$info = $model->getInfoBySource($id);
			if (!empty($info)) {
				$url = $this->host . '/sample/' . $info['id'] . '.html';
                return Yii::$app->response->redirect($url)->send();
			}
            throw new NotFoundHttpException('NO found');
		}
        $this->currentPage = 'sample-show';

        $sortName = isset($model->sortInfos[$info->sort]) ? $model->sortInfos[$info->sort] : '';
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{SORTNAME}}' => $sortName];
		$this->getTdkInfos('sample-show', $dataTdk);

        $relatedInfos = $this->getRelatedInfos($info);
		$datas = [
			'info' => $info,
            'relatedInfos' => $relatedInfos,
		];
		return $this->render('/sample/show', $datas);
	}
}
