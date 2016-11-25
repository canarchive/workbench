<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\components\ControllerAddMulTrait;

class InternalChain extends AdminController
{
    public $viewPrefix = '/internal-chain/';
    use ControllerFullTrait;
    use ControllerAddMulTrait;
}
