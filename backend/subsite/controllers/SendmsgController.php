<?php

namespace backend\subsite\controllers;

use Yii;
use subsite\models\Sendmsg;

class SendmsgController extends Controller
{
    public function actionSend()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new Sendmsg();
        $sort = Yii::$app->request->get('sort');
        $id = Yii::$app->request->get('id');
        $sorts = ['dispatch', 'merchant'];
        if (empty($id) || !in_array($sort, $sorts)) {
            return ['status' => 400, 'message' => '操作有误'];
        }

        $method = "{$sort}Send";
        $data = $model->$method($id);
        return $data;
    }
}
