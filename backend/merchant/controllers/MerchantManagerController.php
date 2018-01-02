<?php

namespace backend\merchant\controllers;

use common\models\Company;
use backend\components\AdminController;

class MerchantManagerController extends AdminController
{
    public $showSubnav = false;

	public function actionListinfo()
	{
		$model = new Company();
		$infos = $model->find()->all();
		$datas = [];
		foreach ($infos as $info) {
			$datas[$info['status']][] = $info;
		}
        return $this->render('listinfo', ['datas' => $datas, 'model' => $model]);
	}
}
