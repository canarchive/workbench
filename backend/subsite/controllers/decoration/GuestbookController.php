<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class GuestbookController extends AdminController
{
    use ControllerTraitView;
    public $viewPrefix = '@backend/subsite/views/guestbook/';
    protected $modelClass = 'subsite\decoration\models\Guestbook';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Guestbook';

    protected function privGetIgnore()
    {
        return ['merchant_id', 'service_id'];
    }
}
