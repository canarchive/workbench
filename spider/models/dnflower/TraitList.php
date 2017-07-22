<?php
namespace spider\models\dnflower;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait TraitList
{
	public function listPre()
	{
		$datas = require(Yii::getAlias('@spider') . '/config/dnflower/sort.php');
        $listSql = "INSERT INTO `ws_list_flower` (`site_code`, `sort`, `sort_name`, `url_source`, `page`) VALUES";
		foreach ($datas as $sort => $data) {
			$urlBase = "http://www.dnflower.com/Shop/ShowClass.asp?ClassID={$data['id']}";
            $listSql .= "('dnflower', '{$sort}', '{$data['name']}', '{$urlBase}', '1'),\n";
			if (isset($data['page'])) {
				for ($i = 2; $i <= $data['page']; $i++) {
					$url = $urlBase . "&page={$i}";
                    $listSql .= "('dnflower', '{$sort}', '{$data['name']}', '{$url}', '{$i}'),\n";
				}
			}
		}
		echo $listSql;

	}

    public function listSpider()
    {
        $where = ['status' => 0];
        $infos = $this->_getListInfos($where);
        $this->_listSpider($infos);
    }

    public function listDeal()
    {
        //$where = ['site_code' => 'mll', 'status' => 1];
        $where = ['status' => 1];
        $infos = $this->_getListInfos($where, 100);
        foreach ($infos as $info) {
            $file = $info->listFile();
            $info->status = 2;
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }

            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $method = $info['site_code'] . 'Deal';
            $spiderNum = $this->$method($crawler, $info);
            $info->spider_num = $spiderNum;
            $info->status = 2;
            $info->update(false);
        }
    }
}
