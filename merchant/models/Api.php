<?php

namespace merchant\models;

use common\models\BaseModelNotable;
use baseapp\auth\models\ApiTrait;

class Api extends BaseModelNotable
{
    use ApiTrait;

    public function getBehaviorCodes()
    {
        return ['merchant'];
    }
}
