<?php

namespace backend\statistic\controllers\decoration;

use backend\statistic\controllers\Dispatch;

class DispatchController extends Dispatch
{
    protected $modelClass = 'spread\decoration\models\StatisticDispatch';
    protected $modelSearchClass = 'spread\decoration\models\searchs\StatisticDispatch';
    protected $showInfo = false;

}
