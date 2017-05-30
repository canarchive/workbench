<?php

namespace common\models\statistic;

class ReportService extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%service_origin}}';
    }

    public function attributeLabels()
    {
        $data = [
            'id' => 'ID',
            'day' => '日期',
            'week' => '周',
            'client_type' => '客户端',
        ];

        $dataTypes = $this->dataTypes;
        foreach ($this->baseFields(true) as $field => $value) {
            foreach ($dataTypes as $type => $tValue) {
                $cField = $type == 'old' ? 'old_' . $field : $field;
                $data[$cField] = $value;
            }
        }
        //print_r($data);exit();
        return $data;
    }

    public function recordDetail($data, $info, $type)
    {
        $data['merchant_id'] = intval($data['merchant_id']);
        if (empty($info)) {
            $data['visit_num_success'] = 1;
            $info = $this->_newModel('statisticReportService', true, $data);
            $info->insert();
            return ;
        }

        $updateData = ['visit_num_success' => 1];
        $info->updateCounters($updateData);

        return ;
    }    

    public function getValidTypes()
    {
        return ['signup'];
    }

    public function getFieldInfos()
    {
        $fields = ['city_code', 'merchant_id', 'service_id', 'channel', 'created_month', 'created_week', 'created_weekday', 'created_day'];
        return $fields;
    }

    public function getServiceBaseColumns()
    {
        $fields = $this->baseFields();
        $columns = [];
        $dataType = $this->data_type;
        foreach ($fields as $field) {
            $field = $dataType == 'old' ? 'old_' . $field : $field;
            $columns[$field] = [
                'attribute' => $field,
                'value' => function ($model) use ($fields, $dataType, $field) {
					$num = $model->$field;
					$rate = '';
					switch ($dataType) {
					case '':
						$total = $model->visit_num_success;
						break;
					case 'old':
						$total = $model->old_visit_num_success;

						break;
					case 'all':
						$total = $model->visit_num_success + $model->old_visit_num_success;
						$oldField = 'old_' . $field;
						$oldNum = $model->$oldField;
						$num = $num + $oldNum;
						break;
					}
					if (in_array($field, ['valid_num', 'bad_num', 'old_valid_num', 'old_bad_num'])) {
						$rate = $total <= 0 ? '-' : round($num / $total, 3) * 100;
						$rate = " ( {$rate}% )";
					}
					return $num . $rate;

					/*$oldField = 'old_' . $field;
					$num = $model->$field;
					$numOld = $model->$oldField;
					$numAll = $model->$field + $model->$oldField;

					$rate = $rateOld = $rateAll = '';
					if ($field == 'valid_num' || $field == 'bad_num') {
						$total = $model->visit_num_success;
						$totalOld = $model->old_visit_num_success;
						$totalAll = $model->visit_num_success + $model->old_visit_num_success;
						$rate = $total <= 0 ? '-' : round($num / $total, 3) * 100;
						$rate = " ( {$rate}% )";
						$rateOld = $totalOld <= 0 ? '-' : round($numOld / $totalOld, 3) * 100;
						$rateOld = " ( {$rateOld}% )";
						$rateAll = $totalAll <= 0 ? '-' : round($numAll / $totalAll, 3) * 100;
						$rateAll = " ( {$rateAll}% )";
					}
					$return = $
						return $num . $rate;*/
                },
            ];
        }
        return $columns;
    }

    protected function baseFields($returnValue = false)
    {
        $fields = [
            'visit_num_success' => '信息数', 
            'callback_num' => '回访次数',
            'new_num' => '未回访数', 
            'valid_num' => '有效数', 
            'valid_part_num' => '有效局装数', 
            'validout_num' => '无法派单数',
            //'validdispatch_num',
            'follow_num' => '跟进数', 
            'followplan_num' => '期房跟进数',
            //'weigh_num', 'order_num',
            'bad_num' => '废单数', 
            'badnew_num' => '未知废单数', 
            'badnoneed_num' => '无需求废单数', 
            'badbooked_num' => '已装修废单数',
            'badtest_num' => '测试废单数', 
        ];

        $return = $returnValue ? $fields : array_keys($fields);
        return $return;
    }

    protected function getDataTypes()
    {
        return [
            '' => '首次派单',
            'old' => '重复派单',
            'all' => '全部派单',
        ];
    }
}
