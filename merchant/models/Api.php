<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use baseapp\auth\models\ApiTrait;

class Api extends MerchantModel
{
    use ApiTrait;

    public static function tableName()
    {
        return '{{%user}}';
    }
}
