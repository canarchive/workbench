<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitView;

class GuestbookController extends Controller
{
    use ControllerTraitView;
    protected $modelClass = 'subsite\decoration\models\Guestbook';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Guestbook';

    public function getListinfoView()
    {
        return '@backend/subsite/views/guestbook/listinfo';
    }
}
