<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;

class Plan extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_plan}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name','account_id','merchant_id','put_at','put_end'], 'required'],
            [['status',], 'default', 'value' => 0],
            [['created_at','updated_at',], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '计划名',
            'account_id' => '帐目名',
            'merchant_id' => '公司ID',
            'put_at' => '投放时间',
            'put_end' => '投放结束',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }
}
