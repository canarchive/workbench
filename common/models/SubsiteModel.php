<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Attachment as AttachmentSubsite;
use merchant\models\Merchant;

class SubsiteModel extends BaseModel
{
	protected function getAttachmentModel()
	{
		return new AttachmentSubsite();
	}

	public function getMerchantInfos()
	{
        $infos = $this->getMerchantAllInfos();;
        $infos = ArrayHelper::map($infos, 'id', 'name');
        return $infos;
	}

    public function getServiceInfos()
    {
        $infos = $this->_newModel('service')->find()->indexBy('id')->all();
        return $infos;
    }

    public function getMerchantAllInfos()
    {
        $infos = Merchant::find()->indexBy('id')->all();
        return $infos;
    }

    protected function getServiceData()
    {
        if (!isset($this->service_id) || empty($this->service_id)) {
            return [];
        }

        $info = $this->_newModel('service')->findOne($this->service_id);
        return $info;
    }

    protected function getMerchantInfo()
    {
        if (!isset($this->merchant_id) || empty($this->merchant_id)) {
            return [];
        }

        $info = Merchant::findOne($this->merchant_id);
        return $info;
    }

    public function getClientTypeInfos()
    {
        $datas = [
            '' => '全部',
            'pc' => 'PC端',
            'h5' => '移动端',
        ];
        return $datas;
    }

    public function getChannelInfos()
    {
        $datas = [
            'bd' => '百度',
            'bdxxl' => '百度信息流',
            'sg' => '搜狗',
            '360' => '360',
			'zht' => '智慧推',
            'gdt' => '广点通',
            //'sm' => '神马',
        ];
        return $datas;
    }    
}
