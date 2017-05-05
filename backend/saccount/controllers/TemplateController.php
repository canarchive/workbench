<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class TemplateController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Template';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Template';
    use ControllerFullTrait;
}
