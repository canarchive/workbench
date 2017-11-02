<?php

namespace backend\subsite\controllers\decoration;

use Yii;
use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/subsite/views/{$this->id}/";
    }

    protected function _initFields($model, $fields)
    {
        foreach ($fields as $field) {
            $model->$field = Yii::$app->request->post($field);
        }
        return $model;
    }

    protected function _callbackOperation($userModel, $operationType, $params)
    {
        $model = $userModel->_newModel('callback', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $userStatus = ['status', 'invalid_status', 'out_status', 'follow_status'];
        $fields = array_merge($userStatus, ['mobile', 'service_id', 'signed_merchant', 'content']);
        $this->_initFields($model, $fields);
        $model->merchant_id = $userModel->merchant_id;
        $r = $model->insert(false);
        foreach ($userStatus as $uStatus) {
            $userModel->$uStatus = $model->$uStatus;
        }
        $userModel->signed_merchant = $model->signed_merchant;
        $userModel->update(false, array_merge($userStatus, ['signed_merchant']));

        $return = [
            'status' => 200,
            'message' => 'OK',
            'data' => [
                'id' => $model->id,
                'service_id' => $model->getPointName('service', $model->service_id),
                'created_at' => date('Y-m-d H:i:s', $model->created_at),
                'status' => $model->getKeyName('status', $model->status),
                'invalid_status' => $model->getKeyName('invalid_status', $model->invalid_status),
                'out_status' => $model->getKeyName('out_status', $model->out_status),
                'follow_status' => $model->getKeyName('follow_status', $model->follow_status),
                'content' => '',
            ],
        ];
        return $return;
    }
}
