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
		$data = $this->_formatInput(['field', 'value', 'type']);

        if (empty($data['field']) || empty($data['value'])) {
            return ['status' => 400, 'message' => '参数错误'];
        }
        $model = $this->getModel();
        return $model->validateCommon($data);
    }

	public function actionGenerateCode()
	{
		$data = $this->_formatInput(['mobile', 'captcha', 'type']);

        $model = $this->getModel();
		$result = $model->generateCode($data);
		return $result;
	}

	public function actionCheckCode()
	{
		$data = $this->_formatInput(['mobile', 'code', 'type']);

        $model = $this->getModel();
		$result = $model->checkMobileCode($data);
		return $result;
	}

	protected function _formatInput($fields)
	{
		$data = [];
		foreach ($fields as $field) {
			$data[$field] = trim(strip_tags(Yii::$app->request->post($field)));
			//$data[$field] = trim(strip_tags(Yii::$app->request->get($field)));
		}
		return $data;
	}
}
