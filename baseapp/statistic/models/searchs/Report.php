<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\Report as ReportModel;

class Report extends ReportModel
{

    public function rules()
    {
        return [
            [['merchant_id', 'field_hit', 'created_day', 'channel', 'client_type'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'merchant_id', 'type' => 'common'],
        ];
    }    

    protected function _searchPre(& $query)
    {
        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`visit_num`) AS `visit_num`, SUM(`visit_num_real`) As `visit_num_real`, SUM(`visit_num_success`) AS `visit_num_success`";
        $query->select($fieldsStr);
        $query->groupBy($fields);

    }

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['city_code', 'merchant_id', 'client_type', 'channel', 'sem_account', 'created_month', 'created_week', 'created_weedkay', 'created_day', 'created_hour'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['merchant_id', 'created_day'];
            }
        }
        return $fields;
    }
}
