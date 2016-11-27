<?php
namespace spider\models\cmsad;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait ChinazShowTrait
{

    public function showSpider($siteCode)
    {
        $where = ['source_site_code' => $siteCode, 'source_status' => 0];
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
            $content = @ file_get_contents($url);
            //$content = $this->getRemoteContent($url);
            //echo strlen($content);
            if ($content) {
                $num++;
                $this->writeFile($file, $content);
            } else {
                $header = @ get_headers($url);
                $info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = -1;
            }
            $info->update();
        }
        echo $num;
    }

    public function show($siteCode)
    {
        $where = ['source_site_code' => $siteCode, 'source_status' => 1];
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
            echo $info['source_url'];
            //echo $file;exit();

            $attrs = $crawler->filter('.pr30 span');
            $count = count($attrs);
            if ($count < 3) {
                continue;
            }
            $created_at = $attrs->eq(0)->text();//nodeValue;
            $created_at = strtotime($created_at);
            $author = $attrs->eq(1)->text();//nodeValue;
            $author = trim(str_replace('来源：', '', $author));
            $editor = trim($attrs->eq(2)->text());//nodeValue;
            $pos = strpos($editor, '【');
            $editor = $pos != false ? substr($editor, 0, $pos) : $editor;
            $editor = str_replace('编辑：', '', $editor);
            //echo $created_at . '==' . $from_source . '==' . $editor;
            $content = trim($crawler->filter('#ctrlfscont')->html());
            $content = preg_replace("'<script(.*?)<\/script>'is", '', $content);
            $content = strip_tags($content, '<p>');
            echo $content;exit();

            $info->created_at = $created_at;
            $info->author = $author;
            $info->editor = $editor;
            $info->content = $content;
            $info->source_status = 2;
            //print_r($info);exit();
            $info->update(false);
        }
    }
}
