<?php

namespace backend\components;

use Yii;

Trait ControllerViewTrait
{
    public function actionListinfo()
    {
        return $this->_listinfoInfo();
    }

    public function actionView($id)
    {
        return $this->_viewInfo($id);
    }
}
