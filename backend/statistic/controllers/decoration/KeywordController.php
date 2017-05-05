<?php

namespace backend\statistic\controllers\decoration;

use backend\statistic\controllers\Keyword;

class KeywordController extends Keyword
{
    protected $modelClass = 'spread\decoration\models\StatisticKeyword';
    protected $modelSearchClass = 'spread\decoration\models\searchs\StatisticKeyword';
    protected $showInfo = false;

}
