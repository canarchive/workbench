<?php
namespace merchant\decoration\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use merchant\components\AdminController;

class EntranceController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignin()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
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
