<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class StarController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\eale\models\Star';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Star';

}
