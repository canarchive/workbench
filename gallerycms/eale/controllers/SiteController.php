<?php

namespace gallerycms\eale\controllers;

use Yii;
use gallerycms\components\EaleController;

class SiteController extends EaleController
{
	public function actionIndex()
	{
        $sorts = [
            'eale' => ['commercial', 'fashion', 'star'],
            'ieale' => ['star', 'people', 'wedding', 'campus'],
            'iealecn' => ['studentwork'],
        ];
        //$whereSample = $this->siteCode == 'iealecn' ? ['recommend' => 'iealecn'] : ['sort' => $sorts[$this->siteCode]];
        $whereSample = ['sort' => $sorts[$this->siteCode]];
		$datas = [
			'infoInfos' => $this->getInfos('info', ['sort' => $this->siteCode]),
			'starInfos' => $this->getInfos('star', []),
			'customerInfos' => $this->getInfos('customer', []),
			'sampleInfos' => $this->getInfos('sample', $whereSample),
		];
		$this->getTdkInfos('site-index');
		return $this->render('/site/index', $datas);
	}

    public function getInfos($type, $where)
    {

        $classBase = ucfirst($type);
        $class = "\gallerycms\\eale\models\\{$classBase}";
        $model = new $class();
        $number = $type == 'info' ? 4 : ($type == 'sample' ? 6 : 30);

        $infos = $model->getInfos($where, $number);

        return $infos;
    }

	public function actionMap()
	{
        $datas = [];
        $this->currentPage = 'site-map';
		$this->getTdkInfos('site-map');
		return $this->render('map', $datas);
	}
}
