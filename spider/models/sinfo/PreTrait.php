<?php
namespace spider\models\sinfo;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait PreTrait
{
    public $listUrlSql = "INSERT INTO `ws_listurl_sinfo` (`site_code`, `sort`, `sort_name`, `sort_sub`, `sort_sub_name`, `url_source`, `page`) VALUES";

    public function infosListUrl($siteCode)
    {
        $urlFile = Yii::getAlias('@app') . '/config/sinfo/urls.php';

        $listurls = require $urlFile;
        $sql = $this->listUrlSql;
        foreach ($listurls as $info) {
            $url = $info['listUrl'];
            for ($i = 1; $i <= $info['pages']; $i++) {
                $urlReal = str_replace('{{PAGE}}', $i, $url);
                $sql .= "('{$info['code']}', '', '{$info['name']}', '', '', '{$urlReal}', '{$i}'),\n";
            }
                echo "{$info['code']}: <a href='{$urlReal}' target='_blank'>{$urlReal}</a><br />";
        }
        $sql = rtrim($sql, ",\n");
        //$this->db->createCommand($sql)->execute();
        //echo $sql;
    }
}
