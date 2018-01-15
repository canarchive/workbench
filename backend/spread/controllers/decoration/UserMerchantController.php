<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\UserMerchant;

class UserMerchantController extends UserMerchant
{
    protected $modelClass = 'spread\decoration\models\UserMerchant';
    protected $modelSearchClass = 'spread\decoration\models\searchs\UserMerchant';

}
