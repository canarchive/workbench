<?php

namespace subsite\decoration\models\searchs;

use yii\data\ActiveDataProvider;
use subsite\decoration\models\ServiceWage as ServiceWageModel;

class ServiceWage extends ServiceWageModel
{
    public function rules()
    {
        return [
            [['service_id', 'created_month'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        $this->created_month = empty($this->created_month) ? null : $this->created_month;
        return [
            ['field' => 'service_id', 'type' => 'common'],
            ['field' => 'created_month', 'type' => 'common'],
        ];
    }    

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['table' => 'service', 'field' => 'service_id', 'where' => ['status_ext' => 1]]),
        ];
        $form = [
        [
            $this->_sStartParam(['name' => '月份', 'format' => 'YYYYMM', 'noEnd' => true, 'field' => 'created_month', 'noFieldSuffix' => true]),
        ],
        ];
        return ['list' => $list, 'form' => $form];
    }
}
