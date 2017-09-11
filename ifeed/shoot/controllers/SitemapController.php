<?php
namespace ifeed\shoot\controllers;

use Yii;
use ifeed\components\ShootController;
use common\components\SitemapTrait;
use ifeed\shoot\models\Info;

class SitemapController extends ShootController
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
        $infos = $model->find()->select('id, sort, updated_at')->where(['site_code' => $this->siteCode])->asArray()->all();
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

    protected function _sitemapUrls()
    {
        $urls = [];
        $baseUrl = $this->_getBaseUrl();
        $urlBases = require Yii::getAlias('@ifeed') . '/config/shoot/url.php';
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
        $urls = array_merge($urls, $infoUrls);

        return $urls;
    }

    protected function _getBaseUrl()
    {
        static $baseUrl = null;
        if (is_null($baseUrl)) {
            $siteInfo = $this->siteInfos[$this->siteCode];
            $baseUrl = $this->isMobile ? $siteInfo['mobile'] . '/' : $siteInfo['pc'] . '/';
        }
        return $baseUrl;
    }

	public function actionSmcheck()
	{
		$code = $this->_checkCodes('shenma');
		echo $code;exit();
	}

	public function _checkCodes($code)
	{

		$datas = [
        'h5tj' => [
            'shenma' => 'shenma-site-verification:89fd24dff55eabd6de6e3b5661ae43ff_1485141083',
            'shenma1' => 'shenma-site-verification:',
    		'360' => '',
    		'sogou' => '',
        ],
        'h5qz' => [
            'shenma' => 'shenma-site-verification:8dc034c8a8e3c69c69e7655759641e21_1485141243',
            'shenma1' => 'shenma-site-verification:049a409ee1de5a1b07aae9a1e436e689_1485141980',
    		'360' => '',
    		'sogou' => '',
        ],
        'shoujiyunzhuaqu' => [
            'shenma' => 'shenma-site-verification:394d5e163e5a9e14d9324110ba21ab25_1485141200',
            'shenma1' => 'shenma-site-verification:',
    		'360' => '',
    		'sogou' => '',
        ],
        'teltongji' => [
            'shenma' => 'shenma-site-verification:987c0a3769ba05418bc04cd6851e3b1e_1485141195',
            'shenma1' => 'shenma-site-verification:93c4570853e45cabbbd0510969ace4d6_1485141750',
    		'360' => '',
    		'sogou' => '',
        ],
        'zhuaquyun' => [
            'shenma' => 'shenma-site-verification:06a2e0efe09cd7e386d354ff0b9993b8_1485141162',
            'shenma1' => 'shenma-site-verification:7f2c8af8c09445a654e0348e7c3067dd_1485141190',
    		'360' => '',
    		'sogou' => '',
        ],
        'shoujiyuntongji' => [
            'shenma' => 'shenma-site-verification:a4d024cea19871a27556b559bd201231_1485141208',
            'shenma1' => 'shenma-site-verification:',
    		'360' => '',
    		'sogou' => '',
        ],
        'shoujihaozhuaqu' => [
            'shenma' => 'shenma-site-verification:8999fa1628cea5f09ffa77e02c620f95_1485141901',
            'shenma1' => 'shenma-site-verification:',
    		'360' => '',
    		'sogou' => '',
        ],
        'qqyuntongji' => [
            'shenma' => 'shenma-site-verification:98c6375b4b7a05da2c749a75d381195d_1485141219',
            'shenma1' => 'shenma-site-verification:dd0b0b2dc964b52ebe97e3e7d9cefcc1_1485141222',
    		'360' => '',
    		'sogou' => '',
		],
		];
		$code = $this->isMobile ? $code . '1' : $code;
		return $datas[$this->siteCode][$code];
    }
}
