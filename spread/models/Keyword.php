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

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function rules()
    {
        return [
            [['account_id','plan_id','unit_id','name',], 'required'],
            [['status',], 'default', 'value' => 0],
            [['created_at','updated_at',], 'safe'],
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

    protected function getUnitInfos()
    {
        $infos = ArrayHelper::map(Unit::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    protected function getPlanInfos()
    {
        $infos = ArrayHelper::map(Plan::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }
    
    protected function getAccountInfos()
    {
        $infos = ArrayHelper::map(Account::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '未完成',
            '1' => '已完成',
            '99' => '已取消',
        ];
        return $datas;
    }
}
