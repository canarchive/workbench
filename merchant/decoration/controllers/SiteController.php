<?php

namespace merchant\decoration\controllers;

use merchant\components\Controller as MerchantController;

class SiteController extends MerchantController
{
    public function actionIndex()
    {
		$datas = [];
        return $this->render('index', ['datas' => $datas]);
    }

	public function actionSignin()
	{
		echo 'sss';exit();
	}
}
