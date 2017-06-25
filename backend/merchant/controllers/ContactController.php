<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class ContactController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Contact';
    protected $modelSearchClass = 'merchant\models\searchs\Contact';
}
