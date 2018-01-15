<?php

namespace backend\gallerycms\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class Category extends AdminController
{
    public $viewPrefix = '/category/';
    use ControllerTraitFull;

    public function actionListinfo()
    {
        $modelClass = $this->modelClass;
		$model = new $modelClass();
		$infos = $model->getFormatedInfos();

        return $this->render($this->viewPrefix . 'listinfo', [
			'model' => $model,
            'infos' => $infos,
        ]);
    }
}
