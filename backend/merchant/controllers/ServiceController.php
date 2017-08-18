<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitFull;

class ServiceController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'baseapp\merchant\models\Service';
    protected $modelSearchClass = 'merchant\models\searchs\Service';
}
