<?php

namespace gallerycms\house\controllers\sitemap;

use Yii;
use gallerycms\merchant\models\Merchant;

trait TraitMerchant
{
    protected function _merchantShowUrlIndex()
    {
        $model = new Merchant();
        $count = $model->find()->where(['status' => 1])->count();
        $num = ceil($count / 40000);
        $datas = [];
        for ($i = 1; $i <= $num; $i++) {
            $datas['merchantShowUrls' . $i] = [
                'loc' => "{$this->domain}/sitemap_merchantshow_{$i}.xml",
                'lastmod' => Yii::$app->params['currentTime'],
            ];
        }

        return $datas;
    }

    protected function merchantshowUrls($page = 1)
    {
        $model = new Merchant();
        $infos = $model->find()->select('id, created_at, city_code, code')->where(['status' => 1])->offset($this->numPage * ($page - 1))->limit($this->numPage)->all();
        $datas = [];
        $i = 1;
        foreach ($infos as $info) {
            $url = $this->isMobile ? "{$this->domain}/{$info['city_code']}/{$info['code']}/" : $info->infoUrl;
            $datas[$info['id']] = [
                'loc' => $url,
                'lastmod' => $info['created_at'],
            ];
            $datas[$i . 'show'] = [
                'loc' => "{$this->domain}/{$info['city_code']}/showsj_{$info['code']}.html",
                'lastmod' => $info['created_at'],
            ];
            $i++;
        }

        return $datas;
    }
}
