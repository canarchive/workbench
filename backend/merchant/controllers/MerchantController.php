<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class MerchantController extends AdminController
{
    protected $modelClass = 'baseapp\merchant\models\Merchant';
    protected $modelSearchClass = 'merchant\models\searchs\Merchant';
    use ControllerFullTrait;
}
