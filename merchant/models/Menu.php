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

    /**
     * Get the module
     *
     * @return array
     */
    public function getModuleInfos()
    {
        $datas = [
            'admin' => '基本模块',
            'admin/statistic' => '统计',
            'admin/decoration' => '家装',
        ];
        return $datas;
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
