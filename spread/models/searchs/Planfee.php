<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Planfee as PlanfeeModel;

class Planfee extends PlanfeeModel
{
    public $created_day_start;
    public $created_day_end;
    public function rules()
    {
        return [
            [['account_id', 'created_day_start', 'created_day_end', 'channel', 'client_type'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'account_id', 'type' => 'common'],
            //['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime', 'timestamp' => false],
        ];
    }    

    public function _searchDatas()
    {
        $list = [
            //$this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            $this->_sKeyParam(['field' => 'client_type']),
            $this->_sKeyParam(['field' => 'channel']),
            $this->_sPointParam(['field' => 'account_id', 'table' => 'account']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'plan_id']),
            $this->_sStartParam(['field' => 'created_day']),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
