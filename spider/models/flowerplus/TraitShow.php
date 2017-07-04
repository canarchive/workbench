<?php
namespace spider\models\shoot;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait TraitShow
{

    public function showSpider()
    {
        $where = ['source_status' => 0];
        $infos = $this->_getShowInfos($where, 200);
        $num = $this->_showSpider($infos);
        echo $num;
    }

    public function showDeal()
    {
        $where = ['source_status' => 1];
        $infos = $this->_getShowInfos($where, 500);
        foreach ($infos as $info) {
            $file = $info->showFile();
            if (!$this->fileExist($file)) {
                $info->source_status = 0;
                $info->update(false);
                continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            //echo $file;exit();


            $method = in_array($info['source_site_code'], ['toteme', 'jingshan', 'hanhan']) ? 'dede' : $info['source_site_code'];
            if ($method != 'dede') {
                continue;
            }
            $method = $method . 'DealShow';
            $r = $this->$method($crawler, $info);
            $info->status = 2;
            if ($r) {
                $info->update(false);
            }
        }
    }

    protected function shouxiDealShow($crawler, $info)
    {
        $crawler->filter('.list img')->each(function ($node) use ($info) {
            $img = $node->filter('img')->attr('src');
            $img = 'http://shouxiphotos.com/' . $img;
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $info['name'],
                    'info_table' => 'sample',
                    'info_field' => 'picture',
                    'source_site_code' => $info['source_site_code'],
                    'source_id' => $info['source_id'],
                ];
                $this->_addAttachment(new Attachment($aData));
            }
        });
        return true;
    }

    protected function honggDealShow($crawler, $info)
    {
        $infos = $crawler->filter('.zhanshi_box');
        $name = $infos->filter('h1')->text();
        $crawler->filter('tbody img')->each(function ($node) use ($info) {
            $img = $node->filter('img')->attr('src');
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $info['name'],
                    'info_table' => 'sample',
                    'info_field' => 'picture',
                    'source_site_code' => $info['source_site_code'],
                    'source_id' => $info['source_id'],
                ];
                $this->_addAttachment(new Attachment($aData));
            }
        });
        return true;
    }

    protected function dedeDealShow($crawler, $info)
    {
        $urlBases = [
            'hanhan' => 'http://www.hanhanstudio.com/',
            'jingshan' => 'http://www.jingshanwenhua.com/',
            'toteme' => 'http://www.toteme.cn/',
        ];
        $urlBase = $urlBases[$info['source_site_code']];
        $name = $crawler->filter('.biaoti')->text();
        $crawler->filter('.space li img')->each(function ($node) use ($info, $urlBase) {
            $img = $urlBase . $node->filter('img')->attr('src');
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $info['name'],
                    'info_table' => 'sample',
                    'info_field' => 'picture',
                    'source_site_code' => $info['source_site_code'],
                    'source_id' => $info['source_id'],
                ];
                $this->_addAttachment(new Attachment($aData));
            }
        });
        $info->name = $name;
        $info->update(false);
        return true;
    }
}
