<?php

namespace baseapp\merchant\models;

trait CallbackTrait
{
    public static function tableName()
    {
        return '{{%callback}}';
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
            'update_at' => '更新时间',
        ];
    }
}
