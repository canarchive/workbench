<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class GuestbookController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\eale\models\Guestbook';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Guestbook';

}
