<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\FundController as FundControllerBase;

class FundController extends FundControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
