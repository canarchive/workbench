<?php

namespace merchant\models;

use common\models\MerchantModel;
use common\models\TraitMenu;

class Menu extends MerchantModel
{
    use TraitMenu;

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
