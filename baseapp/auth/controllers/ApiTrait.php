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
        $field = Yii::$app->request->post('field');
        $value = Yii::$app->request->post('value');
        $type = Yii::$app->request->post('type', '');

        if (empty($field) || empty($value)) {
            return ['status' => 400, 'message' => '参数错误'];
        }
        $model = $this->getModel();
        $data = ['field' => $field, 'type' => $type, 'value' => $value];
        return $model->validateCommon($data);
    }

	public function actionGenerateCode()
	{
		$fields = ['mobile', 'captcha', 'type'];
		$data = [];
		foreach ($fields as $field) {
			$data[$field] = trim(Yii::$app->request->post($field));
		}
        $model = $this->getModel();
		$result = $model->generateCode($data);
		var_dump($result);
	}
}
