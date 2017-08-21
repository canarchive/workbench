<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\CallbackController as CallbackControllerBase;

class CallbackController extends CallbackControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
