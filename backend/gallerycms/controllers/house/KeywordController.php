<?php

namespace backend\gallerycms\controllers\house;

use backend\gallerycms\controllers\Keyword;

class KeywordController extends Keyword
{
    protected $modelClass = 'gallerycms\house\models\Keyword';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Keyword';

}
