<?php

namespace gallerycms\house\controllers\sitemap;

use Yii;
use gallerycms\house\models\Quote;

trait TraitQuote
{

    protected function _quoteShowUrlIndex()
    {
        $model = new Quote();
        $count = $model->find()->where(['status' => 1])->count();
        $num = ceil($count / 40000);
        $datas = [];
        for ($i = 1; $i <= $num; $i++) {
            $datas['quoteShowUrls' . $i] = [
                'loc' => "{$this->domain}/sitemap_quoteshow_{$i}.xml",
                'lastmod' => Yii::$app->params['currentTime'],
            ];
        }

        return $datas;
    }

    protected function quoteshowUrls($page = 1)
    {
        $model = new Quote();
        $infos = $model->find()->select('id, code, created_at, city_code')->where(['status' => 1])->offset($this->numPage * ($page - 1))->limit($this->numPage)->all();
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['id']] = [
                'loc' => "{$this->domain}/{$info['city_code']}/quoteshow_{$info['code']}.html",
                'lastmod' => $info['created_at'],
            ];
        }

        return $datas;
    }
}
