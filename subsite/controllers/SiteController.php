<?php

namespace subsite\controllers;

use Yii;
use subsite\components\Controller as SubsiteController;
use baseapp\merchant\models\Merchant;
use spread\models\Template;

class SiteController extends SubsiteController
{
    public function actionIndex()
    {
		$url = Yii::getAlias('@tbz.subsiteurl') . '/baom-quote-beijing.html';
        header("Location:$url");
        exit();
    }

    public function actionPageCheck()
    {
        $templates = Template::find()->indexBy('code')->all();
        $merchants = Merchant::find()->indexBy('id')->orderBy('orderlist desc')->all();
        $this->layout = '@backend/views/base/main-base';

        $urlPre = 'tj-hl.subsite.plat.alyee.com/';
        $datas = [];
        foreach ($merchants as $id => $merchant) {
            $datas[$id]['name'] = $merchant['name'];
            $datas[$id]['code'] = $merchant['code'];
            $tpcName = $tmobileName = '';
            foreach ($templates as $code => $template) {
                $name = $template['name'];
                $urlPc = $template['have_pc'] ? "http://{$urlPre}baom-{$code}-beijing.html?cid={$id}" : '';
                $tpcName .= empty($urlPc) ? '' : "<a href='{$urlPc}' target='_blank'>{$name}</a> |";
                $urlMobile = $template['have_mobile'] ? "http://m{$urlPre}baom-{$code}-beijing.html?cid={$id}" : '';
                $tmobileName .= empty($urlMobile) ? '' : "<a href='{$urlMobile}' target='_blank'>{$name}</a> |";
            }
            $datas[$id]['tpcName'] = $tpcName;
            $datas[$id]['tmobileName'] = $tmobileName;
        }
        return $this->render('check', ['datas' => $datas]);
    }

    public function actionHdenter()
    {
        $sourceCode = Yii::$app->request->get('source_code', '');
        $clientType = $this->clientType;
        if (!$this->isMobile) {
            $url = Yii::getAlias('@default.subsiteurl') . '/bm-designz-beijing.html';
        } else {
            $url = Yii::getAlias('@m.default.subsiteurl') . '/bm-tquote-beijing.html';
        }

        header("Location:$url");
    }
}
