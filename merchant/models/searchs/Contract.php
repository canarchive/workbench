<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\Contract as ContractModel;

class Contract extends ContractModel
{
    public $created_day_start;
    public $created_day_end;

    public function rules()
    {
        return [
            [['merchant_id', 'created_day_start', 'created_day_end'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sStartParam(['name' => '签署日期', 'format' => 'YYYYMMDD', 'field' => 'created_day', 'noFieldSuffix' => true]),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
