<?php

namespace backend\subsite\controllers;

use Yii;

trait UserTrait
{
    public $isAjax;

    protected function _userInfos($id, $type)
    {
        $model = $this->findModel($id);
        if (Yii::$app->getRequest()->method == 'POST') {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $this->isAjax = true;
            $operation = Yii::$app->request->post('operation');
            return $operation == 'add' ? $this->_add($model) : $this->_update();
        }

        //print_r($model);exit();
        $mobile = $model->mobile;
        $callbackInfos = $model->_newModel('callback')->findAll(['mobile' => $mobile]);
        $houseInfos = $model->_newModel('house')->findAll(['mobile' => $model->mobile]);
        $userMerchantInfos = $model->_newModel('userMerchant')->getInfos(['mobile' => $model->mobile]);

        $data = [
            'type' => $type,
            'model' => $model,
            'callbackInfos' => $callbackInfos,
            'houseInfos' => $houseInfos,
            'userMerchantInfos' => $userMerchantInfos,
        ];

        return $data;
    }

    protected function _add($userInfo)
    {
        $modelClass = $this->modelClass;
        $modelBase = new $modelClass();
        //$tables = ['user_house', 'callback'];
        $tables = ['callback'];
        $table = Yii::$app->request->post('table');

        if ($table == 'house') {
            $fields = ['mobile', 'service_id', 'region', 'address', 'house_area', 'house_sort', 'house_type', 'renovation_budget'];
            $model = $modelBase->_newModel('house', true);
        } else if ($table == 'callback') {
            //$fields = ['mobile', 'content', 'note'];
            $fields = ['mobile', 'service_id', 'content'];
            $model = $modelBase->_newModel('callback', true);
        } else if ($table == 'user_merchant') {
            $fields = ['mobile', 'house_id', 'service_id', 'merchant_id', 'city_code'];
            $model = $modelBase->_newModel('userMerchant', true);
        } else {
            return ['status' => 400, 'message' => '参数错误'];
        }

        foreach ($fields as $field) {
            $model->$field = Yii::$app->request->post($field);
        }

        if ($table == 'user_merchant') {
            $oldInfo = $model->find()->where(['mobile' => $model->mobile, 'merchant_id' => $model->merchant_id])->one();
            if ($oldInfo) {
                return ['status' => 400, 'message' => '已派单'];
            }
            $model->insert(false);
            $modelBase->sendSmsValid($model, $userInfo);
        } else {
            $model->insert(false);
        }

        $content = '';
        if ($table === 'house') {
            $content = $this->renderPartial('_user_house', ['model' => $model]);
        } else if ($table == 'user_merchant') {
            $noteData = [
                'user_merchant_id' => $model->id,
                'reply' => Yii::$app->request->post('note'),
                'reply_at' => Yii::$app->params['currentTime'],
            ];
            $guestbook = $modelBase->_newModel('guestbook', true, $noteData);
            $guestbook->insert(false);
            $model->note = $noteData['reply'];
            $content = $this->renderPartial('_user_merchant_info', ['model' => $model]);
        }

        $return = [
            'status' => 200,
            'message' => 'OK',
            'id' => $model->id,
            'created_at' => date('Y-m-m H:i:s', $model->created_at),
            'content' => $content,
        ];

        return $return;
    }

    protected function _update()
    {
        $tables = ['user', 'house', 'callback', 'user_merchant'];
        $table = Yii::$app->request->post('table');
        $infoId = Yii::$app->request->post('info_id');
        $field = Yii::$app->request->post('field');
        $value = Yii::$app->request->post('value');
        if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
            return ['status' => 400, 'message' => '参数错误'];
        }

        $modelClass = $this->modelClass;
        $modelBase = new $modelClass();
        switch ($table) {
        case 'user':
            $model = $this->findModel($infoId);
            if ($field == 'callback_again') {
                $value = !empty($value) ? strtotime($value) : $model->callback_again;
            }
            break;
        case 'house':
            $model = $modelBase->_newModel('house')->findOne($infoId);
            break;
        case 'user_merchant':
            $model = $modelBase->_newModel('userMerchant')->findOne($infoId);
            break;
        case 'callback':
            $model = $modelBase->_newModel('callback')->findOne($infoId);
            break;
        }
        $model->$field = $value;
        $r =$model->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }
}
