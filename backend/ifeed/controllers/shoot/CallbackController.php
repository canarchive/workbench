<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class CallbackController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'ifeed\shoot\models\Callback';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Callback';
}
