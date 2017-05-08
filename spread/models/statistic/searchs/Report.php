<?php

namespace spread\models\statistic\searchs;

use yii\data\ActiveDataProvider;
use spread\models\statistic\Report as ReportModel;

class Report extends ReportModel
{
    public $field_hit;

    public function rules()
    {
        return [
            [['merchant_id', 'field_hit', 'created_day', 'channel', 'client_type'], 'safe'],
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
        $fieldsStr .= ", SUM(`visit_num`) AS `visit_num`, SUM(`visit_num_real`) As `visit_num_real`, SUM(`visit_num_success`) AS `visit_num_success`";
        //echo $fieldsStr;exit();
		if (in_array('created_day', $this->fields)) {
			$query->orderBy(['created_day' => SORT_DESC]);
		}
        $query->select($fieldsStr);
        $query->groupBy($fields);

        $query->andFilterWhere([
            'client_type' => $this->client_type,
            'channel' => $this->channel,
            'merchant_id' => $this->merchant_id,
        ]);

        return $dataProvider;        
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
