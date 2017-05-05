<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class Visit extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerViewTrait;
}
