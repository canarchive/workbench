<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
        //$url = Yii::$app->params['homeRedirectUrl'];
		$url = Yii::getAlias('@tbzshspreadurl') . '/bm-tbzsjlf-beijing.html';
        header("Location:$url");
        exit();
    }

    public function actionHdenter()
    {
        $sourceCode = Yii::$app->request->get('source_code', '');
		$domain = $this->_getDomain($sourceCode);
		if (empty($domain)) {
			$url = Yii::getAlias('@spreadurl') . '/bm-sj-beijing.html';
            header("Location:$url");
            exit();
		}

        if (isset($_GET['source_code'])) {
            unset($_GET['source_code']);
        }
        $queryStr = http_build_query($_GET);
        $url = $domain . '/' . $sourceCode . '.html?' . $queryStr;
        
        header("Location:$url");
    }

	protected function _getDomain($code)
	{
		$code = substr($code, 0, strrpos($code, '-'));
		$datas = [
			'bm-yzwsj' => Yii::getAlias('@yuezwspreadurl'),
			'bm-yzwbj' => Yii::getAlias('@m.yuezwspreadurl'),
			'bm-yzwtbj' => Yii::getAlias('@m.yuezwspreadurl'),
			'bm-mzkhd' => Yii::getAlias('@mzkspreadurl'),
			'bm-mzkbj' => Yii::getAlias('@m.mzkspreadurl'),

			'bm-tssj' => Yii::getAlias('@55jiaspreadurl'),
			'bm-tstbj' => Yii::getAlias('@m.55jiaspreadurl'),
			'bm-tsbj' => Yii::getAlias('@m.55jiaspreadurl'),
		];
		$domain = isset($datas[$code]) ? $datas[$code] : '';
		return $domain;
	}
}
