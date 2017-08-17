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

    /**
     * Updates an existing info.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    protected function _updateInfo($id)
    {
        $scenario = $this->_getScenario();
        $model = $this->findModel($id);
        if (!empty($scenario)) {
            $model->setScenario($scenario);
        }
        if ($model->load(Yii::$app->request->post()) && $this->_checkRecordPriv($model) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render($this->updateView, [
            'model' => $model,
            'currentView' => $this->viewPrefix,
            'type' => 'update',
        ]);
    }

    protected function getUpdateView()
    {
        return '@backend/views/common/change';
    }
}
