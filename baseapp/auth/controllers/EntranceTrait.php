<?php
namespace baseapp\auth\controllers;

use Yii;

trait EntranceTrait
{
	public $returnJson;

    public function actionSignup()
    {   
        $result = $this->_signMethod('signup');
        if ($result['status'] == 200 && isset($result['homeUrl'])) {
            return Yii::$app->response->redirect($result['homeUrl'])->send();
        }
        return $this->render('signup', $result);
    }

    public function actionSigninQr()
    {
        $result = $this->_signMethod('signin');
        if ($result['status'] == 200 && isset($result['homeUrl'])) {
            return Yii::$app->response->redirect($result['homeUrl'])->send();
        }

        return $this->render('signin-qr', $result);
    }

    public function actionSignin()
    {
        $result = $this->_signMethod('signin');
        if ($result['status'] == 200 && isset($result['homeUrl'])) {
            return Yii::$app->response->redirect($result['homeUrl'])->send();
        }
        return $this->render('signin', $result);
    }

	public function actionSigninApi()
	{
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $this->_signMethod('signin');
	}

    protected function _signMethod($action)
    {
        if (!Yii::$app->user->isGuest) {
            return ['status' => 200, 'message' => 'return', 'homeUrl' => $this->homeUrl];
        }
            
        $model = $this->getModel($action);
        $result = $info = []; 
        if (Yii::$app->request->isPost) {
            $result = $model->$action();
            if ($result['status'] == 200) {
                $result['homeUrl'] = $this->homeUrl;
                return $result;
            }
        }
        $message = isset($result['message']) ? $result['message'] : '';
        $info = isset($result['info']) ? $result['info'] : $info;

        return ['status' => 400, 'message' => $message, 'info' => $info, 'model' => $model];
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionFindpwd()
    {
		$step = intval(Yii::$app->request->get('step', 1));
		$step = $step > 4 ? 1 : $step;
        $model = $this->getModel('passwordReset');

		$data = [];
		$message = '';
		switch ($step) {
		case 2:
			$data = $model->sendInfos('get');
			//print_r($data);
			//$data = ['type' => 'email', 'username' => 'iamwangcan@163.com'];
			//$data = ['type' => 'mobile', 'username' => '13811974106'];
			if (empty($data)) {
				$step = 1;
				$message = '您还没有输入您的账户信息';
			} else {
			    $view = 'findpwd_2_' . ($data['type'] == 'email' ? 'email' : 'mobile');
			}
			break;
		case 3:
			$result = $this->_findStep3();
			if ($result['status'] != 200) {
				$step = 1;
				$message = $result['message'];
			} else {
				$data = $result['data'];
			}
			break;
		case 4:
			$data = $this->_findStep4();
		}
		$view = $step == 2 ? $view : "findpwd_{$step}";

        return $this->render($view, [
			'step' => $step,
			'message' => $message,
			'data' => $data,
            'model' => $model,
        ]);
    }

	protected function _findStep3()
	{
		$type = \Yii::$app->request->get('type');
        $model = new ResetPasswordForm();

		if (!in_array($type, ['email', 'mobile'])) {
			return false;
		}

		if ($type == 'email') {
			$token = \Yii::$app->request->get('token');
			$result = $model->checkToken($token);
			if ($result['status'] == 200) {
			    $result['data'] = ['type' => $type, 'code' => $token];
			}

			return $result;
		}

		$code = \Yii::$app->request->get('code');
		return $model->checkCode($code);
	}

	protected function _findStep4()
	{
        $model = new ResetPasswordForm();
		$return = $model->resetPassword();
		return $return;
    }

    protected function getHomeUrl()
    {
        $redirectUrl = Yii::$app->request->get('redirect_url', '/');
        return $redirectUrl;
    }
}
