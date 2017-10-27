<?php

namespace baseapp\spread\models;

trait CallbackTrait
{
    public static function tableName()
    {
        return '{{%callback}}';
    }

    public function rules()
    {
        return [];
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function attributeLabels()
    {
        return [
            'id' => '统计信息ID',
            'merchant_id' => '商家',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'content' => '回访纪要',
            'status' => '状态',
            'invalid_status' => '无效原因',
            'out_status' => '无法派单原因',
            'created_at' => '创建时间',
            'signed_merchant' => '签约公司',
            'update_at' => '更新时间',
        ];
    }
}
