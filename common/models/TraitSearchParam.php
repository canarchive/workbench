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

    public function _sStartParam($name = '时间')
    {
        return [
            'name' => $name,
            'field' => 'created_at_start',
            'type' => 'daytime',
            'format' => 'YYYYMMDD',
            'end' => [
                'name' => $name,
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

    public function _sStatusParam()
    {
        return [
            'name' => '状态',
            'field' => 'status',
            'value' => $this->status,
			'infos' => $this->statusInfos,
        ];
    }

    public function _sMobileParam()
    {
        return [
            'name' => '手机号',
            'field' => 'mobile',
            'value' => $this->mobile,
            'type' => 'text',
        ];
    }
}
