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

    /**
     * Displays a single info.
     * @param  string $id
     * @return mixed
     */
    protected function _viewInfo($id)
    {
        $model = $this->findModel($id);
        return $this->render($this->viewView, ['model' => $model]);
    }

    protected function getViewView()
    {
        return '@backend/views/common/view';
    }
}
