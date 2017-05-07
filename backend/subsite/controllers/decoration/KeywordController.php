<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Keyword;

class KeywordController extends Keyword
{
    protected $modelClass = 'subsite\decoration\models\Keyword';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Keyword';

}
