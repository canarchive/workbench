<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\decoration\models\SignupForm;

class SignupController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm(['isMobile' => $this->isMobile]);
        return $model->signup();
    }
}
