<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class KeywordController extends AdminController
{
    protected $modelClass = 'spread\models\Keyword';
    protected $modelSearchClass = 'spread\models\searchs\Keyword';
    use ControllerTraitFull;
}
