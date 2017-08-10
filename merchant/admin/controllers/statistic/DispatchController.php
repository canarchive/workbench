<?php

namespace merchant\admin\controllers\statistic;

use backend\statistic\controllers\DispatchController as DispatchControllerBase;

class DispatchController extends DispatchControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? ['service_id'] : ['merchant_id'];
    }
}
