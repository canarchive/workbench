<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class UserMerchant extends AdminController
{
    public $viewPrefix = '/user-merchant/';
    use ControllerViewTrait;
}
