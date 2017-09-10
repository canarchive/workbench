<?php

namespace gallerycms\shoot\controllers;

use Yii;
use gallerycms\components\ShootController;
use gallerycms\shoot\models\Sample;
use gallerycms\shoot\models\Info;

class SiteController extends ShootController
{

	public function actionIndex()
	{
		$datas = [
			//'infoInfos' => $this->getInfoInfos(),
			'sampleInfos' => $this->getSampleInfos(),
		];
        $tdkData = [
            'title' => $this->currentSiteInfo['meta_title'],
            'keyword' => $this->currentSiteInfo['meta_keyword'],
            'description' => $this->currentSiteInfo['meta_description'],
        ];
		$this->getTdkInfos('site-index', [], $tdkData);
		$this->currentElem = 'index';

		return $this->render('index', $datas);
	}

    protected function getSampleInfos()
    {
		$model = new Sample();
        $model->sortInfos = $this->currentSortInfos;
        $model->siteCode = $this->siteCode;
		$infos = $model->getIndexInfos([], 20);
		return $infos;
    }

    protected function getInfoInfos()
    {
		$where = ['site_code' => $this->siteCode, 'status' => 1];
		$model = new Info();
		$infos = $model->getInfosForIndex($where);
		return $infos;
    }
}
