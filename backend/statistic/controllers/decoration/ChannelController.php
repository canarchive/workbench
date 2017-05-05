<?php

namespace backend\statistic\controllers\decoration;

use backend\statistic\controllers\Channel;

class ChannelController extends Channel
{
    protected $modelClass = 'spread\decoration\models\StatisticReport';
    protected $modelSearchClass = 'spread\decoration\models\searchs\StatisticReport';
    protected $showInfo = false;

}
