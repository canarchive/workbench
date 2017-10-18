<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ServiceInvalid as ServiceInvalidModel;

class ServiceInvalid extends ServiceInvalidModel
{
    public $_sort;

    public function rules()
    {
        return [
            [['created_day_start', 'created_day_end', 'merchant_id', 'field_hit'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime', 'timestamp' => false],
        ];
    }

    protected function _searchPre(& $query)
    {
        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= $this->getFieldsStr();
        $query->select($fieldsStr);
        $query->groupBy($fields);
    }    

    public function getFieldHitInfos()
    {
        return [
            'fields' => ['merchant_id', 'created_month', 'created_week', 'created_day'],
            'default' => 'created_day',
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant', 'where' => ['status_ext' => [1]]]),
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
