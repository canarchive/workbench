<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use baseapp\spread\controllers\UserMerchantTrait;

class UserMerchantController extends AdminController
{
    use UserMerchantTrait;
    protected $modelClass = 'subsite\decoration\models\UserMerchant';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\UserMerchant';
    public $viewPrefix = '@backend/subsite/views/user-merchant/';

}
