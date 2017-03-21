<?php

namespace demo\controllers;

use demo\components\Controller as DemoController;

class SiteController extends DemoController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
