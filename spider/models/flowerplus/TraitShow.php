<?php
namespace spider\models\flowerplus;

use Symfony\Component\DomCrawler\Crawler;

Trait TraitShow
{
    protected function getFiles()
    {
        $dir = '/data/htmlwww/filesys/spider/source/flowerplus/show/';
        $files = [];

		$pointFiles = [1113, 1202, 1102, 1164, 1068, 1121];
		foreach ($pointFiles as $file) {
			$files[] = $dir . $file . '.html';
		}
		return $files;
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
		//return ;
        //$where = ['inventory' => 0];
		//$where = ['source_id' => ['10004', '20015', '20036', '26', '9997','20013', '20012', '20131']];
		$where = ['source_id' => [1113, 1202, 1102, 1164, 1068, 1121]];
        $infos = $this->_getShowInfos($where, 500);
        $dir = '/data/htmlwww/filesys/spider/source/flowerplus/show/';
        $i = 1;
        foreach ($infos as $info) {
            $crawler = new Crawler();
            $file = $dir . $info['source_id'] . '.html';
            //echo $file;
            $content = file_get_contents($file);
            $crawler->addContent($content);

            $i += $this->dealSlide($crawler, $info);
            $i += $this->dealContent($crawler, $info, $content);
        }
		echo $i;
	}

	protected function dealContent($crawler, $info, $content)
	{
        $pictures = [];
        $pattern = '@<p>.*<img.*src=.*"(?P<img>.*)".*>@Us';
        preg_match_all($pattern, $content, $infos);
        $pictures = $infos['img'];
        if (empty($pictures)) {
            $pattern = '@{"type":"image","content":"(?P<img>.*)"}@Us';
            preg_match_all($pattern, $content, $infos);
            $pictures = $infos['img'];
        }
		$pictures = array_filter($pictures);
        if (empty($pictures)) {
            echo $info['source_id'] . 'nopicture<br />';
        }
		echo $info['id'] . '--p--' . count($pictures) . '<br />';
        $this->_addPicture($pictures, 'picture', $info);
		return count($pictures);
    }

    protected function dealSlide($crawler, $info)
    {
        $slides = [];
        $crawler->filter('#swip img')->each(function ($node) use (& $slides) {
            $img = $node->filter('img')->attr('data-src');
            $slides[] = $img;
        });
        if (empty($slides)) {
            $sImg = $crawler->filter('#main_pic')->attr('data-src');
            $slides[] = $sImg;
        }
		$slides = array_filter($slides);
        if (empty($slides)) {
            echo $info['source_id'] . '-noslide<br />';
        }
		//print_r($slides);
		echo $info['source_id'] . '--s--' . count($slides) . '<br />';
        $this->_addPicture($slides, 'slide', $info);
		return count($slides);
    }

    public function showDeal()
    {
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
			$pos = strpos($img, '!');
			if ($pos) {
				$img = substr($img, 0, $pos);
			}
			$pos = strpos($img, '?');
			if ($pos) {
				$img = substr($img, 0, $pos);
			}
            if (empty($img)) {
                continue;
            }
			echo $img . '<br />';
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
