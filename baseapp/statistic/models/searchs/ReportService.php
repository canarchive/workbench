<?php

namespace baseapp\statistic\models\searchs;

use Yii;
use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ReportService as ReportServiceModel;

class ReportService extends ReportServiceModel
{
    public $field_hit;
    public $data_type;
    public $show_type;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'data_type', 'show_type', 'created_day'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        //$fieldsStr .= ", SUM(`visit_num_success`) AS `visit_num_success`";
        foreach ($this->baseFields() as $bField) {
            foreach (['', 'old_'] as $fType) {
                $field = $fType . $bField;
                $fieldsStr .= ", SUM(`{$field}`) AS `{$field}`,";
            }
        }
		$serviceIds = empty($this->service_id) ? [27, 28, 31, 46, 47] : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);
		if (in_array('created_day', $this->fields)) {
			$query->orderBy(['created_day' => SORT_DESC]);
		}
        $fieldsStr = rtrim($fieldsStr, ',');
        //echo $fieldsStr;exit();
        $query->select($fieldsStr);
        $query->groupBy($fields);

        return $dataProvider;        
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
