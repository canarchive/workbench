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
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = '@gallerycms/views/main-pc';
        }
		$where = ['city_code' => $this->currentCityCode, 'status' => 1];
		$datas = [
			'merchantInfos' => $this->getMerchantInfos($where, 18),
			'realcaseInfos' => $this->getRealcaseInfos($where, 12),
			'workingInfos' => $this->getWorkingInfos($where, 12),
			'sampleInfos' => $this->getSampleInfos([], 12),
            'quoteInfos' => $this->getQuoteInfos($where, 100),
            'askInfos' => $this->getAskInfos($where, 100),
		];
		$this->getTdkInfos('site-index');
        //var_dump($datas['merchantInfos']);exit();

		return $this->render('index', $datas);
	}

	public function actionSelectCity()
	{
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = 'main-about';
        }
        $this->metaLocation = '';
		$this->getTdkInfos('select-city');
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
		$infos = $model->getInfos($where);
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
