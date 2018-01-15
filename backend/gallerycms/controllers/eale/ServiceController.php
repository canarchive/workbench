<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class ServiceController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\eale\models\Service';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Service';

}
