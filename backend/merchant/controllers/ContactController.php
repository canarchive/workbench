<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ContactController extends AdminController
{
    protected $modelClass = 'merchant\models\Contact';
    protected $modelSearchClass = 'merchant\models\searchs\Contact';
    use ControllerFullTrait;
}
