<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerListTrait;

class Guestbook extends AdminController
{
    public $viewPrefix = '/guestbook/';
    use ControllerListTrait;
}
