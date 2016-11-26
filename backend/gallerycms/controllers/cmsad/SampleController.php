<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SampleController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\cmsad\models\Sample';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Sample';

}
