<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;
use merchant\models\Company;

class Controller extends CommonController
{
    public $moduleId;
    public $isMobile;
    public $host;
    public $hostPc;
    public $hostMobile;

    public function init()
    {
        parent::init();

        $this->host = Yii::$app->request->hostInfo;
        $this->hostPc = $this->_getHost('pc');
        $this->hostMobile = $this->_getHost('mobile');

        //$this->isMobile = $this->clientIsMobile();
        $this->isMobile = $this->host == $this->hostMobile ? true : false;

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

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }

        $this->_initAsset();
    }

    public function getTdkInfos($index, $datas = [])
    {
        $default = [
            'title' => Yii::$app->params['seoTitle'],
            'keyword' => Yii::$app->params['seoKeyword'],
            'description' => Yii::$app->params['seoDescription'],
        ];
        $infos = $this->_getTdkInfos();
        $info = isset($infos[$index]) ? $infos[$index] : $default;

        $placeholder = array_merge(
            [
                '{{CITYNAME}}',
                '{{SITENAME}}',
                '{{BASETITLE}}',
                '{{BASEKEYWORD}}',
                '{{BASEDESCRIPTION}}',
            ], array_keys($datas)
        );
        $replace = array_merge(
            [
                Yii::$app->params['currentCompany']['name'],
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

    protected function _getTdkInfos()
    {
        return [];
    }

    protected function _getHost($type)
    {
        $host = $type == 'mobile' ? Yii::getAlias('@m.gallerycmsurl') : Yii::getAlias('@gallerycmsurl');
        return $host;
    }

    public function _checkRedirect()
    {
        return false;
    }

    public function _initAsset()
    {
        return [];
    }
}
