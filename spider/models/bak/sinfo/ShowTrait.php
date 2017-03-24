<?php
namespace spider\models\sinfo;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait ShowTrait
{

    public function showSpider($siteCode)
    {
        $where = ['source_status' => 0];
        $infos = $this->_getShowInfos($where, 100);
        $num = 0;
        foreach ($infos as $info) {
            $info->source_status = 1;
            $url = trim($info['source_url']);
            //echo $url . '<br />';continue;
            $file = $info->showFile();
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            //$content = @ file_get_contents($url);
            $content = $this->getRemoteContent($url);
            //echo strlen($content);
            if ($content) {
                $num++;
                $this->writeFile($file, $content);
            } else {
                $num++;

                echo "wget -O {$info['id']}.html {$info['source_url']}<br />";
                //$header = @ get_headers($url);
                //$info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = 1;
            }
            $info->update();
        }
        echo $num;
    }

    public function show($siteCode)
    {
        $where = ['source_status' => 1];
        $infos = $this->_getShowInfos($where, 1000);
        $num = 0;
        foreach ($infos as $info) {
            $file = $info->showFile();
            if (!$this->fileExist($file)) {
                $info->source_status = 0;
                $info->update(false);
                continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));

            $siteCode = $info['source_site_code'];
            //if ($siteCode == 'laiyixia') {
            //if ($siteCode == 'baisou') {
            //if ($siteCode == 'sousuopai') {
            //if ($siteCode == 'lrblog') {
            if ($siteCode == 'sogou') {
            //if ($siteCode == '92991') {
            //if ($siteCode == '51soudao') {
            //if ($siteCode == 'qqluowang') {
                $method = "_{$siteCode}Show";
                $this->$method($crawler, $info);
                $info->status = 1;
                //print_r($info);exit();
                $info->update(false);
                $num++;
            }
        }

        echo $num;
    }

    protected function _qqluowangShow($crawler, & $info)
    {
        $content = $crawler->filter('.art_con');
        if (count($content) < 1) {
            echo $info['id'];
            echo $info['source_url'] . '<br />';
            exit();
        }
        $content = $content->html();

        $ad1 = $crawler->filter('.art_con h1');
        $ad1 = count($ad1) > 0 ? $ad1->html() : '';
        $ad2 = $crawler->filter('.art_con .p');
        $ad2 = count($ad2) > 0 ? $ad2->html() : '';
        $content = str_replace([$ad1, $ad2], ['', ''], $content);
        $info->content = $content;
        $info->source_status = 2;
    }

    protected function _sogouShow($crawler, & $info)
    {
        $info->content = trim($crawler->filter('.rich_media_content ')->html());
        $info->source_status = 2;
    }

    protected function _51soudaoShow($crawler, & $info)
    {
        $info->content = trim($crawler->filter('.ncontent')->html());
        $info->source_status = 2;
    }

    protected function _92991Show($crawler, & $info)
    {
        $time = trim($crawler->filter('.collb_la p span')->text());
        preg_match('#(\d+-\d+-\d+ \d+:\d+)#Us', $time, $result);
        $time = isset($result[0]) ? $result[0] : false;
        $info->created_at = !empty($time) ? strtotime($time) : $info->created_at;
        $info->content = trim($crawler->filter('.collb_lb')->html());
        $info->source_status = 2;
    }

    protected function _lrblogShow($crawler, & $info)
    {
        $content = trim($crawler->filter('.entry')->html());
        $ad = $crawler->filter('.entry .gggpost-above')->html();
        $content = str_replace($ad, '', $content);
        $info->content = $content;
        $tags = $crawler->filter('.post-tag a');
        $tagStr = '';
        if (count($tags) > 0) {
            foreach ($tags as $tag) {
                $tagStr .= $tag->nodeValue . ',';
            }
        }
        $info->tags = $tagStr;
        echo $info->tags . '<br />';
        $info->source_status = 2;
    }

    protected function _sousuopaiShow($crawler, & $info)
    {
        $time = trim($crawler->filter('h4')->text());
        preg_match('#(\d+-\d+-\d+ \d+:\d+:\d+)#Us', $time, $result);
        $time = isset($result[0]) ? $result[0] : false;
        $info->created_at = !empty($time) ? strtotime($time) : $info->created_at;
        $content = trim($crawler->filter('.nr_text')->html());
        $content = preg_replace('#<script.*</script>#Us', '', $content);
        //echo strlen($content);exit();
        $info->content = $content;
        $info->source_status = 2;
    }

    protected function _baisouShow($crawler, & $info)
    {
        $content = trim($crawler->filter('.text')->html());
        //$content = preg_match('#<h1>.*</h3>#Us', $content, $r);
        $content = preg_replace('#<h1>.*</h3>#Us', '', $content);
        $info->content = $content;
        $info->source_status = 2;
    }

    protected function _laiyixiaShow($crawler, & $info)
    {
        $created_at = trim($crawler->filter('.newsInfo .hd span')->text());
        $created_at = str_replace('发布时间：', '', $created_at);
        $info->created_at = strtotime($created_at);
        $info->content = trim($crawler->filter('.newsInfo .bd')->html());
        $info->source_status = 2;
    }
}
