<?php

namespace backend\gallerycms\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SampleController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\shoot\models\Sample';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Sample';

}
