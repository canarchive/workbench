<?php
namespace spider\models\merchant;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait TraitList
{
    public function listSpider()
    {
        $where = ['status' => 0];
        $infos = $this->_getListInfos($where);
        echo count($infos);
        $this->_listSpider($infos);
    }

    public function listDeal()
    {
        $where = ['status' => 1];
        $infos = $this->_getListInfos($where, 200);
        foreach ($infos as $info) {
            $file = $info->listFile();
            $info->status = 2;
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }

            $spiderNum = 0;
            $crawler = new Crawler();
            echo $file;
            $crawler->addContent($this->getContent($file));
            $mark = '.sortC a';
            $crawler->filter($mark)->each(function ($node) use ($info, &$spiderNum) {
                $elem = $node->filter('a');
                $name = trim($elem->text());
                $sourceUrl = trim($elem->attr('href'));
                $cCode = basename(rtrim($sourceUrl, '/'));
                $sourceUrl = $sourceUrl . 'B12/';
                $sql .= "('mapbar', '{$sourceUrl}', '{$cCode}', '{$name}'),<br />";
                $spiderNum++;
            });
            $info->spider_num = $spiderNum;
            $info->status = 2;
            //print_r($info);exit();
            $info->update(false);
        }
    }
}
