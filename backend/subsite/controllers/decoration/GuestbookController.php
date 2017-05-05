<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Guestbook;

class GuestbookController extends Guestbook
{
    protected $modelClass = 'spread\decoration\models\Guestbook';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Guestbook';

}
