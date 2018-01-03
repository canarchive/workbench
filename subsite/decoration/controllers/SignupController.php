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

    public function actionTu8zhang()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $ip = Yii::$app->request->getIp();
        if ($ip != '60.205.115.137') {
            //return 'error ip';
        }
        $fields = ['name', 'mobile', 'city_input', 'area_input', 'position', 'note', 'message'];
        $data = [];
        foreach ($fields as $field) {
            $data[$field] = strip_tags(Yii::$app->request->get($field));
        }
        $data['note'] .= '-兔班长平台报名';

        Yii::$app->request->setBodyParams($data);

        $model = new SignupForm(['isMobile' => $this->isMobile]);
        return $model->signup();
    }
}
