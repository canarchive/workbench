<?php
namespace spider\models\shoot;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait TraitPre
{
    public function inputList()
    {
        $listSql = "INSERT INTO `ws_list_shoot` (`site_code`, `sort`, `sort_name`, `url_source`, `page`) VALUES";
        $datas = require(Yii::getAlias('@spider') . '/config/shoot/list.php');
        foreach ($datas as $siteCode => $infos) {
            foreach ($infos as $sort => $data) {
                $url = $data['url'];
                $listSql .= "('{$siteCode}', '{$sort}', '{$data['name']}', '{$url}', '1'),\n";
            }
        }
        echo $listSql;
        file_put_contents('/tmp/list.sql', $listSql);
        //print_r($datas);print_r($mllDatas);
    }
}
