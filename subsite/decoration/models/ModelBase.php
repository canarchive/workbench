<?php

namespace subsite\decoration\models;

use Yii;
use common\models\SubsiteModel;

class ModelBase extends SubsiteModel
{
    public function _getClassPrefix()
    {
        return "\subsite\decoration\models\\";
    }
}
