<?php

namespace merchant\admin\controllers\statistic;

use backend\statistic\controllers\SalemanController as SalemanControllerBase;

class SalemanController extends SalemanControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? ['service_id'] : ['merchant_id'];
    }
}
