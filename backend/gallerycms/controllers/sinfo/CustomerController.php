<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class CustomerController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\eale\models\Customer';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Customer';

}
