<?php

namespace backend\gallerycms\controllers\house;

use Yii;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class AskSortController extends AdminController
{
    public $modelClass = 'gallerycms\house\models\AskSort';
    public $modelSearchClass = 'gallerycms\house\models\searchs\AskSort';
    use ControllerFullTrait;

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

    public function _addData()
    {
        return [
            'parent_code' => Yii::$app->request->get('parent_code'),
        ];
    }
}
