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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'parent_code' => ['type' => 'common'],
            'module' => ['type' => 'key'],
            'controller' => ['type' => 'common'],
            'method' => ['type' => 'common'],
            'display' => ['type' => 'key'],
            'extparam' => ['type' => 'common'],
        ];
    }
}
