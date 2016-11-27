<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\components\ControllerAddMulTrait;

class Position extends AdminController
{
    public $viewPrefix = '/position/';
    use ControllerFullTrait;
    use ControllerAddMulTrait;
}
