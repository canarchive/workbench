<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class TemplateController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Template';
    protected $modelSearchClass = 'spread\models\searchs\Template';
}
