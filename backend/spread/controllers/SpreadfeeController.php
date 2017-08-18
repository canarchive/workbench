<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class SpreadfeeController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Spreadfee';
    protected $modelSearchClass = 'spread\models\searchs\Spreadfee';
}
