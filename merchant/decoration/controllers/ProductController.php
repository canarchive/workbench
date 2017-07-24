<?php
namespace merchant\decoration\controllers;

use Yii;
use merchant\components\Controller as MerchantController;

class ProductController extends MerchantController
{
    public function actionIndex()
    {
		$code = Yii::$app->request->get('code');
		//$codes = ['service', 'advantage', 'sms', 'mail', 'voice', 'captcha'];
		$codes = ['seo', 'sem', 'customizing', 'cpa', 'sms', 'mail', 'voice', 'captcha', 'ask', 'material', 'opinion', 'semopen'];

		$code = in_array($code, $codes) ? $code : 'service';
		$datas = [
		];
		
		//$this->getTdkInfos('feature-' . $code);
		return $this->render($code, $datas);
    }
}
