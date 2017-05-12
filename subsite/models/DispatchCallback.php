<?php

namespace subsite\models;

use common\models\SubsiteModel;

class DispatchCallback extends SubsiteModel
{
    public static function tableName()
    {
        return '{{%dispatch_callback}}';
    }

    public function rules()
    {
    }

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function attributeLabels()
    {
        return [
            'id' => '统计信息ID',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'content' => '回访纪要',
            'created_at' => '创建时间',
        ];
    }
}
