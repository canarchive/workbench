<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\ControllerTraitFull;

class MerchantPondController extends Controller
{
    use ControllerTraitFull;
    public $viewPrefix = '@backend/merchant/views/merchant/';
    protected $modelClass = 'merchant\models\MerchantPond';
    protected $modelSearchClass = 'merchant\models\searchs\MerchantPond';

    public function init()
    {
        parent::init();
    }

    public function actionImport()
    {
    	return $this->_importInfo();
    }

    public function actionCallback($merchant_id)
    {
        $datas = $this->_datas($merchant_id);
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

    protected function _datas($merchantId)
    {
        $model = $this->findModel($merchantId);

        $callbackInfos = $this->_getModel('callback')->getInfos(['where' => ['merchant_id' => $merchantId]]);
        $interviewInfos = $this->_getModel('interview')->getInfos(['where' => ['merchant_id' => $merchantId]]);
        $contactInfos = $this->_getModel('contact')->getInfos(['where' => ['merchant_id' => $merchantId]]);

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
        $table = lcfirst(Yii::$app->request->post('table'));
        $method = "_{$table}Operation";
        if (!method_exists($this, $method)) {
            return ['status' => 400, 'message' => "{$table}有误"];
        }
        $params = [];
        $tables = ['callback', 'merchantPond', 'contact', 'interview'];
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

    protected function _merchantPondOperation($merchantModel, $operationType, $params)
    {
        if ($operationType == 'update') {
            return $this->_update($merchantModel, $params);
        }
        return ['status' => 400, 'message' => 'user error'];
    }

    protected function _contactOperation($merchantModel, $operationType, $params)
    {
        $model = $this->_getModel('contact');
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['merchant_id', 'name', 'mobile', 'title', 'description', 'orderlist'];
        $this->_initFields($model, $fields);
        $model->orderlist = (int) $model->orderlist;
        $r = $model->insert(false);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'content' => $this->renderForAjax($model),
        ];
        return $return;
    }

    protected function _callbackOperation($merchantModel, $operationType, $params)
    {
        $model = $this->_getModel('callback');
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['merchant_id', 'saleman_id', 'content', 'status'];
        $this->_initFields($model, $fields);
        $r = $model->insert(false);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'content' => $this->renderForAjax($model),
        ];
        return $return;
    }

    protected function _interviewOperation($merchantModel, $operationType, $params)
    {
        $model = $merchantModel->_newModel('interview', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['merchant_id', 'saleman_id', 'saleman_interview', 'contact_id', 'interview_at', 'note_pre'];
        $this->_initFields($model, $fields);
        $model->interview_at = strtotime($model->interview_at);

        $model->insert(false);
        $return = [
            'status' => 200,
            'message' => 'OK',
            'content' => $this->renderForAjax($model),
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
