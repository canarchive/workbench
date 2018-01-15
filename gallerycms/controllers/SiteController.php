<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
    public function init()
    {
        parent::init();
    }

    public function actionStat()
    {
        $data['sort'] = 'shoot';
        $this->_statistic($data);
        exit();
    }
}
