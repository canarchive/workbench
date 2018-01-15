<?php

namespace backend\gallerycms\controllers\shoot;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class UserMerchantController extends AdminController
{
    use ControllerTraitView;
    protected $modelClass = 'gallerycms\shoot\models\UserMerchant';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\UserMerchant';

}
