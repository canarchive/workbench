<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\common\controllers\SortTrait;

class SortController extends Controller
{
    use SortTrait;
	protected $modelClass = 'ifeed\shoot\models\Sort';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Sort';

}
