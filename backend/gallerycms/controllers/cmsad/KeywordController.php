<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\gallerycms\controllers\Keyword;

class KeywordController extends Keyword
{
    protected $modelClass = 'gallerycms\cmsad\models\Keyword';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Keyword';

}
