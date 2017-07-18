<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use yii\helpers\ArrayHelper;

class SalemanRecord extends MerchantModel
{
    public static function tableName()
    {
        return '{{%saleman_record}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['created_day', 'saleman_id'], 'required'],
            [['record', 'reply'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'saleman_id' => '销售',
            'created_day' => '日期',
            'record' => '日志',
            'reply' => '点评',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
