<?php

namespace backend\components;

use Yii;

Trait ControllerFullTrait
{
    public function actionListinfo()
    {
        return $this->_listinfoInfo();
    }

    public function actionView($id)
    {
        return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
        return $this->_addInfo();
    }

    public function actionUpdate($id = 0)
    {
        if (Yii::$app->request->isAjax) {
            return $this->_updateByAjax();
        }

        return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
        return $this->_deleteInfo($id);
    }
}
