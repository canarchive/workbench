<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ServiceController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\eale\models\Service';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Service';

}
