<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Guestbook;

class GuestbookController extends Guestbook
{
    protected $modelClass = 'subsite\decoration\models\Guestbook';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Guestbook';

}
