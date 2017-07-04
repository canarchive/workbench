<?php

namespace backend\components;

use Yii;

trait ControllerTraitAdd
{
    public function actionAdd()
    {
        return $this->_addInfo();
    }
}
