<?php

namespace merchant\models;

use Yii;

class Datum extends BaseModel
{

    public static function tableName()
    {
        return '{{%datum}}';
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
            [['name', 'bank_name', 'bank_account', 'taxnumber', 'address', 'address_reg', 'homeurl', 'homeurl_mobile', 'type', 'description', 'bank_opening'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'name' => '全称',
            'bank_name' => '银行名称',
            'bank_opening' => '开户行',
            'bank_account' => '对公账户',
            'taxnumber' => '税号',
            'address' => '地址',
            'address_reg' => '注册地址',
            'type' => '类型',
            'orderlist' => '排序',
            'status' => '状态',
            'homeurl' => '官网',
            'homeurl_mobile' => '官网移动端',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'description' => '描述',
        ];
    }

    public function getTypeInfos()
    {
        $datas = [
            'inuse' => '常用',
            'bak' => '备用',
        ];
        return $datas;
    }

    public function getBankNameInfos()
    {
        return Yii::$app->params['bankInfos'];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant-pond'],
            'created_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
        ];
    }
}
