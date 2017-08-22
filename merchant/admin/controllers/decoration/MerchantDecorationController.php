<?php

namespace merchant\admin\controllers\decoration;

use backend\subsite\controllers\decoration\MerchantDecorationController as MerchantDecorationControllerBase;

class MerchantDecorationController extends MerchantDecorationControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? [] : ['merchant_id', 'service_id'];
    }
}
