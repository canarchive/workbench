<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use gallerycms\components\CmsadController;
use gallerycms\cmsad\models\Sample;
use gallerycms\cmsad\models\Article;

class SiteController extends CmsadController
{
	public function actionIndex()
	{
		$where = ['city_code' => Yii::$app->params['currentCompany']['code_short'], 'status' => 1];
		$datas = [
			'articleInfos' => $this->getArticleInfos($where),
			'sampleInfos' => $this->getSampleInfos(),
		];
		$this->getTdkInfos('site-index');

		return $this->render('index', $datas);
	}

    protected function getSampleInfos()
    {
		$model = new Sample();
		$infos = $model->getInfos([], 10);
		return $infos;
    }

    protected function getArticleInfos()
    {
		$model = new Article();
		$infos = $model->getInfosForIndex();
		return $infos;
    }

	public function actionMap()
	{
		$datas = $this->getMapInfos();
		$this->getTdkInfos('site-map');
		return $this->render('sitemap', $datas);
	}
}
