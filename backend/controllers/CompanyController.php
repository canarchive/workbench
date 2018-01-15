<?php

namespace backend\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class CompanyController extends AdminController
{
    protected $modelClass = 'common\models\Company';
    protected $modelSearchClass = 'common\models\searchs\Company';
    use ControllerFullTrait;
}
