<?php
namespace spider\models\dnflower;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use Overtrue\Pinyin\Pinyin;

Trait TraitList
{
    public function listSpider()
    {
        $where = ['status' => 0];
        $infos = $this->_getListInfos($where);
        $this->_listSpider($infos);
    }

    protected function dnflowerDeal($crawler, $info) 
    {
        $spiderNum = 0;
        $crawler->filter('#shopcenter .productpic')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $baseElem = $node->filter('a');
            $img = $baseElem->filter('img')->attr('src');
			$name = $baseElem->attr('title');
			$source_url = $baseElem->attr('href');

            $source_id = str_replace('/Shop/ShowProduct.asp?ProductID=', '', $source_url);
			$source_url = 'http://www.dnflower.com' . $source_url;

            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'sort' => $info['sort'],
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
			//print_r($data);exit();
            $model = new Article($data);
            $model->insert(false);
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'flower_metarial',
                    'info_field' => 'thumb',
					'info_id' => $model->id,
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                ];
                $this->_addAttachment(new Attachment($aData));
				//print_r($aData);
            }

            $spiderNum++;
        });
        return $spiderNum;
    }
}
