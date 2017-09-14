<?php

namespace ifeed\shoot\controllers;

use ifeed\shoot\models\Sample;
use ifeed\shoot\models\Info;

class SiteController extends Controller
{

	public function actionIndex()
	{
		$datas = [
			//'infoInfos' => $this->getInfoInfos(),
			'sampleInfos' => $this->getSampleInfos(),
		];
        $tdkData = [
            'title' => $this->currentSiteInfo['title'],
            'keyword' => $this->currentSiteInfo['keyword'],
            'description' => $this->currentSiteInfo['description'],
        ];
		$this->getTdkInfos('site-index', [], $tdkData);
		$this->currentElem = 'index';
        $this->formatMappingUrl('site-index');

		return $this->render('index', $datas);
	}

    protected function getSampleInfos()
    {
		$model = new Sample();
        $model->sortInfos = $this->sortInfos;
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
