<?php

namespace backend\models;

use common\models\PassportModel;
use common\auth\models\SigninTrait;

class Signin extends PassportModel
{
	use SigninTrait;

    /**
     * Finds user by [[name]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Manager::findByName($this->name);
        }

        return $this->_user;
    }
}
