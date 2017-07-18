<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class NewMerchantController extends AdminController
{
    use ControllerTraitFull;
    public $viewPrefix = '@backend/merchant/views/merchant/';
    protected $modelClass = 'merchant\models\NewMerchant';
    protected $modelSearchClass = 'merchant\models\searchs\NewMerchant';

    public function actionCallback($id)
    {
        $datas = $this->_datas($id);
        if (Yii::$app->getRequest()->method == 'POST') {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $operation = Yii::$app->request->post('operation');
            $operation = $operation == 'add' ? 'add' : 'update';
            $merchantModel = $datas['model'];
            return $this->_operations($merchantModel, $operation);
        }
        //print_r($datas);exit();

        return $this->render($this->viewPrefix . 'callback', $datas);
    }

    protected function _datas($id)
    {
        $model = $this->findModel($id);

        $merchantId = $model->id;
        $callbackInfos = $this->_getModel('newCallback')->findAll(['merchant_id' => $merchantId]);
        $interviewInfos = $this->_getModel('newInterview')->findAll(['merchant_id' => $merchantId]);
        $contactInfos = $this->_getModel('newContact')->findAll(['merchant_id' => $merchantId]);

        $datas = [
            'model' => $model,
            'callbackInfos' => $callbackInfos,
            'interviewInfos' => $interviewInfos,
            'contactInfos' => $contactInfos,
        ];

        return $datas;
    }

    protected function _operations($merchantModel, $operationType)
    {
        $table = Yii::$app->request->post('table');
        $method = "_{$table}Operation";
        if (!method_exists($this, $method)) {
            return ['status' => 400, 'message' => "{$table}有误"];
        }
        $params = [];
        $tables = ['callback', 'merchant', 'interview'];
        if (!in_array($table, $tables)) {
            return ['status' => 400, 'message' => "{$table}有误"];
        }
        if ($operationType == 'update') {
            $infoId = $params['infoId'] = Yii::$app->request->post('info_id');
            $field = $params['field'] = Yii::$app->request->post('field');
            $value = $params['value'] = Yii::$app->request->post('value');
            if (empty($infoId) || empty($field)) {
                return ['status' => 400, 'message' => '参数错误'];
            }
        }
        $result = $this->$method($merchantModel, $operationType, $params);
        return $result;
    }

    protected function _merchantOperation($merchantModel, $operationType, $params)
    {
        if ($operationType == 'update') {
            return $this->_update($merchantModel, $params);
        }
        return ['status' => 400, 'message' => 'user error'];
    }

    protected function _callbackOperation($merchantModel, $operationType, $params)
    {
        $model = $this->_getModel('newCallback');
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['merchant_id', 'saleman_id', 'content', 'status'];
        $this->_initFields($model, $fields);
        $r = $model->insert(false);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'id' => $model->id,
            'created_at' => date('Y-m-m H:i:s', $model->created_at),
            'content' => '',
        ];
        return $return;
    }

    protected function _interviewOperation($merchantModel, $operationType, $params)
    {
        $model = $merchantModel->_newModel('userMerchant', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['merchant_id', 'saleman_id', 'contact_id', 'interview_at', 'note_pre', 'status'];
        $this->_initFields($model, $fields);

        $model->insert(false);
        $content = $this->renderPartial($this->viewPrefix . '_user_merchant_info', ['model' => $model]);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'id' => $model->id,
            'created_at' => date('Y-m-m H:i:s', $model->created_at),
            'content' => $content,
        ];

        return $return;
    }

    protected function _initFields($model, $fields)
    {
        foreach ($fields as $field) {
            $model->$field = Yii::$app->request->post($field);
        }
        return $model;
    }

    protected function _update($model, $params)
    {
        $info = $model->findOne($params['infoId']);
        if (empty($info)) {
            return ['status' => 400, 'message' => '信息不存在'];
        }
        $field = $params['field'];
        $value = $params['value'];
        if ($field == 'callback_next') {
            $value = !empty($value) ? strtotime($value) : $model->callback_again;
        }
        $info->$field = $value;
        $r =$info->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }

    protected function _getModel($class)
    {
        $className = ucfirst($class);
        $className = "merchant\models\\$className";
        return new $className();
    }
}
