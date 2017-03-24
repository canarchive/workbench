<?php

namespace spider\controllers;

use Yii;
use spider\components\Controller as SpiderController;

class SiteController extends SpiderController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSpider()
    {
        $code = Yii::$app->request->get('code');
        $codes = ['eale', 'cmsad', 'sinfo', 'jia'];
        if (!in_array($code, $codes)) {
            exit('code error');
        }

        $urlBase = Yii::getAlias('@spiderurl');
        $content = '<h3>采集操作</h3>';
        $configFile = "{$code}/config.php";
        $actions = require Yii::getAlias('@app') . '/config/' . $configFile;
        $spiderActions = $actions['spiderActions'];
        foreach ($spiderActions as $action => $info) {
            $url = $urlBase . "/spider/spider.html?code={$code}&action={$action}";
            $content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
        }

        //$downUrl = $urlBase . "/{$code}/spider/file-down.html?code={$code}";
        $downUrl = $urlBase . "/spider/file-down.html?code={$code}";
        //$content .= "<a href='{$downUrl}' target='_blank'>下载文件</a><br />";
        $content .= '<br /><h3>信息处理</h3>';
        $dealActions = $actions['dealActions'];
        foreach ($dealActions as $action => $info) {
            $url = $urlBase . "/spider/deal.html?code={$code}&action={$action}";
            $content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
        }

        echo $content;exit();
    }
}
