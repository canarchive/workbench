<?php

namespace backend\components;

use Yii;

trait ControllerTraitAdd
{
    public function actionAdd()
    {
        return $this->_addInfo();
    }

    /**
     * Creates a new info.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    protected function _addInfo($returnView = true)
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass($this->_addData());
        if ($model->load(Yii::$app->request->post()) && $this->_checkRecordPriv($model) && $model->save()) {
            
            if ($this->_returnView()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->redirect(['listinfo']);
        }

        return $this->render($this->addView, [
            'model' => $model,
            'currentView' => $this->viewPrefix,
            'type' => 'add',
        ]);
    }

    protected function _addData()
    {
        return [];
    }

    protected function getAddView()
    {
        return '@backend/views/common/change';
    }
}
