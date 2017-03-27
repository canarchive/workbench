<?php
namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\Quote;
use common\components\Sitemap;

class SitemapController extends HouseController
{
    public $domain;

    public function init()
    {
        $this->domain = Yii::$app->request->hostInfo;

        parent::init();
    }

    public function actionIndex()
    {
        $datas = $this->_sitemapIndex();
        $this->setViewPath('@common/views/sitemap-index');
        $sitemapData = $this->renderPartial('@common/views/sitemap-index', [
            'urls' => $datas,
        ]);
        echo $sitemapData;
        //return $this->_sendSitemap($sitemapData);
    }

    public function actionElems()
    {
        $sort = Yii::$app->request->get('sort');
        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        
        $method = "{$sort}Urls";
        $urls = $this->$method($page);
        $this->setViewPath('@common/views/sitemap-index');
        $sitemapData = $this->renderPartial('@common/views/sitemap-index', [
            'urls' => $urls,
        ]);
        echo $sitemapData;
    }

    protected function _sitemapIndex()
    {
        $datas['baseUrls'] = [
            'loc' => $this->domain . '/sitemap_base.xml',
            'lastmod' => Yii::$app->params['currentTime'],
        ];

        $askShowUrls = $this->_askShowUrlIndex();
        $datas = array_merge($datas, $askShowUrls);

        return $datas;
    }

    protected function sitemap()
    {
        $sitemap = new Sitemap();
        $sitemap->models = $this->_sitemapModels();
        $sitemap->urls = $this->_sitemapUrls();
        $sitemap->enableGzip = true; // default is false
        $sitemap->cacheExpire = 1; // 1 second. Default is 24 hours
        return $sitemap;

    }

    protected function _sitemapUrls()
    {
        $baseUrls = $this->_getBaseUrls();
        $urls = array_merge($baseUrls);
        return $urls;
    }

    protected function baseUrls()
    {
        $urlBases = require Yii::getAlias('@gallerycms') . '/config/house/url.php';
        foreach ($urlBases as $urlBase) {
            if (!isset($urlBase['in-sitemap']) || empty($urlBase['in-sitemap'])) {
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
            $url = strpos($url, 'http') !== false ? $url : $this->domain . $url;
            $urls[] = [
                'loc' => $url,
                'changefreq' => \common\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                'lastmod' => time(),
                'priority' => 0.8,
            ];
        }

        return $urls;
    }

    protected function _sitemapModels()
    {
        return [];
    }

    protected function _infoUrls()
    {
        $this->domain = $this->isMobile ? Yii::getAlias('@m.ad.cmsurl') : Yii::getAlias('@ad.cmsurl');

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
                'loc' => $this->domain . '/info/' . $info['id'] . '.html',
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
                    'loc' => $i == 1 ? "$this->domain{$base}/" : "{$this->domain}{$base}_{$i}/",
                    'lastmod' => intval(time()),
                ];
            }
        }
        $urls = array_merge($listUrls, $urls);

        return $urls;

    }

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

    protected function askUrls($page = 1)
    {
        $model = new AskQuestion();
        $infos = $model->find()->select('id', 'created_at')->where(['status' => 1])->offset(10 * ($page - 1))->limit(10)->all();
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['id']] = [
                'loc' => "{$this->domain}/askshow_{$info['id']}.html",
                'lastmod' => $info['created_at'],
            ];
        }

        return $datas;
    }

    protected function _sendSitemap($content)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/xml');
        $content = gzencode($content);
        $headers->add('Content-Encoding', 'gzip');
        $headers->add('Content-Length', strlen($content));
        return $content;
    }
}
