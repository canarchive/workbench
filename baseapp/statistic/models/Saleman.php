<?php

namespace baseapp\statistic\models;

class Saleman extends AbstractStatistic
{
    use UpdateSalemanTrait;
    use UpdateSalemanServiceTrait;

    public static function tableName()
    {
        return '{{%saleman_origin}}';
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

        foreach ($this->baseFields() as $field => $value) {
            $data[$field] = $value;
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

    public function getSalemanBaseColumns()
    {
        $fields = array_keys($this->baseFields());
        $columns = [];
        foreach ($fields as $field) {
            $columns[$field] = [
                'attribute' => $field,
                'value' => function ($model) use ($fields, $field) {
					$num = $model->$field;
					$rate = '';
                    $total = $this->all_num;
					if (in_array($field, ['valid_num', 'bad_num', 'old_valid_num', 'old_bad_num'])) {
						$rate = $total <= 0 ? '-' : round($num / $total, 3) * 100;
						$rate = " ( {$rate}% )";
					}
					return $num . $rate;
                },
            ];
        }
        return $columns;
    }

    protected function baseFields()
    {
        $datas = [
            'new_num' => '未回访数',
            'empty_num' => '空号数',
            'mismatch_num' => '不匹配数',
            'cancel_num' => '作废数',
            'no-purpose_num' => '无意向数',
            'follow_num' => '跟进数',
            'latent_num' => '潜在数',
            'purpose_num' => '有意向数',
            'cooperation_num' => '合作数',
            'callback_num' => '回访数',
            'callback_merchant_num' => '回访商家数',
            'interview_num' => '面谈数'
        ];
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
