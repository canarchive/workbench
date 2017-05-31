<?php
namespace merchant\decoration\controllers;

use Yii;

trait TraitEntrance
{

    public function actionSignin()
    {
		//$this->layout = Yii::getAlias('@backend/views/base/main-base');
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SigninForm();
        if ($model->load(Yii::$app->request->post()) && $model->signin()) {
            $identity = Yii::$app->user->getIdentity();
            $identity->last_at = Yii::$app->params['currentTime'];
            $identity->last_ip = Yii::$app->request->getIp();
            $identity->login_num = $identity->login_num + 1;
            $identity->update(false);
            return $this->goBack();
        } else {
            return $this->render('signin', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
