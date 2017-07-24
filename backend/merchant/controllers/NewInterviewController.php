<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class NewInterviewController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\NewInterview';
    protected $modelSearchClass = 'merchant\models\searchs\NewInterview';

}
