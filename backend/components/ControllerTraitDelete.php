<?php

namespace backend\components;

trait ControllerTraitDelete
{
    public function actionDelete($id)
    {
        return $this->_deleteInfo($id);
    }
}
