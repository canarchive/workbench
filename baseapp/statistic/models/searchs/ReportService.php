<?php

namespace baseapp\statistic\models\searchs;

use Yii;
use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ReportService as ReportServiceModel;

class ReportService extends ReportServiceModel
{
    public $data_type;
    public $show_type;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'data_type', 'show_type', 'created_day'], 'safe'],
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
        //$fieldsStr .= ", SUM(`visit_num_success`) AS `visit_num_success`";
        foreach ($this->baseFields() as $bField) {
            foreach (['', 'old_'] as $fType) {
                $field = $fType . $bField;
                $fieldsStr .= ", SUM(`{$field}`) AS `{$field}`,";
            }
        }
        $fieldsStr = rtrim($fieldsStr, ',');
        //echo $fieldsStr;exit();
        $query->select($fieldsStr);
        $query->groupBy($fields);
    }    

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
        ];
        $form = [
        [
            $this->_sStartParam(),
            $this->_sHiddenParam(['field' => ['feild_hit']]),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    public function getFieldHitInfos()
    {
        return [
            'fields' => ['merchant_id', 'service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day'],
            'default' => 'created_day',
        ];
    }
}
