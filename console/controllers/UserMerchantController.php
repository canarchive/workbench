<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use subsite\decoration\models\UserMerchant;

class UserMerchantController extends Controller
{
	public function actionPush()
	{
		$model = new UserMerchant();
		$model->actionPush();
	}
}
