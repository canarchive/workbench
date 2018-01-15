<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;
use backend\components\ControllerAddMulTrait;

class Keyword extends AdminController
{
    public $viewPrefix = '/keyword/';
    use ControllerTraitFull;
    use ControllerAddMulTrait;
}
