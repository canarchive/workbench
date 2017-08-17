<?php

namespace merchant\admin\controllers;

use backend\merchant\controllers\ContactController as ContactControllerBase;

class ContactController extends ContactControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
