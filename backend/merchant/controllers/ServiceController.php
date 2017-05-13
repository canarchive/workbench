<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ServiceController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'merchant\models\Service';
    protected $modelSearchClass = 'merchant\models\searchs\Service';
}
