<?php

namespace backend\gallerycms\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class CallbackController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'gallerycms\shoot\models\Callback';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Callback';
}
