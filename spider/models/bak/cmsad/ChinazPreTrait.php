<?php
namespace spider\models\cmsad;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait ChinazPreTrait
{
    public $listUrlSql = "INSERT INTO `ws_listurl_cmsad` (`site_code`, `sort`, `sort_name`, `sort_sub`, `sort_sub_name`, `url_source`, `page`) VALUES";

    public function infosListUrl($siteCode)
    {
        $urlFile = Yii::getAlias('@app') . '/config/chinaz-urls.php';

        $listurls = require $urlFile;
        $sql = $this->listUrlSql;
        foreach ($listurls as $sort => $info) {
            foreach ($info['subInfos'] as $sortSub => $subInfo) {
                $sql .= "('{$siteCode}', '{$sort}', '{$info['name']}', '{$sortSub}', '{$subInfo['name']}', '{$subInfo['url']}', '1'),\n";
            }
        }
        $sql = rtrim($sql, ",\n");
        //$this->db->createCommand($sql)->execute();
        echo $sql;
    }

    public function infosListUrlAll($siteCode)
    {
        $sql = $this->listUrlSql;
        $where = ['site_code' => $siteCode, 'status' => 1, 'is_allpage' => 0, 'page' => 1];
        $infos = $this->_getListInfos($where);
        $update = false;
        foreach ($infos as $info) {
            $file = $info->listFile();
            $info->is_allpage = date('Ymd', Yii::$app->params['currentTime']);
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }

            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $pageNode = $crawler->filter('.pageBar a');//->text();
            $count = count($pageNode);
            $pageNode = empty($count) ? $crawler->filter('#paginator li a') : $pageNode;
            $count = count($pageNode);
            //echo "<a href='{$info['url_source']}' target='_blank'>{$info['sort_name']}-{$info['sort_sub_name']}</a>";
            if ($count != 0) {
                $lastPage = $pageNode->eq($count-2)->text();
                $lastPage = str_replace('... ', '', $lastPage);
                for ($i = 2; $i <= $lastPage; $i++) {
                    $update = true;
                    $url = str_replace('index.shtml', $i . '.shtml', $info['url_source']);
                    $sql .= "('{$siteCode}', '{$info['sort']}', '{$info['sort_name']}', '{$info['sort_sub']}', '{$info['sort_sub_name']}', '{$url}', '{$i}'),\n";
                }

            }
        }
        if ($update) {
            $sql = rtrim($sql, ",\n");
            $this->db->createCommand($sql)->execute();
        }
        echo $sql;
    }

    public function spiderListurl($siteCode)
    {
        $sortInfos = [];
        $file = "{$siteCode}/listurl.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 0;
        $crawler->filter('.seoinfo-con')->each(function ($node) use (& $sortInfos, $i) {
            $sortName = $node->filter('h3')->text();
            $code = Pinyin::letter($sortName, ['delimiter' => '', 'accent' => false]);
            $sortInfos[$code]['name'] = $sortName;
            $node->filter('.seoinfo-con-link a')->each(function ($node) use (& $sortInfos, $code) {
                $link = $node->attr('href');
                $sortSubName = $node->text();
                if ($sortSubName == '更多') {
                    return ;
                }
                $codeSub = str_replace(['http://www.chinaz.com/web/', '/index.shtml'], ['', ''], $link);
                $sortInfos[$code]['subInfos'][$codeSub] = [
                    'url' => $link,
                    'name' => $sortSubName,
                ];
            });
        });
        var_export($sortInfos);
    }
}
