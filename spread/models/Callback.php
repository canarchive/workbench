<?php

namespace spread\models;

use common\models\SpreadModel;

class Callback extends SpreadModel
{
    public static function tableName()
    {
        return '{{%callback}}';
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

    public function getService()
    {
        $info = $this->_newModel('service')->findOne($this->service_id);

        return $info;
    }
}
