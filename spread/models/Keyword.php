<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;

class Keyword extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_keyword}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['account_id','plan_id','name',], 'required'],
            [['status', 'unit_id'], 'default', 'value' => 0],
            //[], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => '账户ID',
            'plan_id' => '计划ID',
            'unit_id' => '单元ID',
            'name' => '关键字',
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
            'status' => ['type' => 'key'],
        ];
    }
}
