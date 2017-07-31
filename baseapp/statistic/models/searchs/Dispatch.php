<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\Dispatch as DispatchModel;

class Dispatch extends DispatchModel
{
    public $field_hit;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'created_day', 'created_at_start', 'created_at_end', 'merchant_id'], 'safe'],
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

		$serviceIds = empty($this->service_id) ? null : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);

        $query->andFilterWhere([
            'merchant_id' => $this->merchant_id,
        ]);
        $startTime = intval($this->created_at_start);
        $endTime = $this->created_at_end > 0 ? intval($this->created_at_end) : date('Ymd');
        $query->andFilterWhere(['>=', 'created_day', $startTime]);
        $query->andFilterWhere(['<=', 'created_day', $endTime]);

        return $dataProvider;        
    }    

    public function getSearchDatas()
    {
        $this->_getCheckedFields();
        $list = [
            $this->_sMerchantParam(['status_ext' => [1]]),
            $this->_sServiceParam(['status_ext' => [1]]),
        ];
        $form = [
        [
            $this->_sStartParam(),
            $this->_sFieldHitParam(),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    public function getFieldHitInfos()
    {
        return[
            'fields' => ['merchant_id', 'service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day'],
            'default' => 'created_day',
        ];
    }
}
