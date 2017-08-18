<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;

class Unit extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_unit}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name','plan_id','account_id'], 'required'],
            [['status',], 'default', 'value' => 0],
            //[[' '], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_id' => '计划名',
            'name' => '单元名',
            'account_id' => '账户ID',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'account_id' => ['type' => 'point', 'table' => 'account'],
            'plan_id' => ['type' => 'point', 'table' => 'plan'],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
        ];
    }
}
