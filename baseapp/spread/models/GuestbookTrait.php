<?php

namespace baseapp\spread\models;

use baseapp\merchant\models\Merchant;

trait GuestbookTrait
{
    private $_merchantInfo;

    public function rules()
    {
    }

    public function attributeLabels()
    {
        return [
            'user_merchant_id' => '派单ID',
            'mobile' => '手机号',
            'merchant_id' => '商家ID',
            'service_id' => '客服ID',
            'content' => '商家留言',
            'created_at' => '留言时间',
            'reply' => '客服答复',
            'reply_at' => '答复时间',
        ];
    }

    public function getMobileId()
    {
        $model = $this->_newModel('dispatch');
        $info = $model->find()->where(['mobile' => $this->mobile])->one();

        return $info->id;
    }
}
