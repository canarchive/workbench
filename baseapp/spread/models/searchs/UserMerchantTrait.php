<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait UserMerchantTrait
{
    public function rules()
    {
        return [
            [['created_at_start', 'created_at_end', 'status', 'mobile', 'merchant_id', 'service_id'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        return [
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'service_id', 'type' => 'common'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant', 'where' => ['status_ext' => [1]]]),
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'mobile']),
            $this->_sStartParam(),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'mobile' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'service_id' => ['type' => 'point', 'table' => 'service'],
            'created_at' => ['type' => 'timestamp'],
            'view_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
