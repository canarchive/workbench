<?php

namespace baseapp\merchant\models;

use Yii;

class Merchant extends MerchantModel
{
    public $current_action;
    public $import;
    public $managerRole;
    public static function tableName()
    {
        return '{{%merchant}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status_ext', 'callback_next', 'saleman_id', 'orderlist'], 'default', 'value' => '0'],
            [['import', 'code', 'city_code', 'status', 'msg', 'region', 'name_full', 'sort', 'address', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '代码',
            'name' => '名称',
            'name_full' => '全称',
            'city_code' => '分站代码',
            'region' => '所在区县',
            'sort' => '类别',
            'orderlist' => '排序',
            'address' => '地址',
            'description' => '描述',
            'status' => '状态',
            'status_ext' => '额外状态',
            'status_contract' => '合同状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'saleman_id' => '销售ID',
            'callback_next' => '下次回访时间',

            'operation' => '操作',
            'follow' => '拓展和回访',
            'op_owner' => '属主操作',
        ];
    }

    public function getStatusContractInfos()
    {
        return $this->getMerchantStatusParams();
        $datas = [
			'elec' => '发电子版合同',
            'selfsign' => '单方签章快递',
            'finish' => '已完成',
        ];
        return $datas;
    }

    public function getStatusInfos()
    {
        return $this->getMerchantStatusParams();
    }

    protected function getSortInfos()
    {
		return $this->getSortParams();
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        return true;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'sort' => ['type' => 'key'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'saleman_id' => ['type' => 'point', 'table' => 'saleman'],
            'city_code' => ['type' => 'common'],
            'region' => ['type' => 'common', 'listNo' => true],
            'orderlist' => ['type' => 'change', 'menuCode' => 'merchant_follow_merchant-pond_update', 'formatView' => 'raw', 'width' => '50'],
            //'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
            //'code' => ['type' => 'inline', 'method' => 'getCode', 'listNo' => true],
            'operation' => ['type' => 'operation'],
            'follow' => ['type' => 'operation', 'method' => 'formatFollow'],
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert) {
            $this->saleman_id_first = $this->saleman_id;
        }

        return true;
    }

    public function formatFollow($view)
    {
        if (empty($this->salemanPriv())) {
            return '-';
        }
        $menuCodes = [
            'merchant_follow_merchant-pond_callback' => '回访',
            'merchant_follow_callback_listinfo' => '',
            'merchant_follow_interview_listinfo' => '',
        ];
        return $this->_formatMenuOperation($view, $menuCodes, ['merchant_id' => 'id']);
    }

    public function formatOperation($view)
    {
        if (empty($this->salemanPriv())) {
            return '-';
        }
        $menuCodes = [
            'merchant_follow_contact_listinfo' => '',
            'merchant_contract_add' => '添加合同',
        ];
        return $this->_formatMenuOperation($view, $menuCodes, ['merchant_id' => 'id']);
    }
}
