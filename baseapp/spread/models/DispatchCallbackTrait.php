<?php

namespace baseapp\spread\models;

trait DispatchCallbackTrait
{
    public static function tableName()
    {
        return '{{%dispatch_callback}}';
    }

    public function rules()
    {
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function attributeLabels()
    {
        return [
            'id' => '统计信息ID',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'content' => '回访纪要',
            'created_at' => '创建时间',
        ];
    }
}
