<?php

namespace subsite\decoration\models;

use baseapp\spread\models\UserMerchantTrait;

class UserMerchant extends ModelBase
{
    use UserMerchantTrait;

	public function getHouseModel()
	{
        return $this->_newModel('house')->findOne($this->house_id);
	}
}
