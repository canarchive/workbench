<?php

namespace gallerycms\shoot\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\ShootController;
use gallerycms\shoot\models\Guestbook;
use gallerycms\shoot\models\Sample;

class ApplyController extends ShootController
{
	public function actionIndex()
	{
        $datas = [];
		$this->getTdkInfos('apply');
		return $this->render('apply', $datas);
    }
}
