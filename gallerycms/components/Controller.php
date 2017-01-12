<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;
use merchant\models\Company;

class Controller extends CommonController
{
    public $host;
    public $isMobile;

    public function init()
    {
        parent::init();

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
                //'{{CITYNAME}}',
                '{{SITENAME}}',
                '{{BASETITLE}}',
                '{{BASEKEYWORD}}',
                '{{BASEDESCRIPTION}}',
            ], array_keys($datas)
        );
        $replace = array_merge(
            [
                //Yii::$app->params['currentCompany']['name'],
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

    public function _checkRedirect()
    {
        return false;
    }

    public function _initAsset()
    {
        return [];
    }
}
