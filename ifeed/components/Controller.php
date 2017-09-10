<?php
namespace ifeed\components;

use Yii;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
    public function init()
    {
        parent::init();

    }

    public function getTdkInfos($index, $datas = [], $info = [])
    {
        $default = [
            'title' => Yii::$app->params['seoTitle'],
            'keyword' => Yii::$app->params['seoKeyword'],
            'description' => Yii::$app->params['seoDescription'],
        ];
        if (empty($info)) {
        $infos = $this->_getTdkInfos();
        $info = isset($infos[$index]) ? $infos[$index] : $default;
        }

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

    protected function _getTdkInfos()
    {
        return [];
    }
}
