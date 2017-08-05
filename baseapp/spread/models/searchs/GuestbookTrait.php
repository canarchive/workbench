<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait GuestbookTrait
{
    public function rules()
    {
        return [
            [['mobile', 'merchant_id', 'created_at_start', 'created_at_end'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function getSearchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant', 'where' => ['status_ext' => [1]]]),
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'mobile']),
            $this->_sStartParam(),
        ],
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
