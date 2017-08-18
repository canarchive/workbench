<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitFull;

class InterviewController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Interview';
    protected $modelSearchClass = 'merchant\models\searchs\Interview';

}
