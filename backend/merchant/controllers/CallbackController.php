<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitView;

class CallbackController extends Controller
{
    use ControllerTraitView;
    protected $modelClass = 'merchant\models\Callback';
    protected $modelSearchClass = 'merchant\models\searchs\Callback';

}
