<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitView;

class HouseController extends Controller
{
    use ControllerTraitView;
    protected $modelClass = 'subsite\decoration\models\House';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\House';
}
