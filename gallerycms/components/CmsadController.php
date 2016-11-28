<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class CmsadController extends Controller
{
    public function init()
    {
        parent::init();

    }

	protected function _redirectRule()
	{
        $rule = $this->isMobile ? '/cmsad/mobile-site/index' : '/cmsad/site/home';
        $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code']]);
        echo $url . '--' .$rule;exit();
        header("Location:$url");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    public function getTdkInfos($index, $datas = [])
    {
        $default = [
            'title' => Yii::$app->params['seoTitle'],
            'keyword' => Yii::$app->params['seoKeyword'],
            'description' => Yii::$app->params['seoDescription'],
        ];
        $infos = require(Yii::getAlias('@gallerycms') . '/config/tdk-cmsad.php');
        $info = isset($infos[$index]) ? $infos[$index] : $default;

        $placeholder = array_merge(
            [
                '{{SITENAME}}',
                '{{BASETITLE}}',
                '{{BASEKEYWORD}}',
                '{{BASEDESCRIPTION}}',
            ], array_keys($datas)
        );
        $replace = array_merge(
            [
                Yii::$app->params['siteName'],
                $default['title'],
                $default['keyword'],
                $default['description'],
            ], array_values($datas)
        );
        foreach ($info as $key => $value) {
            $info[$key] = str_replace($placeholder, $replace, $value);
        }

        Yii::$app->params['tdkInfos'] = $info;
        return ;
    }
}
