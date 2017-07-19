<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class MerchantFeeController extends AdminController
{
    use ControllerTraitFull;
    public $viewPrefix = '@backend/subsite/views/decoration/merchant-fee/';
    protected $modelClass = 'subsite\decoration\models\MerchantFee';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\MerchantFee';
}
