<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
