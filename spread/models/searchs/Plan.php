<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Plan as PlanModel;

class Plan extends PlanModel
{
    public $end_at_start;
    public $end_at_end;

    public function rules()
    {
        return [
            [['account_id', 'channel', 'status', 'end_at_start', 'end_at_end'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'account_id', 'type' => 'common'],
            ['field' => 'end_at', 'type' => 'rangeTime'],
            ['field' => 'status', 'type' => 'common'],
        ];
    }

    public function getSearchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'channel']),
            $this->_sPointParam(['field' => 'account_id', 'table' => 'account']),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sStartParam(['field' => 'end_at']),
        ],
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    protected function _defaultPagination()
    {
        return [
            'pageSize' => 100,
        ];
    }
}
