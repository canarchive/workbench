<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class KeywordController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Keyword';
    protected $modelSearchClass = 'spread\models\searchs\Keyword';
}
