<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\components\ControllerAddMulTrait;

class Keyword extends AdminController
{
    public $viewPrefix = '/keyword/';
    use ControllerFullTrait;
    use ControllerAddMulTrait;
}
