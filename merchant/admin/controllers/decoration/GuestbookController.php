<?php

namespace merchant\admin\controllers\decoration;

use backend\subsite\controllers\decoration\GuestbookController as GuestbookControllerBase;

class GuestbookController extends GuestbookControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
        return $this->strictPriv ? [] : ['merchant_id', 'service_id'];
    }
}
