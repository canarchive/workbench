<?php

namespace spread\models\statistic;

class Report extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%report_origin}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => '关键字',
            'keyword_search' => '搜索关键字',
            'channel_big' => '一级渠道',
            'channel' => '渠道',
            'day' => '日期',
            'hour' => '小时',
            'week' => '周',
            'client_type' => '客户端',
            'visit_num' => '访问数',
            'visit_num_success' => '转化数',
            'success_rate' => '转化率',
            'hit_num' => 'SEM点击数',
            'hit_rate' => 'SEM转化率',
            'fee' => 'SEM消费',
            'fee_average' => 'SEM报名成本',
        ];
    }

    public function recordDetail($data, $info, $type)
    {
        $data['merchant_id'] = intval($data['merchant_id']);
        $isSuccess = $type == 'signup' ? true : false;
        if (empty($info)) {
            $data['visit_num'] = $isSuccess ? 0 : 1;
            $data['visit_num_success'] = $isSuccess ? 1 : 0;
            $info = $this->_newModel('statisticReport', true, $data);
            $info->insert();
            return ;
        }

        $updateData = $isSuccess ? ['visit_num_success' => 1] : ['visit_num' => 1];
        $info->updateCounters($updateData);

        return ;
    }    

    public function getValidTypes()
    {
        return ['visit', 'signup'];
    }

    public function getFieldInfos()
    {
        $fields = ['city_code', 'merchant_id', 'client_type', 'channel', 'sem_account', 'plan_id', 'unit_id', 'created_month', 'created_week', 'created_weekday', 'created_day', 'created_hour'];
        return $fields;
    }
}
