<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\SalemanController as SalemanControllerBase;

class SalemanController extends SalemanControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
