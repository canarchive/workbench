<?php

namespace gallerycms\sinfo\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\SinfoController;

class SinglePageController extends SinfoController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang', 'kaopu', 'baojia'];

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('single-page-' . $view);
		return $this->render($view, $datas);
	}
}
