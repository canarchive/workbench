<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use baseapp\merchant\models\Merchant;

class Callback extends MerchantModel
{
    public static function tableName()
    {
        return '{{%callback}}';
    }

    public function rules()
    {
        return [];
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'saleman_id' => '销售ID',
            'contact_id' => '联系人ID',
            'sort' => '类别',
            'status' => '状态',
            'status_contract' => '合同状态',
            'content' => '回访纪要',
            'created_at' => '创建时间',
            'update_at' => '更新时间',
        ];
    }

    public function getStatusInfos()
	{ 
		return $this->_newModel('merchantPond')->statusInfos; 
	}
	
	protected function getSortInfos()
    {
		return $this->getSortParams();
    }

    protected function getStatusContractInfos()
    {
		return $this->getContractParams();
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $model = new MerchantPond();
        $mInfo = $model->findOne($this->merchant_id);
        if (empty($mInfo)) {
            return true;
        }
        $mInfo->status = $this->status;
        $mInfo->update(false);

        return true;
    }

    public function getGatherListElems()
    {
        return [
            'status' => ['valueType' => 'key'],
            'content' => [],
            'created_at' => ['valueType' => 'timestamp'],
        ];
    }
}
