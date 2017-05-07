<?php

namespace backend\subsite\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\AdminController;

class User extends AdminController
{
    //public $viewPrefix = '/user/';
    public $isService;
    public $serviceInfos;

    use UserTrait;

    public function beforeAction($action)
    {
        $this->initCustomService();
        return parent::beforeAction($action);
    }

    public function actionListinfo()
    {
		$log = date('Y-m-d H:i:s') . '--' . Yii::$app->params['managerInfo']['username'] . '--' . Yii::$app->request->getIp() . "\n";
		file_put_contents('/tmp/log.txt', $log, FILE_APPEND);
        if ($this->isService) {
            $_GET['service_id'] = array_keys($this->serviceInfos);
        }
        return $this->_listinfoInfo();
    }

    public function actionChangeMerchant($id)
    {
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $scope = $model->formName();
            $model->setAttributes($data[$scope], false);
            $model->notice_merchant = $data[$scope]['notice_merchant'];
            $model->notice_user = $data[$scope]['notice_user'];
            $newModel = $model->addHandle('change');

            if ($newModel) {
                return $this->redirect(['update', 'id' => $newModel->id]);
            }
        }

        return $this->render('change-merchant', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $scope = $model->formName();
            $model->setAttributes($data[$scope], false);
            $model->notice_merchant = $data[$scope]['notice_merchant'];
            $model->notice_user = $data[$scope]['notice_user'];
            $newModel = $model->addHandle();

            if ($newModel) {
                return $this->redirect(['update', 'id' => $newModel->id]);
            }
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $data = $this->_userInfos($id, 'activity-user');
        if ($this->isAjax) {
            return $data;
        }
        //print_r($data);exit();

        return $this->render('update', $data);
    }

    protected function initCustomService()
    {
        $managerInfo = Yii::$app->params['managerInfo'];
        if ($managerInfo['roles'] == '客服') {
            $modelClass = $this->modelClass;
            $model = new $modelClass();
            $this->isService = true;
            $this->serviceInfos = $model->_newModel('service')->find()->where(['manager_id' => $managerInfo['id']])->indexBy('id')->all();
			$this->serviceInfos = empty($this->serviceInfos) ? ['-1'] : $this->serviceInfos;
        }
    }

    protected function _checkRecordPriv($model)
    {
        if ($this->isService && (empty($model->service_id) || !in_array($model->service_id, array_keys($this->serviceInfos)))) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
        }
    }
}
