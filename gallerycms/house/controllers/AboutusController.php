<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;

class AboutusController extends HouseController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
        if ($this->isMobile) {
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
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}
}
