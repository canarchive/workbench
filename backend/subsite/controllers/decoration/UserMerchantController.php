<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\UserMerchant;

class UserMerchantController extends UserMerchant
{
    protected $modelClass = 'subsite\decoration\models\UserMerchant';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\UserMerchant';

}
