<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use baseapp\merchant\models\UserMerchantTrait;

class UserMerchant extends SubsiteModel
{
    use ModelTrait;
    use UserMerchantTrait;
}
