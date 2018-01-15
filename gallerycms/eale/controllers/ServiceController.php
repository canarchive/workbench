<?php

namespace gallerycms\eale\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\EaleController;
use gallerycms\eale\models\Service AS ServiceModel;
use gallerycms\eale\models\Sample;

class ServiceController extends EaleController
{
	public function actionIndex()
	{
        if ($this->siteCode == 'iealecn') {
        }
        $this->currentPage = 'service-list';
        $infos = ['eale-commercial' => [], 'eale-fashion' => [], 'eale-star' => []];
        if ($this->siteCode == 'ieale') {
            $infos = ['ieale-star' => [], 'ieale-people' => [], 'ieale-wedding' => []];
        }
        $where = ['sort' => array_keys($infos)];
		$model = new ServiceModel();
		$infosOrigin = $model->getInfos($where, 100);
        
        foreach ($infosOrigin as $key => $info) {
            $infos[$info['sort']][] = $info;
        }
		$datas = [
			'model' => $model,
			'infos' => $infos,
		];

        $this->currentPage = 'service-list';
		$this->getTdkInfos('service-list');
		return $this->render('/service/index', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new ServiceModel();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}

        //$sortName = $info->sortInfos[$info->sort];
		//$dataTdk = ['{{INFONAME}}' => $info['name'], '{{SORTNAME}}' => $sortName];
		$dataTdk = ['{{INFONAME}}' => $info['name']];
		$this->getTdkInfos('service-show', $dataTdk);

        $relatedInfos = $this->getRelatedInfos($info);
        $relatedInfos['rInfos'] = $this->getRelatedSamples($info);
		$datas = [
			'info' => $info,
            'relatedInfos' => $relatedInfos,
		];
        $this->currentPage = 'service-show';
		return $this->render('/service/show', $datas);
	}

    public function getRelatedSamples($info)
    {
        $model = new Sample();
        $sort = substr($info['sort'], strpos($info['sort'], '-') + 1);
        $rInfos = $model->getInfos(['sort' => $sort], 7);
        return $rInfos;
    }
}
