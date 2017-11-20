<?php

namespace subsite\decoration\models;

use baseapp\spread\models\UserMerchantTrait;

class UserMerchant extends ModelBase
{
    use UserMerchantTrait;
    public $statusLimit = 5 * 86400;
    public $isRedispatchLimit = 600;

	public function getHouseModel()
	{
        return $this->_newModel('house')->findOne($this->house_id);
	}

    public function getSortInfos()
    {
        $datas = [
            'overall' => '整装',
            'part' => '局装',
            'office' => '工装',
        ];
        return $datas;
    }
}
