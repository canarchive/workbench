<?php

namespace merchant\decoration\models;

use baseapp\auth\models\SigninTrait;
use merchant\models\User;

class Signin extends ModelBase
{
    use ModelTrait;
    use SigninTrait;

    public function getUser()
    {
        if ($this->_user === false) {
            $userModel = new User();
            $this->_user = $userModel->getInfo(['mobile' => $this->name]);
        }

        return $this->_user;
    }
}
