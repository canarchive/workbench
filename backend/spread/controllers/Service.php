<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class Service extends AdminController
{
    public $viewPrefix = '/service/';
    use ControllerFullTrait;
}
