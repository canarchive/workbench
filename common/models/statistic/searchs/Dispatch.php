<?php

namespace spread\models\statistic\searchs;

use yii\data\ActiveDataProvider;
use spread\models\statistic\Dispatch as DispatchModel;

class Dispatch extends DispatchModel
{
    public $field_hit;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'created_day', 'merchant_id'], 'safe'],
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
        $fieldsStr .= ", SUM(`dispatch_num`) AS `dispatch_num`, SUM(`back_reply_num`) AS `back_reply_num`, SUM(`back_confirm_num`) AS `back_confirm_num`";
        //echo $fieldsStr;exit();
        $query->select($fieldsStr);
        $query->groupBy($fields);
		if (in_array('created_day', $this->fields)) {
			$query->orderBy(['created_day' => SORT_DESC]);
		}

		$serviceIds = empty($this->service_id) ? [27, 28, 31] : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);

        $query->andFilterWhere([
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
        $datas = ['merchant_id', 'service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['created_day'];
            }
        }
        return $fields;
    }
}
