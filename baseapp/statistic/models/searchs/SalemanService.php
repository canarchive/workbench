<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\SalemanService as SalemanServiceModel;

class SalemanService extends SalemanServiceModel
{

    public function rules()
    {
        return [
            [['created_day_start', 'created_day_end', 'saleman_id', 'field_hit'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'saleman_id', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime', 'timestamp' => false],
        ];
    }

    protected function _searchPre(& $query)
    {
        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= $this->getFieldsStr('dispatch');
        $query->select($fieldsStr);
        $query->groupBy($fields);
    }    

    public function getFieldHitInfos()
    {
        return [
            'fields' => ['merchant_id', 'saleman_id', 'created_month', 'created_week', 'created_day'],
            'default' => 'created_day',
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'saleman_id', 'table' => 'saleman']),
        ];
        $form = [
        [
            $this->_sStartParam(['field' => 'created_day']),
            $this->_sHiddenParam(['field' => 'field_hit']),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
