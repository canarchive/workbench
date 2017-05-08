<?php

namespace subsite\decoration\controllers;

use Yii;
use yii\helpers\Url;
use subsite\components\Controller;
use subsite\decoration\models\SignupForm;
use subsite\decoration\models\Statistic;
use subsite\decoration\models\User;

class SiteController extends Controller
{
    public function actionStatistic()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $this->_statistic('\subsite\decoration\models\Visit');
        exit();
        $params = require Yii::getAlias('@subsite') . '/config/params-statistic.php';
        print_r($params);
    }

    public function actionApikl()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $code = Yii::$app->request->get('code');
        $lastTime = Yii::$app->request->get('last-time', 0);
        $ip = Yii::$app->request->getIp();
        //echo $ip;exit();
        $apiDatas = Yii::$app->params['apiDatas'];
        $apiData = isset($apiDatas[$code]) ? $apiDatas[$code] : false;
        if (empty($apiData)) {
            return ['status' => '400', 'msg' => 'error code'];
        }
        if (!in_array($ip, $apiData['ip'])) {
            return ['status' => '400', 'msg' => 'error ip'];
        }

        $model = new User();
        $where = [
            'and',
            "merchant_id = {$apiData['merchant_id']}",
            "created_at > {$lastTime}",
        ];
        $datas = $model->find()->where($where)->orderBy(['created_at' => SORT_ASC])->limit(100)->all();
        $infos = [];
        $fields = ['signup_at', 'channel', 'name', 'mobile', 'city_input', 'area_input', 'keyword', 'signup_city', 'note', 'signup_ip'];
        foreach ($datas as $data) {
            $info = [];
            foreach ($fields as $field) {
                $info[$field] = $data[$field];
            }
            $infos[] = $info;
        }
        return ['status' => 200, 'datas' => $infos];
    }
}
