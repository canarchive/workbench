<?php

namespace merchant\admin\controllers;

use Yii;
use merchant\models\User;
use backend\merchant\controllers\UserController as UserControllerBase;
use backend\components\ControllerFullTrait;

class UserController extends UserControllerBase
{
    use BaseTrait;

	public function actionAdd()
	{
        $managerInfo = Yii::$app->params['managerInfo'];
        if ($managerInfo['role'] == 'saleman-chief') {
            $this->forceSkipPriv = true;
        }

		return parent::actionAdd();
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

        return $this->render($this->viewPrefix . 'edit-info', ['model' => $model]);
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

        return $this->render($this->viewPrefix . 'edit-password', ['model' => $model]);
    }
}
