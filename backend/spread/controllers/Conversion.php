<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class Conversion extends AdminController
{
    public $viewPrefix = '/conversion/';
    use ControllerViewTrait;
}
