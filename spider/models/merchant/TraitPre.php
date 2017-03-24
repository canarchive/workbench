<?php
namespace spider\models\merchant;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait TraitPre
{
    public function citylist($siteCode)
    {
        $sql = 'INSERT INTO `ws_list_merchant` (`site_code`, `url_source`, `source_city_code`, `source_city_name`) VALUES ';
        $file = "{$siteCode}/citylist.html";
        $datas = [];
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $crawler->filter('#city_list a')->each(function ($node) use (& $sql) {
            $elem = $node->filter('a');
            $name = trim($elem->text());
            $sourceUrl = trim($elem->attr('href'));
            $cCode = basename(rtrim($sourceUrl, '/'));
            $sourceUrl = $sourceUrl . 'B12/';
            $sql .= "('mapbar', '{$sourceUrl}', '{$cCode}', '{$name}'),<br />";
        });
        echo $sql;
    }
}
