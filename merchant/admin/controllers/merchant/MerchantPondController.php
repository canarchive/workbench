<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\MerchantPondController as MerchantPondControllerBase;

class MerchantPondController extends MerchantPondControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
