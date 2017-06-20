<?php

namespace backend\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class CompanyController extends AdminController
{
    protected $modelClass = 'baseapp\passport\models\Company';
    protected $modelSearchClass = 'baseapp\passport\models\searchs\Company';
    use ControllerFullTrait;
}
