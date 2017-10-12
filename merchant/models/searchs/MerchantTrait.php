<?php

namespace merchant\models\searchs;

trait MerchantTrait
{
    public $updated_at_start;
    public $updated_at_end;
    public $merchant_id;

    public function rules()
    {
        return [
            [['current_action', 'display_level', 'name', 'saleman_id', 'merchant_id', 'status', 'created_at_start', 'created_at_end', 'updated_at_start', 'updated_at_end'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        if ($this->managerRole == 'service-saleman') {
            $this->saleman_id = $this->salemanId;
        }
        if (!in_array($this->current_action, ['follow', 'myself'])) {
            $extData = [
                ['field' => 'saleman_id', 'type' => 'common', 'sort' => 'notIn'],
            ];
        } else {
            $extData = [
                ['field' => 'saleman_id', 'type' => 'common'],
            ];
        }
        switch ($this->current_action) {
        case 'follow':
            $this->display_level = '';
            break;
        case 'myself':
            $this->display_level = 'private';
            break;
        }
        $return = array_merge([
            ['field' => 'name', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'display_level', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ], $extData);
        if (!empty($this->merchant_id)) {
            $this->id = $this->merchant_id;
            $return[] = ['field' => 'id', 'type' => 'common'];
        }
        return $return;
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'saleman_id', 'table' => 'saleman']),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'name']),
            $this->_sStartParam(),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
