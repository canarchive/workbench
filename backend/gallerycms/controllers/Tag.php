<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\components\ControllerAddMulTrait;

class Tag extends AdminController
{
    public $viewPrefix = '/tag/';
    use ControllerFullTrait;
    use ControllerAddMulTrait;
}