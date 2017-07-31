<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use baseapp\spread\models\CallbackTrait;

class Callback extends ModelBase
{
    use CallbackTrait;

    public function getStatusInfos()
    {
        return $this->_userStatus('status');
    }

    public function getInvalidStatusInfos()
    {
        return $this->_userStatus('invalidStatus');
    }

    public function getOutStatusInfos()
    {
        return $this->_userStatus('outStatus');
    }

    protected function _userStatus($type)
    {
        $uModel = New User();
        $field = $type . 'Infos';
        return $uModel->$field;
    }
}
