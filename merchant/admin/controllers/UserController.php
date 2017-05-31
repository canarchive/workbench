<?php

namespace merchant\admin\controllers;

use Yii;
use merchant\models\User;
use merchant\components\AdminController;
use backend\components\ControllerFullTrait;

class UserController extends AdminController
{
    protected $modelClass = 'merchant\models\User';
    protected $modelSearchClass = 'merchant\models\searchs\User';
    use ControllerFullTrait;

    public function _addData()
    {
        return ['scenario' => 'create'];
    }


    protected function _getScenario()
    {
        return 'update';
    }

    public function actionEditInfo()
    {
        $model = User::findOne(Yii::$app->user->identity->id);
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
        $model = User::findOne(Yii::$app->user->identity->id);
        $model->setScenario('edit-password');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //$model->setPassword($model->password, 'password');
            $model->generateAuthKey();
            $model->status = 1;
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved.'));
            }

			Yii::$app->user->logout();

            return $this->redirect('/signin.html');
        }

        return $this->render('edit-password', ['model' => $model]);
    }
}
