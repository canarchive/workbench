<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class Callback extends AdminController
{
    public $viewPrefix = '@backend/subsite/views/callback/';
    use ControllerTraitView;
}
