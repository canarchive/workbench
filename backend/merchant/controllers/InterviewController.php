<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class InterviewController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Interview';
    protected $modelSearchClass = 'merchant\models\searchs\Interview';

}
