<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerListTrait;

class Guestbook extends AdminController
{
    public $viewPrefix = '/guestbook/';
    use ControllerListTrait;
}
