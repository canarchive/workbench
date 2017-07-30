<?php

namespace baseapp\statistic\models;

class ReportService extends AbstractStatistic
{
    use UpdateServiceTrait;

    public static function tableName()
    {
        return '{{%service_origin}}';
    }

    public function attributeLabels()
    {
        $data = [
            'id' => 'ID',
            'created_day' => '日期',
            'created_week' => '周',
            'created_month' => '月',
            'merchant_id' => '商家',
        ];

        $dataTypes = $this->dataTypes;
        $showType = 'all';
        foreach ($this->baseFields($showType, true) as $field => $value) {
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
            $info = new self($data);
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
        $fields = ['sort', 'merchant_id', 'service_id', 'created_month', 'created_week', 'created_weekday', 'created_day'];
        return $fields;
    }

    public function getServiceBaseColumns()
    {
        $showType = $this->show_type;
        $fields = $this->baseFields($showType);
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

    protected function baseFields($showType = 'base', $returnValue = false)
    {
        $showType = in_array($showType, ['all', 'base', 'bad', 'out']) ? $showType : 'base';
        $fields = [
            'visit_num_success' => ['name' => '信息数', 'type' => ['bad', 'out', 'base']],
            //'callback_num' => '回访次数',
            'valid_num' => ['name' => '有效数', 'type' => ['bad', 'out', 'base']], 
            'valid_back_num' => ['name' => '退单数', 'type' => ['base', 'bad', 'out']], 
            'bad_num' => ['name' => '废单数', 'type' => ['bad', 'base']], 
            'valid_part_num' => ['name' => '有效局装数', 'type' => 'base'], 
            'new_num' => ['name' => '未回访数', 'type' => 'base'], 
            'follow_num' => ['name' => '跟进数', 'type' => 'base'], 
            'followplan_num' => ['name' => '期房跟进数', 'type' => 'base'],
            'badnew_num' => ['name' => '未知废单数', 'type' => 'bad'], 
            'badnocall_num' => ['name' => '空号废单数', 'type' => 'bad'], 
            'badnoneed_num' => ['name' => '无需求废单数', 'type' => 'bad'], 
            'badbooked_num' => ['name' => '已装修废单数', 'type' => 'bad'],
            'badtest_num' => ['name' => '测试废单数', 'type' => 'bad'], 
            'validout_num' => ['name' => '无法派单数', 'type' => ['base', 'out']],
            'outnew_num' => ['name' => '未知数', 'type' => 'out'], 
            'outout_num' => ['name' => '外地数', 'type' => 'out'], 
            'outpart_num' => ['name' => '局装数', 'type' => 'out'], 
            'outsmall_num' => ['name' => '小面积整装数', 'type' => 'out'], 
            'outshop_num' => ['name' => '公数', 'type' => 'out'], 
            'outsoft_num' => ['name' => '软装数', 'type' => 'out'], 
        ];
        $datas = [];
        foreach ($fields as $key => $value) {
            $type = (array) $value['type'];
            if ($showType != 'all' && !in_array($showType, $type)) {
                continue;
            }
            if ($returnValue) {
                $datas[$key] = $value['name'];
            } else {
                $datas[] = $key;
            }
        }
        return $datas;
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
