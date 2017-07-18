<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use baseapp\merchant\models\Merchant;

class NewCallback extends MerchantModel
{
    public static function tableName()
    {
        return '{{%new_callback}}';
    }

    public function rules()
    {
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function attributeLabels()
    {
        return [
            'id' => '统计信息ID',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'status' => '状态',
            'content' => '回访纪要',
            'created_at' => '创建时间',
            'update_at' => '更新时间',
        ];
    }

    public function getStatusInfos()
    {
        return $this->_newModel('newMerchant')->statusInfos;
    }
}
