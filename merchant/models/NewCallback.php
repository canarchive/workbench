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
            'content' => '回访纪要',
            'created_at' => '创建时间',
            'update_at' => '更新时间',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '新录入',
            'no-purpose' => '无意向',
            'latent' => '潜在',
            'purpose' => '有意向',
			'cooperation' => '合作',
        ];
        return $datas;
    }

    protected function getSortInfos()
    {
        $datas = [
            'decoration' => '家装公司',
        ];
        return $datas;
    }
}
