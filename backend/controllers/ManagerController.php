<?php

namespace backend\controllers;

use Yii;
use backend\models\Manager;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ManagerController extends AdminController
{
    protected $modelClass = 'backend\models\Manager';
    protected $modelSearchClass = 'backend\models\searchs\Manager';
    use ControllerFullTrait;

    public function _addData()
    {
        return ['scenario' => 'create'];
    }

    public function actionEditInfo()
    {
        $model = Manager::findOne(Yii::$app->user->identity->id);
        $model->setScenario('edit-info');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'new infos was saved.'));
            }
            return $this->redirect(['edit-info']);
        }

        return $this->render('edit-info', ['model' => $model]);
    }

    public function actionEditPassword()
    {
        $model = Manager::findOne(Yii::$app->user->identity->id);
        $model->setScenario('edit-password');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //$model->setPassword($model->password, 'password');
            $model->generateAuthKey();
            $model->status = 1;
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved.'));
            }
            return $this->redirect(['edit-password']);
        }

        return $this->render('edit-password', ['model' => $model]);
    }
}
