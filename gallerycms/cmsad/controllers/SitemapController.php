<?php
namespace gallerycms\cmsad\controllers;

use Yii;
use gallerycms\components\CmsadController;
use common\components\SitemapTrait;
use gallerycms\cmsad\models\Article;
use gallerycms\cmsad\models\Category;

class SitemapController extends CmsadController
{
    use SitemapTrait;

    protected function _sitemapModels()
    {
        return [];
    }

    protected function _infoUrls()
    {
        $domain = $this->isMobile ? Yii::getAlias('@m.ad.cmsurl') : Yii::getAlias('@ad.cmsurl');

        $showUrls = [];
        $model = new Article();
        //$infos = $model->find()->select('id, category_id, updated_at')->where(['status' => 1])->asArray()->limit(200)->all();
        $infos = $model->find()->select('id, category_id, updated_at')->where(['status' => 1])->asArray()->all();
        if (empty($infos)) {
            return [];
        }

        $catdirs = [0 => count($infos)];
        $modelCategory = new Category();
        $cInfos = $modelCategory->getDatas('id');
        foreach ($infos as $info) {
            $urls[] = [
                'loc' => $domain . '/info/' . $info['id'] . '.html',
                'lastmod' => intval($info['updated_at']),
            ];
            $catId = $info['category_id'];
            $catdirs[$catId] = isset($catdirs[$catId]) ? $catdirs[$catId] + 1 : 1;

            $pId = $cInfos[$catId]['parent_id'];
            $catdirs[$pId] = isset($catdirs[$pId]) ? $catdirs[$pId] + 1 : 1;
        }

        $listUrls = [];
        foreach ($catdirs as $catId => $num) {
            $pages = ceil($num / 10);
            $base = $catId == 0 ? '/info' : '/info_' . $cInfos[$catId]['catdir'];
            for ($i = 1; $i <= $pages; $i++) {
                $listUrls[] = [
                    'loc' => $i == 1 ? "$domain{$base}/" : "{$domain}{$base}_{$i}/",
                    'lastmod' => intval(time()),
                ];
            }
        }
        $urls = array_merge($listUrls, $urls);

        return $urls;

    }

    protected function _sitemapUrls()
    {
        $domain = $this->isMobile ? Yii::getAlias('@m.ad.cmsurl') : Yii::getAlias('@ad.cmsurl');
        $urls = [];
        $urlBases = require Yii::getAlias('@gallerycms') . '/config/cmsad/url.php';
        foreach ($urlBases as $urlBase) {
            if (isset($urlBase['no-sitemap']) && $urlBase['no-sitemap']) {
                continue;
            }

            if ($this->isMobile) {
                $url = isset($urlBase['mobile-url']) ? $urlBase['mobile-url'] : false;
            } else {
                $url = isset($urlBase['pc-url']) ? $urlBase['pc-url'] : false;
            }
            if (empty($url)) {
                continue ;
            }
            $url = strpos($url, 'http') !== false ? $url : $domain . $url;
            $urls[] = [
                'loc' => $url,
                'changefreq' => \common\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                'lastmod' => time(),
                'priority' => 0.8,
            ];
        }
        $infoUrls = $this->_infoUrls();
        $urls = array_merge($urls, $infoUrls);

        return $urls;
    }
}
