<?php

namespace backend\components;

trait ControllerTraitImexport
{
    public function actionImport()
    {
    	return $this->_importInfo();
    }

    public function actionExport()
    {
        return $this->_exportInfo();
    }
}
