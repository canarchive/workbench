<?php

namespace merchant\decoration\models;

use common\models\BaseModelNotable;
use merchant\models\MerchantSigninTrait;
use merchant\models\User;

class Signin extends BaseModelNotable
{
    use MerchantSigninTrait;
}
