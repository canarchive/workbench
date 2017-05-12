<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
		$url = Yii::getAlias('@tbz-hdb.spreadurl') . '/baom-quote-beijing.html';
        header("Location:$url");
        exit();
    }
}
