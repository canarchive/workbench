<?php
namespace spider\models\cmsad;

use Yii;
use Symfony\Component\DomCrawler\Crawler;

Trait ChinazShowTrait
{

    public function showSpider($siteCode)
    {
        $where = ['source_site_code' => $siteCode, 'source_status' => 0];
        $infos = $this->_getShowInfos($where, 100);
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
            $content = @ file_get_contents($url);
            //$content = $this->getRemoteContent($url);
            //echo strlen($content);
            if ($content) {
                $num++;
                $this->writeFile($file, $content);
            } else {
                $header = @ get_headers($url);
                $info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = -1;
            }
            $info->update();
        }
        echo $num;
    }
}
