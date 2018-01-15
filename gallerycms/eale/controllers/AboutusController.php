<?php

namespace gallerycms\eale\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\EaleController;
use gallerycms\eale\models\Customer;
use gallerycms\eale\models\Star;
use gallerycms\eale\models\Guestbook;

class AboutusController extends EaleController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang', 'kaopu', 'baojia'];

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
        if ($view == 'customer') {
            $modelCustomer = new Customer();
            $datas['infos'] = $modelCustomer->getInfos();
        }
        if ($view == 'star') {
            $modelStar = new Star();
            $datas['infos'] = $modelStar->getInfos();
        }
        $this->currentPage = 'aboutus-' . $view;
		
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render('/aboutus/' . $view, $datas);
	}

    public function actionGuestbook()
    {
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (Yii::$app->request->isPost) {
        //if (Yii::$app->request->isGet) {
            $fields = [
                'qq', 'site_code', 'page', 'name', 'mobile', 'address', 'message', 'callback', 'email',
            ];
            $datas = [];
            foreach ($fields as $field) {
                $datas[$field] = strip_tags(Yii::$app->request->post($field, ''));
            }
            $datas['callback'] = intval($datas['callback']);
            $datas['created_at'] = Yii::$app->params['currentTime'];
            $model = new Guestbook($datas);
            $r = $model->insert(false);
            if ($r) {
                return ['status' => 200, 'message' => 'OK'];
            }
        }
        return ['status' => 400, 'message' => '信息有误请，重新填写'];
    }
}
