<?php

namespace gallerycms\merchant\controllers;

use gallerycms\components\MerchantController;

class SiteController extends MerchantController
{

	public function actionIndex()
	{
        $datas = $this->_initMerchant();
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('merchant-index', $dataTdk);

		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $datas = $this->_initMerchant('merchant-show');
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('merchant-show', $dataTdk);

		return $this->render('show', $datas);
	}

	public function actionShowWorking()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Working();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

        if ($info['city_code'] != Yii::$app->params['currentCompany']['code']) {
            $url = Url::to(['/merchant/decoration-company/show-working', 'id' => $info['id'], 'city_code' => $info['city_code']]);
            return $this->redirect($url, 301)->send();
        }

		$datas = [
			'info' => $info,
		];

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{MERCHANTNAME}}' => $info['merchantInfo']['name']];
		$this->getTdkInfos('decoration-company-show-working', $dataTdk);
		return $this->render('show-working', $datas);
	}
}
