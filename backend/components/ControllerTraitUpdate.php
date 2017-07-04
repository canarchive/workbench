<?php

namespace backend\components;

use Yii;

trait ControllerTraitUpdate
{
    public function actionUpdate($id = 0)
    {
        if (Yii::$app->request->isAjax) {
            return $this->_updateByAjax();
        }

        return $this->_updateInfo($id);
    }
}
