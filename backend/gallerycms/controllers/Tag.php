<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;
use backend\components\ControllerAddMulTrait;

class Tag extends AdminController
{
    public $viewPrefix = '/tag/';
    use ControllerTraitFull;
    use ControllerAddMulTrait;
}
