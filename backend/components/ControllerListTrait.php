<?php

namespace backend\components;

use Yii;

Trait ControllerListTrait
{
    public function actionListinfo()
    {
        return $this->_listinfoInfo();
    }
}
