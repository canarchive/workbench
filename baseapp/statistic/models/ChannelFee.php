<?php

namespace baseapp\statistic\models;

use Yii;

class ChannelFee extends AbstractStatistic
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public static function tableName()
    {
        return '{{%planfee}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => '关键字',
            'keyword_search' => '搜索关键字',
            'channel_big' => '一级渠道',
            'channel' => '渠道',
            'created_day' => '日期',
            'created_hour' => '小时',
            'created_week' => '周',
            'merchant_id' => '商家',
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

    public function getFieldInfos()
    {
        $fields = ['sort', 'city_code', 'merchant_id', 'client_type', 'channel', 'account_id', 'plan_id', 'unit_id', 'created_month', 'created_week', 'created_weekday', 'created_day', 'created_hour'];
        return $fields;
    }
}
