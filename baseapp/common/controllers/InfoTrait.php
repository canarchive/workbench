<?php

namespace baseapp\common\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

trait InfoTrait
{
    public $viewPrefix = '@baseapp/common/views/info/';
    use ControllerTraitFull;
}
