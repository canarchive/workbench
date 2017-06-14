<?php
namespace baseapp\auth\controllers;

use Yii;
use yii\web\BadRequestHttpException;

trait ApiTrait
{
    public function init()
    {
        parent::init();
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    }

    public function actionValidation()
    {
        $field = Yii::$app->request->get('field');
        $value = Yii::$app->request->get('value');
        $type = Yii::$app->request->get('type', '');

        if (empty($field) || empty($value)) {
            return ['status' => 400, 'message' => '参数错误'];
        }
        $model = $this->getModel();
        $data = ['field' => $field, 'type' => $type, 'value' => $value];
        return $model->validateCommon($data);
    }
}
