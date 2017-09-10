<?php

namespace ifeed\controllers;

use ifeed\components\Controller as IfeedController;

class SiteController extends IfeedController
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
