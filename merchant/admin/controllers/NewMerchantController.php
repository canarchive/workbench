<?php

namespace merchant\admin\controllers;

use backend\merchant\controllers\NewMerchantController as NewMerchantControllerBase;

class NewMerchantController extends NewMerchantControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
