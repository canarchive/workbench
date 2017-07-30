<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\DispatchService as DispatchServiceModel;

class DispatchService extends DispatchServiceModel
{
    public $field_hit;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['service_id', 'field_hit', 'created_day', 'created_at_start', 'created_at_end'], 'safe'],
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

        $startTime = intval($this->created_at_start);
        $endTime = $this->created_at_end > 0 ? intval($this->created_at_end) : date('Ymd');
        $query->andFilterWhere(['>=', 'created_day', $startTime]);
        $query->andFilterWhere(['<=', 'created_day', $endTime]);

        return $dataProvider;        
    }    

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['created_day'];
            }
        }
        return $fields;
    }

    public function getSearchDatas()
    {
        $list = [];
        $form = [
        [
            [
                'name' => '派单时间',
                'field' => 'created_at_start',
                'type' => 'daytime',
                'format' => 'YYYYMMDD',
                'end' => [
                    'name' => '创建时间',
                    'field' => 'created_at_end',
                    'type' => 'daytime',
                    'format' => 'YYYYMMDD',
                ],
            ],
        ],
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
