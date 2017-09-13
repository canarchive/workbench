<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\ControllerTraitFull;

class SortController extends Controller
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Sort';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Sort';

}
