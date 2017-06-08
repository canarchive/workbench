<?php

namespace subsite\decoration\controllers;

class SiteController extends Controller
{
    public function actionStatistic()
    {
        $data['sort'] = 'decoration';
        $this->_statistic($data);
        exit();
    }
}
