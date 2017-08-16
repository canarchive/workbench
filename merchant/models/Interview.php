<?php

namespace merchant\models;

use baseapp\merchant\models\MerchantModel;
use baseapp\merchant\models\Merchant;

class Interview extends MerchantModel
{
    public static function tableName()
    {
        return '{{%interview}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'saleman_id' => '销售ID',
            'contact_id' => '商家联系人ID',
            'note_pre' => '备注',
            'note_cancel' => '取消备注',
            'note_after' => '面谈后备注',
            'created_at' => '创建时间',
            'update_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '预约',
            'cancel' => '取消',
            'finish' => '完成面谈',
            'change' => '调整面谈时间',
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

    public function getGatherListElems($params = [])
    {
        return [
            'contact_id' => ['sort' => 'change', 'type' => 'dropdown', 'elemInfos' => $this->getPointInfos('new-contact', ['where' => $params])],
            'saleman_interview' => ['sort' => 'change', 'type' => 'dropdown', 'table' => 'saleman', 'elemInfos' => $this->getPointInfos('saleman')],
            'interview_at' => ['sort' => 'change', 'valueType' => 'timestamp', 'type' => 'timestamp'],
            'status' => ['sort' => 'change', 'type' => 'dropdown', 'elemInfos' => $this->statusInfos],
            'note_pre' => [],
            'note_cancel' => ['sort' => 'change', 'type' => 'textarea', 'option' => ['cols' => 20]],
            'note_after' => ['sort' => 'change', 'type' => 'textarea', 'option' => ['cols' => 20]],
        ];
    }
}
