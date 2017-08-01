<?php

namespace demo\models;

use Yii;
use common\models\DemoModel;

class ModelBase extends DemoModel
{

    public function _getClassPrefix()
    {
        return "\demo\models\\";
    }
}
