<?php

namespace ifeed\models;

use baseapp\ifeed\models\IfeedModel;

class BaseModel extends IfeedModel
{
    public function _getClassPrefix()
    {
        return '\ifeed\models\\';
    }
}
