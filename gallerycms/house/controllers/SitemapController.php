<?php
namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\Quote;
use common\components\Sitemap;
use gallerycms\house\controllers\sitemap\TraitAsk;
use gallerycms\house\controllers\sitemap\TraitQuote;
use gallerycms\house\controllers\sitemap\TraitMerchant;

class SitemapController extends HouseController
{
    use TraitAsk;
    use TraitQuote;
    use TraitMerchant;
    public $domain;
    public $numPage = 10;//40000;

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
        return $this->_sendSitemap($sitemapData);
    }

    public function actionElems()
    {
        $sort = Yii::$app->request->get('sort');
        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        
        $method = "{$sort}Urls";
        $urls = $this->$method($page);
        $this->setViewPath('@common/views/sitemap');
        $sitemapData = $this->renderPartial('@common/views/sitemap', [
            'urls' => $urls,
        ]);
        return $this->_sendSitemap($sitemapData);
    }

    protected function _sitemapIndex()
    {
        $datas['baseUrls'] = [
            'loc' => $this->domain . '/sitemap_base.xml',
            'lastmod' => Yii::$app->params['currentTime'],
        ];

        $askShowUrls = [];//$this->_askShowUrlIndex();
        $quoteShowUrls = $this->_quoteShowUrlIndex();
        $merchantShowUrls = $this->_merchantShowUrlIndex();
        $datas = array_merge($datas, $askShowUrls, $quoteShowUrls, $merchantShowUrls);

        return $datas;
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
