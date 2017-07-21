<?php

namespace merchant\admin\controllers;

use backend\merchant\controllers\SalemanRecordController as SalemanRecordControllerBase;

class SalemanRecordController extends SalemanRecordControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
