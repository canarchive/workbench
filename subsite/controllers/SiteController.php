<?php

namespace subsite\controllers;

use Yii;
use subsite\components\Controller as SubsiteController;

class SiteController extends SubsiteController
{
    public function actionIndex()
    {
		$url = Yii::getAlias('@tbz.spreadurl') . '/baom-quote-beijing.html';
        header("Location:$url");
        exit();
    }

    public function actionHdenter()
    {
        $sourceCode = Yii::$app->request->get('source_code', '');
		$domain = isset($this->domainDatas[$sourceCode]) ? $this->domainDatas[$sourceCode] : false;
		if (empty($domain)) {
		    $url = Yii::getAlias('@tbz.spreadurl') . '/baom-quote-beijing.html';
            header("Location:$url");
            exit();
		}

        if (isset($_GET['source_code'])) {
            unset($_GET['source_code']);
        }
        $queryStr = http_build_query($_GET);
        $url = $domain->mobileDomain . '/' . $sourceCode . '.html?' . $queryStr;
        
        header("Location:$url");
    }
}
