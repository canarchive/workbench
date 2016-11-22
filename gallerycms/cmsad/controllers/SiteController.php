<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use gallerycms\components\CmsadController;
use merchant\cmsad\models\Merchant;
use merchant\cmsad\models\Realcase;
use merchant\cmsad\models\Working;
use gallerycms\cmsad\models\CmsadSample;
use common\models\RegionCounty;

class SiteController extends CmsadController
{
	public function actionIndex()
	{
		$where = ['city_code' => Yii::$app->params['currentCompany']['code_short'], 'status' => 1];
		$datas = [
			'merchantInfos' => [],//$this->getMerchantInfos($where),
			'realcaseInfos' => [],//$this->getRealcaseInfos($where),
			'workingInfos' => [],//$this->getWorkingInfos($where),
			'sampleInfos' => [],//$this->getSampleInfos(),
		];
		$this->getTdkInfos('site-index');

		return $this->render('index', $datas);
	}

	public function actionMap()
	{
		$datas = $this->getMapInfos();
		$this->getTdkInfos('site-map');
		return $this->render('sitemap', $datas);
	}
}
