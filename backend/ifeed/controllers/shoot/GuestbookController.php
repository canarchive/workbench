<?php

namespace backend\ifeed\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class GuestbookController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\eale\models\Guestbook';
    protected $modelSearchClass = 'ifeed\eale\models\searchs\Guestbook';

}
