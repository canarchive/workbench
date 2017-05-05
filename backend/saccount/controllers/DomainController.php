<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class DomainController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Domain';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Domain';
    use ControllerFullTrait;
}
