<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use common\statistic\models\UserMerchantTrait;

class UserMerchant extends SubsiteModel
{
    use ModelTrait;
    use UserMerchantTrait;
}
