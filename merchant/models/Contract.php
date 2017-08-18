<?php

namespace merchant\models;

use Yii;

class Contract extends BaseModel
{

    public static function tableName()
    {
        return '{{%contract}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['merchant_id'], 'required'],
            [['created_day', 'pay_day', 'saleman_id', 'fund'], 'default', 'value' => 0],
            [['name', 'serial', 'sort', 'status', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'name' => '名称',
            'created_day' => '签订日期',
            'pay_day' => '付款日期',
            'serial' => '合同编号',
            'fund' => '合同款',
            'saleman_id' => '销售',
            'sort' => '类型',
            'description' => '描述',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getStatusInfos()
    {
        return $this->getContractParams();
    }

    public function getSortInfos()
    {
        return $this->getMerchantStatusParams();
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'saleman_id' => ['type' => 'point', 'table' => 'saleman'],
            'name' => ['type' => 'common'],
            'sort' => ['type' => 'key'],
            'serial' => ['type' => 'common'],
            'fund' => ['type' => 'common'],
            'created_day' => ['type' => 'common'],
            'pay_day' => ['type' => 'common'],
            'description' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp', 'listNo' => true],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
