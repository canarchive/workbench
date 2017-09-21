<?php
namespace spider\models\dnflower;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait TraitShow
{

    public function showSpider()
    {
        $where = ['source_status' => 0];
        $infos = $this->_getShowInfos($where, 200);
        $num = $this->_showSpider($infos);
        echo $num;
    }

	public function dnflowerMetarial($info, $crawler)
	{
		//echo $info['source_id'];
        $elems = $crawler->filter('.content_point tr');
        $count = count($elems);
		$i = 0;
		$data = [];
        $crawler->filter('.content_point tr')->each(function ($node) use ($info, & $data, & $i) {
			echo $i . '<br />';
			//print_r($node);exit();
			switch ($i) {
			case 0:
				$img = $node->filter('.pic5')->attr('src');
				$data['img'][] = $img;
                $elems = $node->filter('td');
				$data['alias'] = $elems->eq(8)->text();
				break;
			case 3:
                $elems = $node->filter('td');
				$data['standard'] = $elems->eq(1)->text();
				$data['level'] = $elems->eq(3)->text();
				break;
			case 4:
                $elems = $node->filter('td');
				$data['length'] = $elems->eq(1)->text();
				$data['opening'] = $elems->eq(3)->text();
				break;
			case 5:
                $elems = $node->filter('td');
				$data['weigh'] = $elems->eq(1)->text();
				$data['price'] = $elems->eq(3)->text();
				break;
			case 11:
				$data['price_desc'] = $node->text();
				break;
			case 13:
				$data['fault_desc'] = $node->text();
				break;
			case 15:
				$data['order_desc'] = $node->text();
				break;
			case 17:
				$data['pack_desc'] = $node->text();
				break;
			case 19:
				$data['transfer_desc'] = $node->text();
				break;
			case 22:
				$data['description'] = trim($node->text());
                $node->filter('a')->each(function ($subNode) use (& $data) {
				    $img = $subNode->attr('href');
					
                    $data['img'][] = $img;
                });
				break;
			}
			$i++;
			//echo $i;

            //$value = trim($node->nodeValue) . ' ';
			//echo $i . $value . '<br />';
        });

		return $this->writeTable($info, $data);
	}

	protected function writeTable($info, $data)
	{
		if (!isset($data['img'])) {
			echo $info['source_id'];
			return false;
		}
		$imgs = $data['img'];
		unset($data['img']);
		foreach ($data as $key => $value) {
			$value = str_replace(["\n", "\r", ' '], ['', '', ''], $value);
			$info->$key = $value;
		}
		$info->update(false);
		//print_r($info);
		foreach ($imgs as $key => $img) {
            $img = 'http://www.dnflower.com' . str_replace('_S', '', $img);
            $aData = [
                'source_url' => $img,
                'name' => $info['name'],
                'info_table' => 'flower_metarial',
                'info_field' => 'picture',
				'info_id' => $info['id'],
                'source_site_code' => $info['source_site_code'],
                'source_id' => $info['source_id'],
            ];
            $this->_addAttachment(new Attachment($aData));
			//print_r($aData);
        }
		return true;
	}
}
