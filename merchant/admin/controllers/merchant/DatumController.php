<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\DatumController as DatumControllerBase;

class DatumController extends DatumControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
