<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class Callback extends AdminController
{
    public $viewPrefix = '/callback/';
    use ControllerTraitView;
}
