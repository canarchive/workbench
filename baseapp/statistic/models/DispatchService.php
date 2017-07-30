<?php

namespace baseapp\statistic\models;

class DispatchService extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%dispatch_service_origin}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dispatch_num' => '派单数',
            'back_reply_num' => '申请退单数',
            'back_confirm_num' => '确认退单数',
            'service_id' => '客服',
            'day' => '日期',
            'week' => '周',
        ];
    }

    public function getFieldInfos()
    {
        $fields = ['service_id', 'created_month', 'created_week', 'created_weekday', 'created_day', 'created_hour'];
        return $fields;
    }
}
