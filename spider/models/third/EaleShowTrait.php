<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait EaleShowTrait
{

    public function spiderShow($siteCode)
    {
        $where = ['source_status' => 0];
        $infos = $this->_getShowInfos($where, 100);
        //$infos = $this->_getShowSamples($where, 100);
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
                $header = @ get_headers($url);
                $info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = -1;
            }
            $info->update();
        }
        echo $num;
    }

    public function dealShow($siteCode)
    {
        $where = ['source_status' => 1];
        $infos = $this->_getShowInfos($where, 100);
        //$infos = $this->_getShowSamples($where, 100);
        foreach ($infos as $info) {
            $file = $info->showFile();
            if (!$this->fileExist($file)) {
                $info->source_status = 0;
                $info->update(false);
                continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            //echo $info['source_url']; echo $file;exit();
            $createdAt = $crawler->filter('.item-heading h5');
            $createdAt = count($createdAt) > 0 ? $createdAt->text() : $crawler->filter('.item-heading p')->text();
            $createdAt = strtotime($createdAt);
            $title = trim($crawler->filter('.item-heading h4')->text());
            $content = $crawler->filter('.item-con')->html();
            echo $createdAt . '--' . $title . '--' . strlen($content) . '<br />';
            //echo $createdAt . '--' . $title . '--' . $content . '<br />';continue;

            $info->created_at = $createdAt;
            $info->title = empty($info->title) ? $title : $info->title;
            $info->content = $content;
            $info->source_status = 2;
            $info->update(false);
        }
    }

    public function dealExt($siteCode)
    {
        $where = ['source_status' => 2];
        $infos = $this->_getShowSamples($where, 100);
        foreach ($infos as $info) {
            $id = $info['id'];
            echo "SELECT `tag`, `tag_name` FROM `wc_samplemid` WHERE `source_id` = {$info['source_id']} GROUP BY `tag`";
            $datas = $info->db->createCommand("SELECT `tag`, `tag_name` FROM `wc_samplemid` WHERE `source_id` = {$info['source_id']} GROUP BY `tag`")->queryAll();
            $tags = $tagNames = [];
            foreach ($datas as $data) {
                $tags[] = $data['tag'];
                $tagNames[] = $data['tag_name'];
            }
            $info->tag = implode(array_filter($tags), ',');
            $info->tag_name = implode(array_filter($tagNames), ',');
            $info->source_status = 1;
            $info->update(false);
        }
    }

    public function dealContent($siteCode)
    {
        $where = ['source_status' => 1];
        $infos = $this->_getShowSamples($where, 100);
        foreach ($infos as $info) {
            $name = $info['name'];

            $c = $info['content'];
            $c = preg_replace('/alt=".*"/', "alt='{$name}'", $c);

            $newC = preg_replace_callback('/<img .*>/Us', function ($matches) {
                $str = $matches[0];
                $sUrl = '@src=.*"(?P<url>.*)".*@Us';
                preg_match($sUrl, $str, $url);
                if (!isset($url['url'])) {
                    return $str;
                }
                $sFile = $url['url'];
                $sFile = strpos($sFile, '@') !== false ? substr($sFile, intval(strpos($sFile, '@')) + 1) : $sFile;
                $pre = '/data/htmlwww/common/upload/third/eale/picbefore/';
                $file = $pre . $sFile;
                if (!file_exists($file)) {
                    echo 'no--' . $file . '<br />';
                    return $str;
                }
                $preNew = '/data/htmlwww/common/upload/third/eale/content/';
                $fileNew = $preNew . $sFile;
                copy($file, $fileNew);
                $newUrl = str_replace('/data/htmlwww/common/upload/', 'http://60.205.145.0/common/upload/', $fileNew);
                $str = preg_replace('/src=".*"/', "src='{$newUrl}'", $str);
                //print_r($matches);
                return $str;
            },
            $c);
            $info->content = trim($newC);
            $formatC = strip_tags($newC);
            $info->search = "{$info->name} {$info->title} {$info->sort_name} {$info->tag} {$formatC}";

            $id = $info['id'];
            $info->source_status = 2;
            $info->update(false);
        }
    }
}
