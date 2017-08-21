<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitFull;

class MerchantFeeController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'subsite\decoration\models\MerchantFee';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\MerchantFee';

    public function getListinfoView()
    {
        return '@backend/subsite/views/decoration/merchant-fee/listinfo';
    }
}
