<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class UnitController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Unit';
    protected $modelSearchClass = 'spread\models\searchs\Unit';
}
