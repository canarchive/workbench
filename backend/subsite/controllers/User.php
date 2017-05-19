<?php

namespace backend\subsite\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\AdminController;

class User extends AdminController
{
    use UserTrait;

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }

    public function actionListinfo()
    {
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
}
