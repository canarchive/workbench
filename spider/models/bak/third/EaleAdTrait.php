<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait EaleAdTrait
{

    public function spiderAd($siteCode)
    {
        $datas = require '/data/htmlwww/workbench/web-cmsthird/gallerycms/config/eale/url-base.php';
        //print_r($datas);exit();
        $positions = [
            'slide' => 'all',
            'indexthree' => ['site-index'],
            'announce' => ['site-index'],
            'fivepicture' => ['aboutus-desc', 'service-list', 'info-list', 'sample-campus', 'info-train'],
        ];
        foreach ($positions as $pKey => $position) {
        foreach (['eale', 'ieale', 'iealecn'] as $site) {
        //foreach (['eale'] as $site) {
            foreach ($datas as $key => $data) {
                if (isset($data['only']) && !in_array($site, (array) $data['only'])) {
                    continue;
                }
                if ($position != 'all' && !in_array($key, $position)) {
                    continue;
                }
                $file = "eale/site/{$site}-{$key}.html";
                $info = [
                    'name' => $data['name'],
                    'site_code' => $site,
                    'page' => $key,
                    'position' => $pKey,
                ];
                $method = "_{$pKey}Deal";
                $this->$method($file, $info);
            }
        }
        }

    }

    protected function _fivepictureDeal($file, $info)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.kslj-link a')->each(function ($node) use (& $i, $info) {
            $url = $node->filter('a');
            $url = count($url) > 0 ? trim($url->attr('href')) : '';
            $pic = trim($node->filter('img')->attr('src'));
            $nameExt = trim($node->filter('img')->attr('alt'));
            $mark = $info['site_code'] . $info['page'] . $info['position'] . $i;

            $data = $info;
            $data['url'] = $url;
            $data['thumb'] = $i;
            $data['picture'] = $i;
            $data['description'] = $mark;
            $cModel = new Adpicture($data);
            $cModel->insert(false);
            echo $url  . '--' . $pic .  $nameExt . '<br />';

            $aData = [
                'source_url' => $pic,
                'name' => $info['name'] . $nameExt,
                'info_table' => 'adpicture',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $mark,
            ];
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }

    protected function _announceDeal($file, $info)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.index_xuanchuan a')->each(function ($node) use (& $i, $info) {
            $url = $node->filter('a');
            $url = count($url) > 0 ? trim($url->attr('href')) : '';
            $pic = trim($node->filter('img')->attr('src'));
            $nameExt = trim($node->filter('img')->attr('alt'));
            $mark = $info['site_code'] . $info['page'] . $info['position'] . $i;

            $data = $info;
            $data['url'] = $url;
            $data['thumb'] = $i;
            $data['picture'] = $i;
            $data['description'] = $mark;
            $cModel = new Adpicture($data);
            $cModel->insert(false);
            echo $url  . '--' . $pic .  $nameExt . '<br />';

            $aData = [
                'source_url' => $pic,
                'name' => $info['name'] . $nameExt,
                'info_table' => 'adpicture',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $mark,
            ];
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }

    protected function _indexthreeDeal($file, $info)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.top-work a')->each(function ($node) use (& $i, $info) {
            $url = $node->filter('a');
            $url = count($url) > 0 ? trim($url->attr('href')) : '';
            $pic1 = trim($node->filter('img')->attr('onmouseover'));
            $pic1 = str_replace(["this.src='", "'"], '', $pic1);
            $pic2 = trim($node->filter('img')->attr('onmouseout'));
            $pic2 = str_replace(["this.src='", "'"], '', $pic2);
            $nameExt = trim($node->filter('img')->attr('alt'));
            $mark = $info['site_code'] . $info['page'] . $info['position'] . $i;

            $data = $info;
            $data['url'] = $url;
            $data['thumb'] = $i;
            $data['picture'] = $i;
            $data['description'] = $mark;
            $cModel = new Adpicture($data);
            $cModel->insert(false);
            echo $url  . '--' . $pic1 . '-' . $pic2 .  $nameExt . '<br />';

            foreach (['thumb' => $pic2, 'picture' => $pic1] as $field => $pic) {
            $aData = [
                'source_url' => $pic,
                'name' => $info['name'] . $nameExt,
                'info_table' => 'adpicture',
                'info_field' => $field,
                'source_site_code' => 'eale',
                'source_id' => $mark,
            ];
            $this->_addAttachment(new Attachment($aData));
            }
            $i++;
             
        });
    }

    protected function _slideDeal($file, $info)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('#yq_carousel .item')->each(function ($node) use (& $i, $info) {
            $url = $node->filter('a');
            $url = count($url) > 0 ? trim($url->attr('href')) : '';
            $pic = trim($node->filter('img')->attr('src'));
            $nameExt = trim($node->filter('img')->attr('alt'));
            $mark = $info['site_code'] . $info['page'] . $info['position'] . $i;

            $data = $info;
            $data['url'] = $url;
            $data['thumb'] = $i;
            $data['description'] = $mark;
            $cModel = new Adpicture($data);
            $cModel->insert(false);
            echo $url  . '--' . $pic . '-' . $nameExt . '<br />';

            $aData = [
                'source_url' => $pic,
                'name' => $info['name'] . $nameExt,
                'info_table' => 'adpicture',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $mark,
            ];
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }
}
