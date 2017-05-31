<?php

namespace merchant\admin\controllers;

use merchant\components\AdminController;

class HomeController extends AdminController
{
    public function actionIndex()
    {
		$datas = [];
        return $this->render('index', $datas);
    }
}
