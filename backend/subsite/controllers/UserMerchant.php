<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class UserMerchant extends AdminController
{
    use ControllerTraitView;
    public $viewPrefix = '@backend/subsite/views/user-merchant/';
}
