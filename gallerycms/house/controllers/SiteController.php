<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\Merchant;
use gallerycms\merchant\models\Realcase;
use gallerycms\merchant\models\Working;
use gallerycms\house\models\Sample;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\Quote;

class SiteController extends HouseController
{
	public function actionIndex()
	{
		$where = ['city_code' => Yii::$app->params['currentCompany']['code'], 'status' => 1];
		$datas = [
			'merchantInfos' => $this->getMerchantInfos($where),
			'realcaseInfos' => $this->getRealcaseInfos($where),
			'workingInfos' => $this->getWorkingInfos($where),
			'sampleInfos' => $this->getSampleInfos(),
            'quoteInfos' => $this->getQuoteInfos($where),
            'askInfos' => $this->getAskInfos($where),
		];
		$this->getTdkInfos('site-index');

		return $this->render('index', $datas);
	}

	public function actionSelectCity()
	{
		$this->getTdkInfos('site-select-city');
		return $this->render('select-city');
	}

	protected function getSampleInfos()
	{
		$model = new Sample();
		$infos = $model->getInfos([]);
		return $infos;
	}

	protected function getMerchantInfos($where)
	{
		$model = new Merchant();
		$infos = $model->getIndexInfos($where);
		return $infos;
	}

	protected function getWorkingInfos($where)
	{
		$model = new Working();
		$infos = $model->getInfos($where);
		return $infos;
	}

	protected function getRealcaseInfos($where)
	{
		$model = new Realcase();
		$infos = $model->getInfos($where);
		return $infos;
	}

    protected function getQuoteInfos($where)
    {
        $model = new Quote();
        $infos = $model->getIndexInfos($where);
        //print_r($infos);exit();
        return $infos;

    }

    protected function getAskInfos($where)
    {
        $model = new AskQuestion();
        $infos = $model->getIndexInfos($where);
        return $infos;
    }
}
