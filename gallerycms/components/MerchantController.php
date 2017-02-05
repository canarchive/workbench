<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use gallerycms\merchant\models\Owner;

class MerchantController extends BaseController
{
    public function init()
    {
        parent::init();

    }

	protected function _redirectRule()
	{
        $rule = $this->isMobile ? '/merchant/mobile-site/index' : '/merchant/site/home';
        $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code']]);
        header("Location:$url");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

	protected function _getOwnerInfos()
	{
		$cityCode = Yii::$app->params['currentCompany']['code'];
		$where = ['city_code' => $cityCode];
		$owner = new Owner();
		$infos = $owner->getInfos($where, 20);

		return $infos;
	}
}
