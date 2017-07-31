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

    protected function _getCheckedFields()
    {
        if ($this->field_hit === null) {
            $this->field_hit = Yii::$app->request->get('field_hit', '');
        }
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit, '-'));
        $datas = ['merchant_id', 'service_id', 'created_month', 'created_week', 'created_weedkay', 'created_day'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['created_day'];
            }
        }
        return $fields;
    }

    public function getSearchDatas()
    {
        $list = [
            [
                'name' => '商家',
                'field' => 'merchant_id',
                'infos' => $this->getPointInfos('merchant', ['where' => ['status_ext' => [1]]]),
            ],
            [
                'name' => '客服',
                'field' => 'service_id',
                'infos' => $this->getPointInfos('service', ['where' => ['status_ext' => [1]]]),
            ],
        ];
        $form = [
        [
            [
                'name' => '报名时间',
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
            [
                'name' => '检索类别',
                'field' => 'field_hit',
                'type' => 'hidden',
                'value' => $this->field_hit,
            ],
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
