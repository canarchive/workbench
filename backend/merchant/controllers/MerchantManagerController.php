<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class MerchantManagerController extends AdminController
{
    protected $modelClass = 'common\models\Company';
    protected $modelSearchClass = 'common\models\searchs\Company';
    public $showSubnav = false;
    use ControllerViewTrait;
}
