<?php

namespace spread\decoration\controllers;

use Yii;
use spread\components\Controller;

class TestController extends Controller
{
    public function actionStatistic()
    {
        $params = require Yii::getAlias('@spread') . '/config/params-statistic.php';
        print_r($params);
    }

    public function actionXunke()
    {
        $this->enableCsrfValidation = false;
        $string = file_get_contents('php://input');

        $xml = simplexml_load_string($string);
        if (empty($xml)) {
            exit('NO');
        }
        $city = isset($xml->body->cityName) ? $xml->body->cityName : '';
        $mobile = isset($xml->body->mobile) ? $xml->body->mobile : '';
        $name = isset($xml->body->name) ? $xml->body->name : '';
        $keyword = isset($xml->body->Query) ? $xml->body->Query : '';
        $fromType = isset($xml->body->Device) ? $xml->body->Device : '';
        if (empty($mobile)) {
            exit('NO');
        }

        $data = [
            'signup_at' => time(),
            'decoration_id' => 1,
            'type' => '677',
            'signup_ip' => '',
            'signup_city' => $city,
            'channel' => 'sembd-xunke',
            'mobile' => $mobile,
            'name' => $name,
            'keyword' => $keyword,
            'client_type' => $fromType,
            'message' => '',
            'note' => '百度寻客',
            'user_id' => 0,
        ];

        $model = new \spread\decoration\models\DecorationOwner($data);
        $return = $model->xunkeOperation($data);
        return 'OK';
    }
}
