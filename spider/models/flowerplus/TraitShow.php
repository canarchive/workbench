<?php
namespace spider\models\flowerplus;

use Symfony\Component\DomCrawler\Crawler;

Trait TraitShow
{
	protected function getFiles()
	{
		$dir = '/data/htmlwww/filesys/spider/source/flowerplus/show/';
		$files = [];
        if ($handle = opendir($dir)) {
            while ($file = readdir($handle)) {
				if ($file != '.' && $file != '..') {
					$files[] = $dir . $file;
				}
            }
            closedir($handle);
        }
		return $files;
    }
	
	public function pictureDeal()
	{
        $where = ['inventory' => 0];
        $infos = $this->_getShowInfos($where, 500);
		$dir = '/data/htmlwww/filesys/spider/source/flowerplus/show/';
		foreach ($infos as $info) {
            $crawler = new Crawler();
			$file = $dir . $info['source_id'] . '.html';
			echo $file;
			$content = file_get_contents($file);
            $crawler->addContent($content);

			echo $info['id'];
			echo $content;
			exit();
			$slides = [];

            $crawler->filter('#swip img')->each(function ($node) use (& $slides) {
                $img = $node->filter('img')->attr('src');
				$slides[] = $img;
            });
			/*if (empty($slides)) {
				$sImg = $crawler->filter('#main_pic')->attr('data-src');
				$slides[] = $sImg;
			}*/
			if (empty($slides)) {
				echo $info['id'] . '-noslide<br />';
			}
			print_r($slides);
			//$this->_addPicture($slides, 'slide', $info);
			continue;

			$pictures = [];
            $pattern = '@<p><img .*src=.*"(?P<img>.*)" .*></p>@Us';
            preg_match_all($pattern, $content, $infos);
            $pictures = $infos['img'];
			if (empty($pictures)) {
			    $pattern = '@{"type":"image","content":"(?P<img>.*)"}@Us';
                preg_match_all($pattern, $content, $infos);
                $pictures = $infos['img'];
			}
			foreach ($pictures as & $picture) {
				$picture = str_replace('\\', '', $picture);
			}
			if (empty($pictures)) {
				echo $info['id'] . 'nopicture<br />';
			}

			//$this->_addPicture($pictures, 'picture', $info);
        }
    }

    public function showDeal()
    {
		return ;
		$files = $this->getFiles();
		$i = 0;
        foreach ($files as $file) {
            $crawler = new Crawler();
			$content = file_get_contents($file);
            $crawler->addContent($content);

            $name = $crawler->filter('.produt-title');//->text();
			if (count($name) == 0) {
				echo filesize($file) . '--' . $file . '<br />';
				continue;
			}
			$name = $name->text();
            $brief = $crawler->filter('.produt-subtitle')->text();
            $priceRange = $crawler->filter('#price')->text();
			$data = [
				'name' => trim($name),
			    'brief' => trim($brief),
				'price_range' => trim($priceRange),
				'source_site' => 'flowerplus',
				'source_id' => str_replace('.html', '', basename($file)),
				'source_status' => 0,
			];
			$i++;

			$info = new Goods($data);
			$info->insert(false);
			continue;
		}
	}

    protected function _addPicture($imgs, $field, $info)
    {
		foreach ($imgs as $img) {
			$img = str_replace('\\', '', $img);
			if (empty($img)) {
				continue;
			}
            $aData = [
                'source_url' => $img,
                'name' => $info['name'],
                'info_table' => 'goods',
                'info_field' => $field,
    			'info_id' => $info['id'],
                'source_site_code' => 'flowerplus',
                'source_id' => $info['source_id'],
            ];
            $this->_addAttachment(new Attachment($aData));
		}
        return true;
    }
}
