<?php

namespace gallerycms\sinfo\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\SinfoController;
use gallerycms\sinfo\models\Guestbook;

class AboutusController extends SinfoController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('aboutus-' . $view);
        $view = in_array($view, ['aboutus']) ? $view : 'statement';
		return $this->render($view, $datas);
	}

    public function actionRecord()
    {
        if (!Yii::$app->request->isPost) {
            return ['status' => 400, 'message' => '操作异常，请您重新提交'];
        }

        $model = new Guestbook();
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        //$_GET['city'] = $_GET['province'] . '-' . $_GET['city'];
        //$model->load(Yii::$app->request->get(), '');
        $_POST['city'] = $_POST['province'] . '-' . $_POST['city'];
        $model->load(Yii::$app->request->post(), '');

        $return = $model->doSubmitInfo();
        return $return;
    }
}
