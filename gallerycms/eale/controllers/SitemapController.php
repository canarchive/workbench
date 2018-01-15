<?php
namespace gallerycms\eale\controllers;

use Yii;
use gallerycms\components\EaleController;
use common\components\SitemapTrait;
use gallerycms\eale\models\Sample;
use gallerycms\eale\models\Info;
use gallerycms\eale\models\Service;

class SitemapController extends EaleController
{
    use SitemapTrait;

    protected function _sitemapModels()
    {
        return [];
    }

    protected function _infoUrls()
    {
        $baseUrl = $this->_getBaseUrl();

        $model = new Info();
        $sorts = $this->siteCode == 'iealecn' ? ['iealecn', 'train'] : $this->siteCode;
        $infos = $model->find()->select('id, sort, updated_at')->where(['sort' => $sorts])->asArray()->all();
        if (empty($infos)) {
            return [];
        }

        $sortNums = [];
        foreach ($infos as $info) {
            $urls[] = [
                'loc' => $baseUrl . 'info/' . $info['id'] . '.html',
                'lastmod' => intval($info['updated_at']),
            ];
            $sortNums[$info['sort']] = isset($sortNums[$info['sort']]) ? $sortNums[$info['sort']] + 1 : 1;
        }

        $listUrls = [];
        foreach ($sortNums as $sort => $num) {
            $pages = ceil($num / 12);
            for ($i = 1; $i <= $pages; $i++) {
                $locUrl = $sort == 'train' ? "{$baseUrl}train" : "{$baseUrl}info";
                $locUrl .= $i == 1 ? '/' : "_{$i}";
                $listUrls[] = [
                    'loc' => $locUrl,
                    'lastmod' => time(),
                ];
            }
        }
        $urls = array_merge($listUrls, $urls);
        return $urls;
    }

    protected function _serviceUrls()
    {
        if ($this->siteCode == 'iealecn') {
            return [];
        }

        $baseUrl = $this->_getBaseUrl();
        $model = new Service();

        $sorts = $this->siteCode == 'eale' ? ['eale-commercial', 'eale-fashion', 'eale-star'] : ['ieale-star', 'ieale-people', 'ieale-wedding'];
        $infos = $model->find()->select('id, sort, updated_at')->where(['sort' => $sorts])->asArray()->all();
        if (empty($infos)) {
            return [];
        }

        foreach ($infos as $info) {
            $urls[] = [
                'loc' => $baseUrl . 'service/' . $info['id'] . '.html',
                'lastmod' => intval($info['updated_at']),
            ];
        }

        $listUrls[] = [
            'loc' => "{$baseUrl}service/",
            'lastmod' => time(),
        ];
        $urls = array_merge($listUrls, $urls);
        return $urls;
    }

    protected function _sampleUrls()
    {
        $baseUrl = $this->_getBaseUrl();

        $showUrls = [];
        $model = new Sample();
        $sorts = [
            'eale' => ['commercial', 'fashion', 'star'],
            'ieale' => ['star', 'people', 'wedding', 'campus'],
            'iealecn' => ['student', 'studentwork'],
        ];
        $sorts = $sorts[$this->siteCode];
        //$infos = $model->find()->select('id, sort, tag, updated_at')->where(['sort' => $sorts])->asArray()->all();
        $infos = $model->find()->select('id, sort, tag, updated_at')->where(['sort' => $sorts])->limit(20)->asArray()->all();
        $infosExt = $this->siteCode == 'iealecn' ? $model->find()->select('id, sort, tag, updated_at')->where(['recommend' => 'iealecn'])->limit(20)->asArray()->all() : [];
        $infos = array_merge($infos, $infosExt);
        if (empty($infos)) {
            return [];
        }

        $sortInfos = $model->sortInfos;
        $tagInfos = $model->tagInfos;
        $sortNums = $tagNums = [];
        foreach ($infos as $info) {
            $urls[] = [
                'loc' => $baseUrl . 'sample/' . $info['id'] . '.html',
                'lastmod' => intval($info['updated_at']),
            ];
            $sortNums[$info['sort']] = isset($sortNums[$info['sort']]) ? $sortNums[$info['sort']] + 1 : 1;
            $tags = explode(',', $info['tag']);
            foreach ($tags as $tag) {
                $tagNums[$tag] = isset($tagNums[$tag]) ? $tagNums[$tag] + 1 : 1;
            }
        }

        $listUrls = [];
        foreach ($sortNums as $sort => $num) {
            $pages = ceil($num / 18);
            for ($i = 1; $i <= $pages; $i++) {
                $locUrl = $i == 1 ? "{$baseUrl}{$sort}/" : "{$baseUrl}{$sort}_{$i}/";
                $listUrls[] = [
                    'loc' => $locUrl,
                    'lastmod' => time(),
                ];
            }
        }
        if ($this->siteCode != 'iealecn') {
            foreach ($tagNums as $tag => $num) {
                $pages = ceil($num / 18);
                for ($i = 1; $i <= $pages; $i++) {
                    $locUrl = $i == 1 ? "{$baseUrl}{$tag}/" : "{$baseUrl}{$tag}_{$i}/";
                    $listUrls[] = [
                        'loc' => $locUrl,
                        'lastmod' => time(),
                    ];
                }
            }
        }
        $urls = array_merge($listUrls, $urls);

        return $urls;

    }

    protected function _sitemapUrls()
    {
        $urls = [];
        $baseUrl = $this->_getBaseUrl();
        $urlBases = require Yii::getAlias('@gallerycms') . '/config/eale/url-base.php';
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
            $url = strpos($url, 'http') !== false ? $url : $baseUrl . ltrim($url, '/');
            $urls[] = [
                'loc' => $url,
                'lastmod' => time(),
                //'changefreq' => \common\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                //'priority' => 0.8,
            ];
        }
        $infoUrls = $this->_infoUrls();
        $serviceUrls = $this->_serviceUrls();
        $sampleUrls = $this->_sampleUrls();
        $urls = array_merge($urls, $infoUrls, $serviceUrls, $sampleUrls);

        return $urls;
    }

    protected function _getBaseUrl()
    {
        static $baseUrl = null;
        if (is_null($baseUrl)) {
            $siteInfo = $this->siteInfos[$this->siteCode];
            $baseUrl = $this->isMobile ? $siteInfo['urlMobile'] . '/' : $siteInfo['url'] . '/';
        }
        return $baseUrl;
    }
}
