<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class DomainController extends AdminController
{
    protected $modelClass = 'spread\models\Domain';
    protected $modelSearchClass = 'spread\models\searchs\Domain';
    use ControllerFullTrait;
}
