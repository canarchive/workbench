<?php

namespace gallerycms\sinfo\controllers;

use Yii;
use gallerycms\components\SinfoController;
use gallerycms\sinfo\models\Sample;
use gallerycms\sinfo\models\Article;

class SiteController extends SinfoController
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
}
