<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class CmsadController extends Controller
{
    public function init()
    {
        parent::init();

        $this->host = Yii::$app->request->hostInfo;

        //$this->isMobile = $this->clientIsMobile();
        $this->isMobile = $this->host == $this->_getHost('mobile') ? true : false;

        $url = Yii::$app->request->url;
        $redirect = strpos($url, 'index.php') !== false ? true : false;
        $redirect = $redirect ? $redirect : $this->_checkRedirect();
        if ($redirect) {
            $rule = $this->_redirectRule();
            $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
            header("Location:$url");
            //return Yii::$app->response->redirect($url)->send();
            exit();
        }
        Yii::$app->params['siteCustomServiceQQ'] = '1298115377';

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }

    }

	protected function _redirectRule()
	{
        $url = $this->isMobile ? $this->_getHost('mobile') : $this->_getHost();
        header("Location:$url");
        exit();
	}

    public function getTdkInfos($index, $datas = [])
    {
        $default = [
            'title' => Yii::$app->params['seoTitle'],
            'keyword' => Yii::$app->params['seoKeyword'],
            'description' => Yii::$app->params['seoDescription'],
        ];
        $infos = require(Yii::getAlias('@gallerycms') . '/config/cmsad/tdk.php');
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

    public function _initAsset()
    {
        $infos = require Yii::getAlias('@app') . '/config/cmsad/asset.php';
        Yii::$app->params['cssFiles'] = $infos['cssFiles'];
        Yii::$app->params['jsFiles'] = $infos['jsFiles'];
        return ;
    }

    protected function _getHost($type = 'pc')
    {
        $host = $type == 'mobile' ? Yii::getAlias('@m.ad.cmsurl') : Yii::getAlias('@ad.cmsurl');
        return $host;
    }
}
