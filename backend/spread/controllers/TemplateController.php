<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class TemplateController extends AdminController
{
    protected $modelClass = 'spread\models\Template';
    protected $modelSearchClass = 'spread\models\searchs\Template';
    use ControllerFullTrait;
}
