<?php

namespace merchant\admin\controllers;

use backend\merchant\controllers\NewContactController as NewContactControllerBase;

class NewContactController extends NewContactControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
