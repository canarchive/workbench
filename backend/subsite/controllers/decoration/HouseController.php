<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use backend\components\ControllerListTrait;

class HouseController extends AdminController
{
    protected $modelClass = 'subsite\decoration\models\House';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\House';
    use ControllerListTrait;
}
