<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class Guestbook extends AdminController
{
    public $viewPrefix = '/guestbook/';
    use ControllerTraitView;
}
