<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ServiceWage as ServiceWageModel;

class ServiceWage extends ServiceWageModel
{
    public $field_hit;

    public function rules()
    {
        return [
            [['service_id', 'field_hit'], 'safe'],
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
        $fieldsStr .= $this->getFieldsStr('wage');
        $query->select($fieldsStr);
        $query->groupBy($fields);
		if (in_array('created_month', $this->fields)) {
			$query->orderBy(['created_month' => SORT_DESC]);
		}

		$serviceIds = empty($this->service_id) ? null : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);

        return $dataProvider;        
    }    

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['service_id', 'created_month'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['created_month'];
            }
        }
        return $fields;
    }
}
