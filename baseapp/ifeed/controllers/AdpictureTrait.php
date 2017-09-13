<?php

namespace baseapp\ifeed\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\ControllerTraitFull;

trait AdpictureTrait
{
    public $attrParams;
    
    use ControllerTraitFull;

    public function init()
    {
        parent::init();
        $this->showSubnav = false;

        $this->attrParams = [
            'site_code' => Yii::$app->request->get('site_code', ''),
            'page' => Yii::$app->request->get('page', ''),
            'position' => Yii::$app->request->get('position', ''),
        ];
    }

    public function actionListSort()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();

        return $this->render('list-sort', ['model' => $model]);
    }

    protected function _deleteInfo($id)
    {
        $info = $this->findModel($id);
        if (in_array($info->position, ['announce', 'fivepicture', 'indexthree'])) {
            throw new ForbiddenHttpException('您不能删除这些广告');
        }

        return $this->redirect(['listinfo', 'site_code' => $info->site_code, 'position' => $info->position, 'page' => $info->page]);
    }

    protected function _addData()
    {
        if ($this->attrParams['position'] != 'slide') {
            throw new ForbiddenHttpException('您不能随意添加广告');
        }
        return $this->attrParams;
    }
}
