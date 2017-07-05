<?php

namespace backend\subsite\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitView;

class Dispatch extends AdminController
{
    public $isAjax;
    use ControllerTraitView;

    public function actionUpdate($id)
    {
        $data = $this->_userInfos($id, 'activity-user');
        if ($this->isAjax) {
            return $data;
        }
        //print_r($data);exit();

        return $this->render($this->viewPrefix . 'update', $data);
    }

    protected function _userInfos($id)
    {
        if (Yii::$app->getRequest()->method == 'POST') {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $this->isAjax = true;
            $operation = Yii::$app->request->post('operation');
            return $operation == 'add' ? $this->_add() : $this->_update();
        }

        $model = $this->findModel($id);
        $mobile = $model->mobile;
        $userMerchantInfos = $model->_newModel('userMerchant')->find()->where(['mobile' => $mobile])->indexBy('id')->all();
        $guestbookInfos = $model->_newModel('guestbook')->find()->where(['user_merchant_id' => array_keys($userMerchantInfos)])->orderBy('user_merchant_id DESC, created_at DESC, reply_at DESC')->all();
        $callbackInfos = $model->_newModel('dispatchCallback')->find()->where(['mobile' => $mobile])->orderBy('created_at DESC')->all();

        $data = [
            'model' => $model,
            'userMerchantInfos' => $userMerchantInfos,
            'guestbookInfos' => $guestbookInfos,
            'callbackInfos' => $callbackInfos,
        ];

        return $data;
    }

    protected function _add()
    {
        $modelClass = $this->modelClass;
        $modelBase = new $modelClass();
        $tables = ['dispatch_callback', 'guestbook'];
        $table = Yii::$app->request->post('table');

        if ($table == 'dispatch_callback') {
            $fields = ['mobile', 'service_id', 'content'];
            $model = $modelBase->_newModel('dispatchCallback', true);
        } elseif ($table == 'guestbook') {
            $fields = ['user_merchant_id', 'reply'];
            $model = $modelBase->_newModel('guestbook', true);
            $model->reply_at = Yii::$app->params['currentTime'];
        } else {
            return ['status' => 400, 'message' => '参数错误'];
        }

        foreach ($fields as $field) {
            $model->$field = Yii::$app->request->post($field);
        }
        $model->insert(false);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'id' => $model->id,
            'created_at' => date('Y-m-d H:i:s', $model->created_at),
            //'content' => $content,
        ];
        if ($table == 'guestbook') {
            $return['reply_at'] = date('Y-m-d H:i:s', $model->reply_at);
        }

        return $return;
    }

    protected function _update()
    {
        $modelClass = $this->modelClass;
        $modelBase = new $modelClass();
        $tables = ['dispatch_callback', 'guestbook', 'user_merchant'];
        $table = Yii::$app->request->post('table');
        $infoId = Yii::$app->request->post('info_id');
        $field = Yii::$app->request->post('field');
        $value = Yii::$app->request->post('value');
        if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
            return ['status' => 400, 'message' => '参数错误'];
        }

        switch ($table) {
        case 'user_merchant':
            $model = $modelBase->_newModel('userMerchant')->findOne($infoId);
            break;
        case 'dispatch_callback':
            $model = $modelBase->_newModel('dispatchCallback')->findOne($infoId);
            break;
        case 'guestbook':
            $model = $modelBase->_newModel('guestbook')->findOne($infoId);
            $model->reply_at = Yii::$app->params['currentTime'];
            break;
        }
        $model->$field = $value;
        $model->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }
}
