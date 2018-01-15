<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerListTrait;

class Callback extends AdminController
{
    public $viewPrefix = '/callback/';
    use ControllerListTrait;
}
