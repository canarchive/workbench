<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class AccountController extends AdminController
{
    protected $modelClass = 'spread\models\Account';
    protected $modelSearchClass = 'spread\models\searchs\Account';
    use ControllerTraitFull;
}
