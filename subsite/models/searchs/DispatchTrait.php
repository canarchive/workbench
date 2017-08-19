<?php

namespace subsite\models\searchs;

use yii\data\ActiveDataProvider;

Trait DispatchTrait
{
    public function rules()
    {
        return [
            [['mobile', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        return [];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'city_code' => ['type' => 'common'],
            'house_id' => ['type' => 'point', 'table' => 'merchant'],
            'service_id' => ['type' => 'point', 'table' => 'service'],
            'mobile' => ['type' => 'common'],
            'num_merchant' => ['type' => 'common'],
            'note' => ['type' => 'common', 'listNo' => true],

            //'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'sendmsg_at' => ['type' => 'timestamp', 'listNo' => true],
        ];
    }
}
