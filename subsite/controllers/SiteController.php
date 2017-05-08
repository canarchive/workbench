<?php

namespace subsite\controllers;

use Yii;
use subsite\components\Controller as SubsiteController;

class SiteController extends SubsiteController
{
    public function actionIndex()
    {
        //$url = Yii::$app->params['homeRedirectUrl'];
		$url = Yii::getAlias('@tbzsubsiteurl') . '/bm-tbz-beijing.html';
        header("Location:$url");
        exit();
    }

    public function actionHdenter()
    {
        $sourceCode = Yii::$app->request->get('source_code', '');
		$domain = $this->_getDomain($sourceCode);
		if (empty($domain)) {
			$url = Yii::getAlias('@subsiteurl') . '/bm-sj-beijing.html';
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
			'bm-yzwsj' => Yii::getAlias('@yuezwsubsiteurl'),
			'bm-yzwbj' => Yii::getAlias('@m.yuezwsubsiteurl'),
			'bm-yzwtbj' => Yii::getAlias('@m.yuezwsubsiteurl'),
			'bm-mzkhd' => Yii::getAlias('@mzksubsiteurl'),
			'bm-mzkbj' => Yii::getAlias('@m.mzksubsiteurl'),

			'bm-tssj' => Yii::getAlias('@55jiasubsiteurl'),
			'bm-tstbj' => Yii::getAlias('@m.55jiasubsiteurl'),
			'bm-tsbj' => Yii::getAlias('@m.55jiasubsiteurl'),
		];
		$domain = isset($datas[$code]) ? $datas[$code] : '';
		return $domain;
	}
}
