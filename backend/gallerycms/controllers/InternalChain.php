<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;
use backend\components\ControllerAddMulTrait;

class InternalChain extends AdminController
{
    public $viewPrefix = '/internal-chain/';
    use ControllerTraitFull;
    use ControllerAddMulTrait;
}
