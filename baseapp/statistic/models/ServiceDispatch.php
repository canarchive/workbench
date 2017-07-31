<?php

namespace baseapp\statistic\models;

class ServiceDispatch extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%service_dispatch_origin}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dispatch_num' => '派单数',
            'back_reply_num' => '申请退单数',
            'back_confirm_num' => '确认退单数',
            'service_id' => '客服',
        ];
    }

    public function getFieldInfos()
    {
        $fields = ['service_id', 'created_month'];
        return $fields;
    }
}
