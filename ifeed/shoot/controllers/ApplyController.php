<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\helpers\Url;
use ifeed\components\ShootController;
use ifeed\shoot\models\Guestbook;
use ifeed\shoot\models\Sample;

class ApplyController extends ShootController
{
	public function actionIndex()
	{
        $datas = [];
		$this->getTdkInfos('apply');
		return $this->render('apply', $datas);
    }
}
