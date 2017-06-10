<?php

namespace merchant\models;

use Yii;
use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Bank extends MerchantModel
{

    public static function tableName()
    {
        return '{{%bank}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'merchant_id', 'bank_account', 'bank_name'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['type', 'description', 'bank_opening'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '商家银行ID',
            'merchant_id' => '商家ID',
            'name' => '账户名',
            'bank_name' => '银行名称',
            'bank_opening' => '开户行',
            'bank_account' => '账号',
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
            'inuse' => '常用',
            'bak' => '备用',
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

    public function getBankNameInfos()
    {
        return Yii::$app->params['bankInfos'];
    }
}
