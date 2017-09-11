<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use ifeed\components\ShootController;
use ifeed\shoot\models\Activity;
use ifeed\shoot\models\Category;

class ActivityController extends ShootController
{
	public function actionIndex()
	{
        $datas = [];
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $datas = [];
		return $this->render('show', $datas);
    }
}
