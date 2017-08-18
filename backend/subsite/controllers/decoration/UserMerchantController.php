<?php

namespace backend\subsite\controllers\decoration;

use baseapp\spread\controllers\UserMerchantTrait;

class UserMerchantController extends Controller
{
    use UserMerchantTrait;
    protected $modelClass = 'subsite\decoration\models\UserMerchant';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\UserMerchant';

}
