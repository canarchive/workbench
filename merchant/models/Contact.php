<?php

namespace merchant\models;

class Contact extends BaseModel
{
    public static function tableName()
    {
        return '{{%contact}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['merchant_id'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['name', 'mobile', 'title', 'description', 'wechat'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '联系人ID',
            'merchant_id' => '商家ID',
            'name' => '名字',
            'mobile' => '手机号',
            'wechat' => '微信号',
            'title' => '头衔',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'description' => '描述',
        ];
    }

    public function getGatherListElems()
    {
        return [
            'name' => ['sort' => 'change'],
            'mobile' => ['sort' => 'change'],
            'title' => ['sort' => 'change'],
            'orderlist' => ['sort' => 'change'],
            'description' => ['sort' => 'change'],
        ];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant-pond'],
            'name' => ['type' => 'common'],
            'title' => ['type' => 'common'],
            'mobile' => ['type' => 'common'],
            'wechat' => ['type' => 'common'],
            'orderlist' => ['type' => 'common'],
            'description' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
