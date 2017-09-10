<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SampleController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Sample';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Sample';

}
