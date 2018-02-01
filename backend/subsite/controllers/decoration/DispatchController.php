<?php

namespace backend\subsite\controllers\decoration;

use Yii;
use backend\components\ControllerTraitView;

class DispatchController extends Controller
{
    use ControllerTraitView;
    protected $modelClass = 'subsite\decoration\models\Dispatch';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Dispatch';
    public $isAjax;

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
        $model = $this->findModel($id);
        $mobile = $model->mobile;
        $modelUser = $model->_newModel('user')->findOne($model->user_id);
        if (Yii::$app->getRequest()->method == 'POST') {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $this->isAjax = true;
            $operation = Yii::$app->request->post('operation');
            return $operation == 'add' ? $this->_add($modelUser) : $this->_update();
        }

        $userMerchantInfos = $model->_newModel('userMerchant')->find()->where(['mobile' => $mobile])->indexBy('id')->all();
        $guestbookInfos = $model->_newModel('guestbook')->find()->where(['user_merchant_id' => array_keys($userMerchantInfos)])->orderBy('user_merchant_id DESC, created_at DESC, reply_at DESC')->all();
        $callbackInfos = $model->_newModel('callback')->find()->where(['mobile' => $mobile])->orderBy('created_at DESC')->all();

        $data = [
            'model' => $model,
            'modelUser' => $modelUser,
            'userMerchantInfos' => $userMerchantInfos,
            'guestbookInfos' => $guestbookInfos,
            'callbackInfos' => $callbackInfos,
        ];

        return $data;
    }

    protected function _add($modelUser)
    {
        $modelClass = $this->modelClass;
        $modelBase = new $modelClass();
        $tables = ['callback', 'guestbook'];
        $table = Yii::$app->request->post('table');

        if ($table == 'callback') {
            return $this->_callbackOperation($modelUser, 'add', []);
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
        if ($table == 'guestbook') {
            $umModel = $modelBase->_newModel('userMerchant')->findOne($model->user_merchant_id);
            $model->service_id = $umModel->service_id;
            $model->mobile = $umModel->mobile;
            $model->merchant_id = $umModel->merchant_id;
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
        $tables = ['callback', 'guestbook', 'user_merchant'];
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
        case 'callback':
            $model = $modelBase->_newModel('callback')->findOne($infoId);
            break;
        case 'guestbook':
            $model = $modelBase->_newModel('guestbook')->findOne($infoId);
            $model->reply_at = Yii::$app->params['currentTime'];
            break;
        }
        if ($field == 'result_at') {
            $value = !empty($value) ? strtotime($value) : $model->result_at;
        }
        $model->$field = $value;
        $model->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }
}
