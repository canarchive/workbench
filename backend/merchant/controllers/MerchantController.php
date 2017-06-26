<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class MerchantController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'baseapp\merchant\models\Merchant';
    protected $modelSearchClass = 'merchant\models\searchs\Merchant';
}
