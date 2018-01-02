<?php

namespace backend\gallerycms\controllers\house;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SampleController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\house\models\Sample';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Sample';

}
