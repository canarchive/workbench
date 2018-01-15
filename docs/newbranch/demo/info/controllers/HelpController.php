<?php

namespace demo\info\controllers;

use demo\components\Controller as DemoController;

class HelpController extends DemoController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
