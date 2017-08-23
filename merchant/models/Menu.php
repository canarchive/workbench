<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use common\models\TraitMenu;

class Menu extends MerchantModel
{
    use TraitMenu;

    public static function tableName()
    {
        return '{{%menu}}';
    }

    public function getModuleInfos()
    {
		return $this->_getModuleDatas('merchant');
    }
}
