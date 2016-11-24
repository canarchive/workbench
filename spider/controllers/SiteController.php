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

    public function actionSpiderUrl()
    {
        $code = Yii::$app->request->get('code');
        $id = Yii::$app->request->get('site_id');
        $id = empty($id) ? 1 : $id;
        $codes = ['eale', 'cmsad'];
        if (!in_array($code, $codes)) {
            exit('code error');
        }

        $urlBase = Yii::getAlias('@spiderurl');
        $content = '<h3>采集操作</h3>';
        $configFile = "params-{$code}.php";
        $actions = require Yii::getAlias('@app') . '/config/' . $configFile;
        $spiderActions = $actions['spiderActions'];
        foreach ($spiderActions as $action => $info) {
            //$url = $urlBase . "/{$code}/spider/spider.html?id={$id}&action={$action}";
            $url = $urlBase . "/spider/spider.html?id={$id}&action={$action}";
            $content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
        }
        //$downUrl = $urlBase . "/{$code}/spider/file-down.html?id={$id}";
        $downUrl = $urlBase . "/spider/file-down.html?id={$id}";
        $content .= "<a href='{$downUrl}' target='_blank'>下载文件</a><br />";
        $content .= '<br /><h3>信息处理</h3>';
        $dealActions = $actions['dealActions'];
        foreach ($dealActions as $action => $info) {
            //$url = $urlBase . "/{$code}/spider/deal.html?id={$id}&action={$action}";
            $url = $urlBase . "/spider/deal.html?id={$id}&action={$action}";
            $content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
        }

        echo $content;exit();
    }

    public function actionTest()
    {
        print_r($_SERVER);
    }

}
