<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;
use gallerycms\house\models\Guestbook;

class AboutusController extends HouseController
{
    public function init()
    {
        parent::init();
        $this->metaLocation = '';
		header('location: http://www.weinaya.com');
    }

	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = 'main-about';
        }
		
        $navs = [
            'desc' => '公司简介',
            'culture' => '企业文化',
            'statement' => '法律声明',
            'guestbook' => '意见反馈',
            'friendlink' => '友情链接',
            'contactus' => '联系我们',
            'question' => '常见问题',
        ];
        $this->pagePosition = $view;
        $this->pagePositionName = $navs[$view];

		$datas = [
            'navs' => $navs,
			//'ownerInfos' => $this->_getOwnerInfos(),
			'view' => $view,
			'communityInfo' => [],
		];

		$this->pcMappingUrl = Yii::getAlias('@gallerycmsurl') . '/desc.html';
		$this->mobileMappingUrl = Yii::getAlias('@m.gallerycmsurl') . '/desc.html';
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}

    public function actionRecord()
    {
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isPost) {
            //return ['status' => 400, 'message' => '操作异常，请您重新提交'];
        }

        $model = new Guestbook();
        //$model->load(Yii::$app->request->get(), '');
        $model->load(Yii::$app->request->post(), '');

        $return = $model->doSubmitInfo();
        return $return;
    }
}
