<?php
namespace spider\models;

use Yii;
use common\models\SpiderModel;
use Symfony\Component\DomCrawler\Crawler;
use yii\helpers\FileHelper;

trait SpiderTrait
{
    protected function _listSpider($infos)
    {
        foreach ($infos as $info) {
            $fileSuffix = '';
            $file = $info->listFile();
            $info->status = 1;
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            //$header = get_headers($info['url_source']);
            //echo "wget -O {$info['id']}-{$info['page']}.html {$info['url_source']}<br />";
            //continue ;
            //$content = file_get_contents($info['url_source']);
            $content = $this->getRemoteContent($info['url_source']);
            $this->writeFile($file, $content);
            $info->update();
        }
    }

    protected function _showSpider($infos)
    {
        $num = 0;
        foreach ($infos as $info) {
            $info->source_status = 1;
            $url = trim($info['source_url']);
            //echo $url . '<br />';continue;
            $file = $info->showFile();
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            //$content = @ file_get_contents($url);
            $content = $this->getRemoteContent($url);
            //echo strlen($content);
            if ($content) {
                $num++;
                $this->writeFile($file, $content);
            } else {
                $header = @ get_headers($url);
                //$info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = -1;
            }
            $info->update();
        }
        return $num;
    }

    public function listDeal()
    {
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

    public function showDeal()
    {
        $where = ['source_site_code' => $this->code, 'source_status' => 1];
		print_r($where);
        $infos = $this->_getShowInfos($where, 400);
		//echo count($infos);exit();
        foreach ($infos as $info) {
            $file = $info->showFile();
            if (!$this->fileExist($file)) {
                $info->source_status = 0;
                $info->update(false);
                continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$method = "{$info['source_site_code']}Metarial";
			$spider = $this->$method($info, $crawler);
			var_dump($spider);
			if ($spider === true) {
                $info->source_status = 2;
                //print_r($info);exit();
                $info->update(false);
			}
		}
	}
}
