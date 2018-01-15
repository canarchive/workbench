<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;

class Unit extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_unit}}';
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
            [['name','plan_id','account_id'], 'required'],
            [['status',], 'default', 'value' => 0],
            [[' '], 'safe'],
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
