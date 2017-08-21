<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\InterviewController as InterviewControllerBase;

class InterviewController extends InterviewControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }
}
