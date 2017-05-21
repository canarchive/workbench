<?php

namespace common\models\statistic\searchs;

use yii\data\ActiveDataProvider;
use common\models\statistic\ReportService as ReportServiceModel;

class ReportService extends ReportServiceModel
{
    public $field_hit;
    public $data_type;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'data_type', 'created_day', 'channel', 'client_type'], 'safe'],
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
		$serviceIds = empty($this->service_id) ? [27, 28, 31] : $this->service_id;
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

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['city_code', 'merchant_id', 'client_type', 'channel', 'sem_account', 'service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day', 'created_hour'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['channel', 'created_day'];
            }
        }
        return $fields;
    }
}
