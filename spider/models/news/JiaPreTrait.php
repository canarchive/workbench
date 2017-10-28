<?php
namespace spider\models\news;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait JiaPreTrait
{
    public $listUrlSql = "INSERT INTO `ws_listurl_news` (`site_code`, `sort`, `sort_name`, `sort_sub`, `sort_sub_name`, `url_source`, `page`) VALUES";

    public function tagDeal($siteCode)
    {
        $file = "{$siteCode}/tag.php";
        $datas = require $this->getFile($file);
        $pInfos = array_keys($datas);
        $sql = 'INSERT INTO `wc_news_sort` (`name`, `code`, `parent_code`, `orderlist`, `num_info`, `meta_title`, `meta_keyword`, `meta_description`, `status`) VALUES ';
        foreach ($pInfos as $pNameSource) {
            $pName = str_replace('类', '', $pNameSource);
            $pCode = Pinyin::letter($pName, ['delimiter' => '', 'accent' => false]);
            $sql .= "('{$pName}', '{$pCode}', '', 0, 0, '', '', '', 1), ";
            $subs = array_keys($datas[$pNameSource]);
            foreach ($subs as $name) {
                $code = Pinyin::letter($name, ['delimiter' => '', 'accent' => false]);
                $sql .= "('{$name}', '{$code}', '{$pCode}', 0, 0, '', '', '', 1), <br />";
            }
        }
        echo $sql;

        
        foreach ($datas as $fCode => $sorts) {
            print_r($sorts);
        }
    }

    public function tagSpider($siteCode)
    {
        $file = "{$siteCode}/tags.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $str = '';
        $data = [];
        $i = 1;
        $crawler->filter('.wrap .merger_box')->each(function ($node) use (& $i, & $data) {
            $name = $node->filter('h3')->text();
            $node->filter('.merger_TagContent')->each(function ($subNode) use ($name, $i, & $data) {
                $subName = $subNode->filter('h4')->text();
                $tags = $subNode->filter('a');
                foreach ($tags as $key => $attr) {
                    $value = trim($attr->nodeValue);
                    $data[$name][$subName][] = $value;
                }
            });
            $i++;
        });
        var_export($data);
    }
}
