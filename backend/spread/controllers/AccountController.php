<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class AccountController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Account';
    protected $modelSearchClass = 'spread\models\searchs\Account';
}
