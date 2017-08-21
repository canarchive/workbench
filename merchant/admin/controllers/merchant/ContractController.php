<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\ContractController as ContractControllerBase;

class ContractController extends ContractControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
