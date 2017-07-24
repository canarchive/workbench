<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitView;

class NewCallbackController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'merchant\models\NewCallback';
    protected $modelSearchClass = 'merchant\models\searchs\NewCallback';

}
