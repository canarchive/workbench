<?php

namespace subsite\decoration\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\Cors;
use subsite\decoration\models\SignupForm;

class SignupController extends Controller
{
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [];
        return ArrayHelper::merge([
            [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => [\Yii::getAlias('@gallerycmsurl')],
                    'Access-Control-Request-Method' => ['GET', 'HEAD', 'POST', 'OPTIONS'],
                ],
            ],
        ], parent::behaviors());
    }    

    public function beforeAction($action)
    {
        //var_dump($action);exit();
        //if (in_array($action->id, ['cms'])) {
            $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
            header("Access-Control-Allow-Credentials: true");
            header("Access-Control-Allow-Origin: {$origin}");
            $this->enableCsrfValidation = false;
        //}
        return parent::beforeAction($action);
    }  

    public function actionIndex()
    {
        return $this->_signup();
    }

    public function actionCms()
    {
        return $this->_signup();
    }

    protected function _signup()
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

    protected function _returnJson()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
        //$callback = \Yii::$app->request->get('callback');
        //return ['data' => $data, 'callback' => $callback];
        //return ['data' => $signupInfo, 'callback' => $callback];
    }
}
