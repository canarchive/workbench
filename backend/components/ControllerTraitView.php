<?php

namespace backend\components;

Trait ControllerTraitView
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
