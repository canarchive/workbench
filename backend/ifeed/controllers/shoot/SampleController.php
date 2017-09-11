<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\ControllerTraitFull;

class SampleController extends Controller
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Sample';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Sample';

}
