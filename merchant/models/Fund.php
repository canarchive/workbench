<?php

namespace merchant\models;

use Yii;

class Fund extends BaseModel
{

    public static function tableName()
    {
        return '{{%fund}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['merchant_id'], 'required'],
            [['fund', 'refund', 'deduct', 'pay_day', 'saleman_id'], 'default', 'value' => 0],
            [['sort', 'status', 'description', 'record'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'pay_day' => '付款日期',
            'fund' => '合同款',
            'refund' => '退款',
            'deduct' => '提成',
            'saleman_id' => '销售',
            'sort' => '类型',
            'description' => '描述',
            'record' => '补充说明',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getSortInfos()
    {
        return $this->getMerchantStatusParams();
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'pay_day' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'saleman_id' => ['type' => 'point', 'table' => 'saleman'],
            'fund' => ['type' => 'common'],
            'refund' => ['type' => 'common'],
            'deduct' => ['type' => 'common'],
            'sort' => ['type' => 'key'],
            'description' => ['type' => 'common', 'listNo' => true],
            'record' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp', 'listNo' => true],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
