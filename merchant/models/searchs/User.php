<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\User as UserModel;

class User extends UserModel
{
    public function _searchElems()
    {
        return [
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'role', 'type' => 'common'],
            ['field' => 'merchant_id', 'type' => 'wrapComma'],
            ['field' => 'name', 'type' => 'common', 'sort' => 'like'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            !empty($privInfo) ? [] : $this->_sPointParam(['field' => 'role', 'table' => 'merchant-role', 'indexName' => 'code']),
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
