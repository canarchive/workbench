<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class UserMerchantController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'ifeed\shoot\models\UserMerchant';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\UserMerchant';

}
