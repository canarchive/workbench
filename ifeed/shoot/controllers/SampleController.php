<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use ifeed\components\ShootController;
use ifeed\shoot\models\Sample;

class SampleController extends ShootController
{
    public function init()
    {
        parent::init();
        //$this->metaLocation = '';
    }

	public function actionIndex()
	{
        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $sort = strval(substr(Yii::$app->request->get('sort'), 1));
        $this->currentPage = 'sample-' . $sort;
		$this->currentElem = 'case';//$sort;
		$this->currentSubElem = $sort;

        $sortName = empty($sort) ? $this->currentSiteInfo['name'] : $this->sortInfos[$sort]['name'];
        $sortBrief = empty($sort) ? 'brief' : $this->sortInfos[$sort]['brief'];
        $where = empty($sort) ? ['status' => 1, 'site_code' => $this->siteCode] : ['status' => 1, 'site_code' => $this->siteCode, 'sort' => $sort];
		$model = new Sample();
        $orderBy = ['orderlist' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 12, 'pagePreStr' => '_']);
		$datas = [
            'sort' => $sort,
            'sortName' => $sortName,
            'sortBrief' => $sortBrief,
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
		$pageStr = $page > 1 ? "第{$page}页_" : '';

		$this->pcMappingUrl = preg_replace('#_\d*/#', '/', $this->pcMappingUrl);
		$this->mobileMappingUrl = preg_replace('#_\d*/#', '/', $this->mobileMappingUrl);

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$tdkInfo = [];
		if (!empty($sort)) {
        $tdkInfo['title'] = $this->sortInfos[$sort]['meta_title'];
        $tdkInfo['keyword'] = $this->sortInfos[$sort]['meta_keyword'];
        $tdkInfo['description'] = $this->sortInfos[$sort]['meta_description'];
		}
		$this->getTdkInfos('sample-index', $dataTdk, $tdkInfo);
		return $this->render('/sample/index', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new Sample();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$this->currentElem = $info['sort'];
		$sortName = isset($this->sortInfos[$info['sort']]) ? $this->sortInfos[$info['sort']]['name'] : '';

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{SORTNAME}}' => $sortName];
		$this->getTdkInfos('sample-show', $dataTdk);
        $relatedInfos = $this->getRelatedInfos($info);
		$datas = [
			'info' => $info,
            'relatedInfos' => $relatedInfos,
		];
		return $this->render('show', $datas);
	}
}
