<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\ContactController as ContactControllerBase;

class ContactController extends ContactControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
