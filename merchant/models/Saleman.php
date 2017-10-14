<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Saleman extends MerchantModel
{
    public static function tableName()
    {
        return '{{%saleman}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'mobile'], 'required'],
            [['status'], 'default', 'value' => 0],
            [['role', 'user_id'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'name' => '名字',
            'mobile' => '手机号',
            'role' => '角色',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getRoleInfos()
    {
        $datas = [
            'chief' => '销售总监',
            'manager' => '经理',
        ];
        return $datas;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'user_id' => ['type' => 'point', 'table' => 'merchant-user'],
            'mobile' => ['type' => 'common'],
            'role' => ['type' => 'key'],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
        ];
    }
}
