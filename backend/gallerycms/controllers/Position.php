<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;
use backend\components\ControllerAddMulTrait;

class Position extends AdminController
{
    public $viewPrefix = '/position/';
    use ControllerTraitFull;
    use ControllerAddMulTrait;
}
