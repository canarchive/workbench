<?php

namespace ifeed\shoot\models;

use ifeed\models\BaseModel as BaseModelBase;

class BaseModel extends BaseModelBase
{
    public function _getClassPrefix()
    {
        return '\ifeed\shoot\models\\';
    }
}
