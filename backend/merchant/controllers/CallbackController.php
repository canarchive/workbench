<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitView;

class CallbackController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'merchant\models\Callback';
    protected $modelSearchClass = 'merchant\models\searchs\Callback';

}
