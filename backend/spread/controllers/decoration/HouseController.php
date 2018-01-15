<?php

namespace backend\spread\controllers\decoration;

use backend\components\AdminController;
use backend\components\ControllerListTrait;

class HouseController extends AdminController
{
    protected $modelClass = 'spread\decoration\models\House';
    protected $modelSearchClass = 'spread\decoration\models\searchs\House';
    use ControllerListTrait;
}
