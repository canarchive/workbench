<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;

class AboutusController extends HouseController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');

		$datas = [
			//'ownerInfos' => $this->_getOwnerInfos(),
			'view' => $view,
			'communityInfo' => [],
		];
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}
}
