<?php

namespace backend\statistic\controllers\decoration;

use backend\statistic\controllers\Service;

class ServiceController extends Service
{
    protected $modelClass = 'spread\decoration\models\StatisticReportService';
    protected $modelSearchClass = 'spread\decoration\models\searchs\StatisticReportService';
    protected $showInfo = false;

}
