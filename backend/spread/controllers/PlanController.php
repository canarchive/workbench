<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class PlanController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Plan';
    protected $modelSearchClass = 'spread\models\searchs\Plan';
}
