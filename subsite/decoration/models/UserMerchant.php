<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use baseapp\spread\models\UserMerchantTrait;

class UserMerchant extends SubsiteModel
{
    use ModelTrait;
    use UserMerchantTrait;

	public function getHouseModel()
	{
        return $this->_newModel('house')->findOne($this->house_id);
	}
}
