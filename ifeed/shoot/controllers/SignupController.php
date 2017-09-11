<?php

namespace ifeed\shoot\controllers;

use Yii;
use ifeed\shoot\models\SignupForm;

class SignupController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm(['isMobile' => $this->isMobile]);
        return $model->signup();
    }
}
