<?php

namespace baseapp\statistic\models;

class Dispatch extends AbstractStatistic
{
    use UpdateDispatchTrait;
    use UpdateServiceDispatchTrait;
    public $tableStr;

    public static function tableName()
    {
        return '{{%dispatch_origin}}';
    }

    public function attributeLabels()
    {
        return array_merge($this->attributeBase(), [
            'dispatch_num' => '派单数',
            'back_reply_num' => '申请退单数',
            'back_confirm_num' => '确认退单数',
        ]);
    }

    public function recordDetail($data, $info, $type)
    {
        $data['merchant_id'] = intval($data['merchant_id']);
        $isSuccess = $type == 'signup' ? true : false;
        if (empty($info)) {
            $data['visit_num'] = $isSuccess ? 0 : 1;
            $data['visit_num_success'] = $isSuccess ? 1 : 0;
            $info = new self($data);
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
        $fields = ['merchant_id', 'service_id', 'created_month', 'created_week', 'created_weekday', 'created_day', 'created_hour'];
        return $fields;
    }
}
