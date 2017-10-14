<?php

namespace subsite\decoration\models;

use baseapp\merchant\models\Merchant;

class MerchantDecoration extends ModelBase
{
    public static function tableName()
    {
        return '{{%merchant_decoration}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['merchant_id'], 'required'],
            [['status'], 'default', 'value' => 0],
            [['sort', 'mobile_cps', 'msg', 'service_item', 'advantage', 'shop', 'scope_area', 'scope_sort', 'scope_note', 'scope_ext'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'sort' => '合作类型',
            'mobile_cps' => 'CPS派单手机号',
            'msg' => 'CPA短信',
            'service_item' => '服务项目',
            'advantage' => '优势',
            'shop' => '门店',
            'scope_area' => '承接区域',
            'scope_sort' => '承接类型',
            'scope_note' => '承接备注',
            'scope_ext' => '承接补充说明',
            'created_at' => '注册时间',
            'updated_at' => '更新时间',
            'description' => '描述',
            'status' => '状态',
        ];
    }

    public function getSortInfos()
    {
        $merchant = new Merchant();
        return $merchant->statusInfos;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'sort' => ['type' => 'key'],
            'mobile_cps' => ['type' => 'common'],
            'created_at' => ['type' => 'timestamp', 'listNo' => true],
            'updated_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
            'msg' => ['type' => 'common', 'listNo' => true],
            'service_item' => ['type' => 'common', 'listNo' => true],
            'advantage' => ['type' => 'common', 'listNo' => true],
            'shop' => ['type' => 'common', 'listNo' => true],
            'scope_sort' => ['type' => 'common', 'listNo' => true],
            'scope_area' => ['type' => 'common', 'listNo' => true],
            'scope_note' => ['type' => 'common', 'listNo' => true],
            'scope_ext' => ['type' => 'common', 'listNo' => true],
            'description' => ['type' => 'common', 'listNo' => true],
        ];
    }
}
