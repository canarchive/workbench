<?php

namespace gallerycms\house\controllers\sitemap;

use Yii;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\AskSort;
use gallerycms\house\models\AskTag;

trait TraitAsk
{

    protected function _askShowUrlIndex()
    {
        $model = new AskQuestion();
        $count = $model->find()->where(['status' => 1])->count();
        $num = ceil($count / 40000);
        $datas = [];
        for ($i = 1; $i <= $num; $i++) {
            $datas['askShowUrls' . $i] = [
                'loc' => "{$this->domain}/sitemap_askshow_{$i}.xml",
                'lastmod' => Yii::$app->params['currentTime'],
            ];
        }

        return $datas;
    }

    protected function askshowUrls($page = 1)
    {
        $model = new AskQuestion();
        $infos = $model->find()->select('id, created_at')->where(['status' => 1])->offset($this->numPage * ($page - 1))->limit($this->numPage)->all();
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['id']] = [
                'loc' => "{$this->domain}/askshow_{$info['id']}.html",
                'lastmod' => $info['created_at'],
            ];
        }

        return $datas;
    }
}
