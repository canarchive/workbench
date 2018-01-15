<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;
use backend\components\ControllerAddMulTrait;

class Friendlink extends AdminController
{
    public $viewPrefix = '/friendlink/';
    use ControllerTraitFull;
    use ControllerAddMulTrait;
}
