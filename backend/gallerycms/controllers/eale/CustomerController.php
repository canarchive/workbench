<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class CustomerController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\eale\models\Customer';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Customer';

}
