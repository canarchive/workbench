<?php

namespace baseapp\common\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

trait TagTrait
{
    public $viewPrefix = '@baseapp/common/views/tag/';
    use ControllerTraitFull;
}
