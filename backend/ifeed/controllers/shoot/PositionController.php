<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\common\controllers\PositionTrait;

class PositionController extends Controller
{
    use PositionTrait;
    protected $modelClass = 'ifeed\shoot\models\Position';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Position';
}
