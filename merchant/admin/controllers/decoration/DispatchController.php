<?php

namespace merchant\admin\controllers\decoration;

use backend\subsite\controllers\decoration\DispatchController as DispatchControllerBase;

class DispatchController extends DispatchControllerBase
{
    use BaseTrait;
    public $limitSearch = true;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? [] : ['merchant_id', 'service_id'];
    }
}
