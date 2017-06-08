<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class UserMerchant extends AdminController
{
    public $viewPrefix = '/user-merchant/';
    use ControllerTraitView;
}
