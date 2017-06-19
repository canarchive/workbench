<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class MerchantController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'baseapp\merchant\models\Merchant';
    protected $modelSearchClass = 'merchant\models\searchs\Merchant';
}
