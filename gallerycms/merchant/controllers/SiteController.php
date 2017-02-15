<?php

namespace gallerycms\merchant\controllers;

use gallerycms\components\MerchantController;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\Quote;
use gallerycms\merchant\models\Merchant;

class SiteController extends MerchantController
{

	public function actionIndex()
	{
        $this->mDatas = $datas = $this->_initMerchant();
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('merchant-index', $dataTdk);
        $qModel = new Quote();
        $aModel = new AskQuestion();
        $mModel = new Merchant();
        $datas['quoteInfos'] = $qModel->getInfos([], 10);
        $datas['askInfos'] = $aModel->getInfos([], 10);
        $datas['merchantInfos'] = $mModel->getInfos([], 10);
        $datas['merchantRelateInfos'] = $mModel->getInfos([], 10);

		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $this->mDatas = $datas = $this->_initMerchant('merchant-show');
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('merchant-show', $dataTdk);

		return $this->render('show', $datas);
	}
}
