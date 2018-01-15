<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Keyword;

class KeywordController extends Keyword
{
    protected $modelClass = 'spread\decoration\models\Keyword';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Keyword';

}
