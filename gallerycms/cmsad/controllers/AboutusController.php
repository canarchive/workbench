<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\CmsadController;
use gallerycms\cmsad\models\Guestbook;

class AboutusController extends CmsadController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang', 'kaopu', 'baojia'];

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}

    public function actionStatement()
    {
		$view = Yii::$app->request->get('view');

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render('statement', $datas);
    }

    public function actionGuestbook()
    {
        $datas = [
            'controllerId' => $this->id,
            'view' => 'guestbook',

        ];
        $model = new Guestbook();
        //if (true) {//Yii::$app->request->isPost) {
        if (Yii::$app->request->isPost) {
		    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            //$_GET['city'] = $_GET['province'] . '-' . $_GET['city'];
            //$model->load(Yii::$app->request->get(), '');
            $_POST['city'] = $_POST['province'] . '-' . $_POST['city'];
            $model->load(Yii::$app->request->post(), '');

            $return = $model->doSubmitInfo();
            return $return;
        }
		$this->getTdkInfos('aboutus-guestbook');
		return $this->render('guestbook', $datas);
    }
}
