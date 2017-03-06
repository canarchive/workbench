<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\Cors;
use gallerycms\components\HouseController;
use gallerycms\house\models\SignupForm;

class SignupController extends HouseController
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm();
        $model->isMobile = $this->clientIsMobile();
        $signupInfo = false;
        //if ($model->load(\Yii::$app->request->get(), '')) {
        if ($model->load(\Yii::$app->request->post(), '')) {
            $signupInfo = $model->signup();
        }

        if (!$signupInfo) {
            $errors = $model->getFirstErrors('error');
            $message = isset($errors['error']) ? $errors['error'] : '报名失败，请您重试！';
            $data = [
                'status' => $model->existOwner ? '200' : '400',
                'message' => $message,
                'quoteInfo' => $model->area_input > 0 ? $model->_getQuoteInfo($model->area_input) : [],
                //'model' => $model,
            ];
            //print_r($data);exit();
            return $data;

        }
        $signupInfo['message'] = $signupInfo['message'];
        unset($signupInfo['message']);
        //print_r($signupInfo);exit();
        return $signupInfo;
    }
}
