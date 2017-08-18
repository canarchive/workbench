<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitView;

class CallbackController extends Controller
{
    use ControllerTraitView;
    //public $viewPrefix = '@backend/subsite/views/callback/';
    protected $modelClass = 'subsite\decoration\models\Callback';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Callback';

}
