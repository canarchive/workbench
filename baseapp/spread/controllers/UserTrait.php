<?php

namespace baseapp\spread\controllers;

use Yii;

trait UserTrait
{
    public function actionListinfo()
    {
        return $this->_listinfoInfo();
    }

    public function actionListout()
    {
        return $this->_listinfoInfo('listout');
    }

    public function actionChangeMerchant($id)
    {
        $model = $this->findModel($id);
        $this->_handlerUpdate('change', $model);

        return $this->render($this->viewPrefix . 'change-merchant', [
            'model' => $model,
        ]);
    }

    public function actionAdd()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $this->_handlerUpdate('admin', $model);

        return $this->render($this->viewPrefix . 'add', [
            'model' => $model,
        ]);
    }

    public function _handlerUpdate($sort, $model)
    {
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $scope = $model->formName();
            $model->setAttributes($data[$scope], false);
            $model->notice_merchant = isset($data[$scope]['notice_merchant']) ? $data[$scope]['notice_merchant'] : '';
            $model->notice_user = isset($data[$scope]['notice_user']) ? $data[$scope]['notice_user'] : '';
            $newModel = $model->addHandle($sort);

            if ($newModel) {
                $url = $this->menuInfos['appMenus']['listinfo']['url'];
                return $this->redirect($url);
            }
        }
        return ;
    }

    public function actionUpdate($id)
    {
        $datas = $this->_userInfos($id);
        if (Yii::$app->getRequest()->method == 'POST') {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $operation = Yii::$app->request->post('operation');
            $operation = $operation == 'add' ? 'add' : 'update';
            $userModel = $datas['model'];
            return $this->_operations($userModel, $operation);
        }
        //print_r($datas);exit();

        return $this->render($this->viewPrefix . 'update', $datas);
    }

    protected function _userInfos($id)
    {
        $model = $this->findModel($id);

        $mobile = $model->mobile;
        $callbackInfos = $model->_newModel('callback')->findAll(['mobile' => $mobile]);
        $userMerchantInfos = $model->_newModel('userMerchant')->getInfos(['where' => ['mobile' => $model->mobile]]);

        $datas = [
            'model' => $model,
            'callbackInfos' => $callbackInfos,
            'userMerchantInfos' => $userMerchantInfos,
        ];
        $dataExts = $this->_userInfoExts($model);
        $datas = array_merge($datas, $dataExts);

        return $datas;
    }

    protected function _operations($userModel, $operationType)
    {
        $table = Yii::$app->request->post('table');
        $method = "_{$table}Operation";
        if (!method_exists($this, $method)) {
            return ['status' => 400, 'message' => "{$table}有误"];
        }
        $params = [];
        if ($operationType == 'update') {
            $infoId = $params['infoId'] = Yii::$app->request->post('info_id');
            $field = $params['field'] = Yii::$app->request->post('field');
            $value = $params['value'] = Yii::$app->request->post('value');
            if (empty($table) || !in_array($table, $this->tableInfos) || empty($infoId) || empty($field)) {
                return ['status' => 400, 'message' => '参数错误'];
            }
        }
        $result = $this->$method($userModel, $operationType, $params);
        return $result;
    }

    protected function _userOperation($userModel, $operationType, $params)
    {
        if ($operationType == 'update') {
            return $this->_update($userModel, $params);
        }
        return ['status' => 400, 'message' => 'user error'];
    }

    protected function _callbackOperation($userModel, $operationType, $params)
    {
        $model = $userModel->_newModel('callback', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $userStatus = ['status', 'invalid_status', 'out_status'];
        $fields = array_merge($userStatus, ['mobile', 'service_id', 'content']);
        $this->_initFields($model, $fields);
        $model->merchant_id = $userModel->merchant_id;
        $r = $model->insert(false);
        foreach ($userStatus as $uStatus) {
            $userModel->$uStatus = $model->$uStatus;
            $userModel->update(false);
        }

        $return = [
            'status' => 200,
            'message' => 'OK',
            'data' => [
                'id' => $model->id,
                'created_at' => date('Y-m-d H:i:s', $model->created_at),
                'status' => $model->getKeyName('status', $model->status),
                'invalid_status' => $model->getKeyName('invalid_status', $model->invalid_status),
                'out_status' => $model->getKeyName('out_status', $model->out_status),
                'content' => '',
            ],
        ];
        return $return;
    }

    protected function _user_merchantOperation($userModel, $operationType, $params)
    {
        $model = $userModel->_newModel('userMerchant', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['mobile', 'house_id', 'service_id', 'merchant_id', 'city_code'];
        $this->_initFields($model, $fields);
        $oldInfo = $model->find()->where(['mobile' => $model->mobile, 'merchant_id' => $model->merchant_id])->one();
        if ($oldInfo) {
            return ['status' => 400, 'message' => '已派单'];
        }

        $time = Yii::$app->params['currentTime'];
        $model->created_month = date('Ym', $time);
        $model->created_day = date('Ymd', $time);
        $model->created_week = date('W', $time);
        $model->created_weekday = date('N', $time);
        $model->user_id = $userModel->id;

        $model->insert(false);
        $userModel->sendSmsValid($model, $userModel);
        $noteData = [
            'user_merchant_id' => $model->id,
            'reply' => Yii::$app->request->post('note'),
            'reply_at' => Yii::$app->params['currentTime'],
        ];
        $guestbook = $userModel->_newModel('guestbook', true, $noteData);
        $guestbook->insert(false);
        $model->note = $noteData['reply'];
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
        if ($field == 'callback_again') {
            $value = !empty($value) ? strtotime($value) : $model->callback_again;
        }
        $info->$field = $value;
        $r =$info->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }

    protected function _userInfoExts($model)
    {
        return [];
    }
}
