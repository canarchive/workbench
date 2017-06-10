<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Contact extends MerchantModel
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
            [['name', 'merchant_id', 'mobile'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['type', 'description', 'wechat'], 'safe'],
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
            'type' => '类型',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'description' => '描述',
        ];
    }

    public function getTypeInfos()
    {
        $datas = [
            'order' => '订单联系人',
            'money' => '汇款联系人',
        ];
        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '停用',
            '1' => '正常',
        ];
        return $datas;
    }
}
