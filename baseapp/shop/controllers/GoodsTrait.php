<?php

namespace baseapp\shop\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

trait GoodsTrait
{
    public $viewPrefix = '@baseapp/shop/views/goods/';
    use ControllerTraitFull;
}
