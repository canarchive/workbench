<?php

namespace backend\components;

use Yii;

trait ControllerTraitAdd
{
	public $_formName;

    public function actionAdd()
    {
		$formName = $this->_formName;
        return $this->_addInfo(true, $formName);
    }

    /**
     * Creates a new info.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    protected function _addInfo($returnView = true, $formName)
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass($this->_addData());
		$loadData = $formName === null ? $model->load(Yii::$app->request->post()) : $model->load(Yii::$app->request->post(), $formName);
        if ($loadData && $this->_checkRecordPriv($model) && $model->save()) {
            
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
