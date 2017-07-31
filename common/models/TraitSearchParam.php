<?php

namespace common\models;

use common\helpers\Tree;

trait TraitSearchParam
{
    public function _sMerchantParam($where)
    {
        return [
            'name' => '商家',
            'field' => 'merchant_id',
            'value' => $this->merchant_id,
            'infos' => $this->getPointInfos('merchant', ['where' => $where]),
        ];
    }

    public function _sServiceParam($where)
    {
        return [
            'name' => '客服',
            'field' => 'service_id',
            'value' => $this->service_id,
            'infos' => $this->getPointInfos('service', ['where' => $where]),
        ];
    }

    public function _sStartParam()
    {
        return [
            'name' => '报名时间',
            'field' => 'created_at_start',
            'type' => 'daytime',
            'format' => 'YYYYMMDD',
            'end' => [
                'name' => '创建时间',
                'field' => 'created_at_end',
                'type' => 'daytime',
                'format' => 'YYYYMMDD',
            ],
        ];
    }

    public function _sFieldHitParam()
    {
        return [
            'name' => '检索类别',
            'field' => 'field_hit',
            'type' => 'hidden',
            'value' => $this->field_hit,
        ];
    }
}
