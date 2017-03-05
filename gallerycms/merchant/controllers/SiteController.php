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
        $datas = $this->_initMerchant();
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name_full']];
		$this->getTdkInfos('merchant-showindex', $dataTdk);

		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $datas = $this->_initMerchant('merchant-show');
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name_full']];
		$this->getTdkInfos('merchant-desc', $dataTdk);

		return $this->render('show', $datas);
	}
}
