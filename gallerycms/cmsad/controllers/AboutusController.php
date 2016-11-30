<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\CmsadController;

class AboutusController extends CmsadController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang', 'kaopu', 'baojia'];

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}

    public function actionStatement()
    {
		$view = Yii::$app->request->get('view');

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render('statement', $datas);
    }
}
