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

    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['status'], 'default', 'value' => 0],
            [['permission'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '代码',
            'name' => '名称',
            'status' => '状态',
            'permission' => '权限',
        ];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'status' => ['type' => 'key'],
        ];
    }
}
