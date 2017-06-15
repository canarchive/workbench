<?php

namespace merchant\models;

use Yii;
use baseapp\merchant\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Role extends MerchantModel
{

    public static function tableName()
    {
        return '{{%role}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['status'], 'default', 'value' => 0],
            [['privilege'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '代码',
            'name' => '名称',
            'status' => '状态',
            'privilege' => '权限',
        ];
    }
}
