<?php

namespace backend\controllers;

use backend\components\ControllerTraitFull;

class CompanyController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'baseapp\passport\models\Company';
    protected $modelSearchClass = 'baseapp\passport\models\searchs\Company';
}
