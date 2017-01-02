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

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('single-page-' . $view);

        if (in_array($view, ['login', 'register'])) {
            $this->layout = false;
            $view = 'login';
        }
		return $this->render($view, $datas);
	}
}
