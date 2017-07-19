<?php

namespace merchant\admin\controllers\decoration;

use backend\subsite\controllers\decoration\MerchantFeeController as MerchantFeeControllerBase;

class MerchantFeeController extends MerchantFeeControllerBase
{
    public $limitSearch = true;
    use BaseTrait;
}
