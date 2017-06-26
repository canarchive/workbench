<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class UnitController extends AdminController
{
    protected $modelClass = 'spread\models\Unit';
    protected $modelSearchClass = 'spread\models\searchs\Unit';
    use ControllerTraitFull;
}
