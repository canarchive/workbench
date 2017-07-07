<?php

namespace merchant\admin\controllers\decoration;

use backend\subsite\controllers\decoration\UserMerchantController as UserMerchantControllerBase;

class UserMerchantController extends UserMerchantControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? [] : ['merchant_id'];
    }
}
