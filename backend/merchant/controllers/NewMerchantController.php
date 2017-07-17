<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class NewMerchantController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'baseapp\merchant\models\NewMerchant';
    protected $modelSearchClass = 'merchant\models\searchs\NewMerchant';
}
