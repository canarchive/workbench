<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait EaleSpiderTrait
{
    public function spiderSite($siteCode)
    {
        $datas = require '/data/htmlwww/workbench/web-cmsthird/gallerycms/config/eale/url-base.php';
        //print_r($datas);exit();
        foreach (['eale', 'ieale', 'iealecn'] as $site) {
            foreach ($datas as $key => $data) {
                if (isset($data['only']) && !in_array($site, (array) $data['only'])) {
                    continue;
                }
                $url = $this->siteInfos[$site] . $data['source-url'];
                $file = "eale/site/{$site}-{$key}.html";
                    $content = $this->getRemoteContent($url);
                    if ($content) {
                        $this->writeFile($file, $content);
                    }
                echo "<a href='{$url}' target='_blank'>{$url}</a>--{$file}<br />";
            }
        }
        //print_r($datas);

    }

    public function spiderTag($siteCode)
    {
        $datas = require Yii::getAlias('@spider') . '/config/params-eale-sort.php';
        /*$str = '';
        foreach ($datas as $data) {
            $str .= "'{$data['sort']}' => [<br />";
            foreach ($data['subInfo'] as $subInfo) {
                $str .= "    '{$subInfo['codeTag']}' => '{$subInfo['tag']}',<br />";
            }
            $str .= "],<br />";
        }
        echo $str;exit();
        print_r($datas);exit();*/
        foreach ($datas as $key => $data) {
            $code = $data['code'];
            $sort = $data['sort'];
            foreach ($data['subInfo'] as $info) {
                $fileBase = "eale/list/{$code}-{$sort}-{$info['codeTag']}-";
                for ($i = 1; $i < 6; $i++) {
                    $url = str_replace('.html', '-page_' . $i . '.html', $info['url']);
                    $file = "{$fileBase}{$i}.html";
                    echo "<a href='{$url}' target='_blank'>{$url}</a>--{$file}<br />";
                    $content = $this->getRemoteContent($url);
                    if ($content) {
                        $this->writeFile($file, $content);
                    }
                }
            }
        }
    }

    public function spiderList($siteCode)
    {
        //exit('finish');
        $datas = require Yii::getAlias('@spider') . '/config/params-eale-sort1.php';

        foreach ($datas as $data) {
            $code = $data['code'];
            $sort = $data['sort'];
            for ($i = 1; $i <= $data['page']; $i++) {
                $file = "eale/listext/{$code}-{$sort}-{$i}.html";

                $url = in_array($sort, ['student', 'studentworks', 'campus']) ? "{$this->siteInfos[$code]}/{$sort}/" : "{$this->siteInfos[$code]}/{$sort}s/page_{$i}.html";
                echo "<a href='{$url}' target='_blank'>{$url}</a>--{$file}<br />";
                $content = $this->getRemoteContent($url);
                $this->writeFile($file, $content);
            }
        }

    }

    public function getTags($siteCode)
    {
        $file = "{$siteCode}/tags.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $str = '';
        $data = [];
        $i = 1;
        $crawler->filter('ul')->each(function ($node) use (& $i, & $data) {
            $code = $node->filter('ul')->attr('data-code');
            $name = $node->filter('ul')->attr('data-name');
            $sort = $node->filter('ul')->attr('data-sort');
            $data[$i] = [
                'code' => $code,
                'name' => $name,
                'sort' => $sort,
            ];
            $node->filter('li')->each(function ($subNode) use ($code, $name, $sort, $i, & $data) {
                $tag = $subNode->filter('a')->attr('title');
                $urlPre = $code == 'eale' ? 'http://www.eale.cc/' . $sort . 's/' : 'http://www.ieale.com/' . $sort . 's/';
                $url = $urlPre . trim($subNode->filter('a')->attr('href'));

                $codeTag = Pinyin::trans($tag, ['delimiter' => '', 'accent' => false]);
                $data[$i]['subInfo'][] = ['tag' => $tag, 'codeTag' => $codeTag, 'url' => $url];
                //print_r($data);
            });
            $i++;
        });
        var_export($data);
    }
}
