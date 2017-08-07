<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ServiceDispatch as ServiceDispatchModel;

class ServiceDispatch extends ServiceDispatchModel
{

    public function rules()
    {
        return [
            [['created_day_start', 'created_day_end', 'service_id', 'field_hit'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'service_id', 'type' => 'common'],
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
            'fields' => ['service_id', 'created_month', 'created_week', 'created_day'],
            'default' => 'created_day',
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
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
