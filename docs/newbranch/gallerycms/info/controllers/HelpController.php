<?php

namespace gallerycms\info\controllers;

use gallerycms\components\Controller as GallerycmsController;

class HelpController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
