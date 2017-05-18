<?php

namespace merchant\models;

use common\models\MerchantModel;
use common\models\MenuTrait;

class Menu extends MerchantModel
{
    use MenuTrait;

    public static function tableName()
    {
        return '{{%menu}}';
    }

    /**
     * Get the module
     *
     * @return array
     */
    public function getModuleInfos()
    {
        $datas = [
            'admin' => '',
        ];
        return $datas;
    }
}
