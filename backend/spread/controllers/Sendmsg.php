<?php

namespace backend\spread\controllers;

use Yii;

class Sendmsg extends Controller
{
    protected $modelClass = 'subsite\decoration\models\Sendmsg';
    public $viewPrefix = '/sendmsg/';

    public function actionListinfo()
    {
        return $this->render($this->viewPrefix . 'listinfo');
    }

    public function actionSend()
    {
        $type = Yii::$app->request->get('type');
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $datas = [
            'type' => $type,
            'model' => $model,
        ];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render($this->viewPrefix . 'send', $datas);
    }
}
