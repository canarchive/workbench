<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class AccountController extends AdminController
{
    protected $modelClass = 'spread\models\Account';
    protected $modelSearchClass = 'spread\models\searchs\Account';
    use ControllerFullTrait;
}
