<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait EaleCStarTrait
{

    public function spiderCustomer($siteCode)
    {
        //exit('finish');
        $file = "{$siteCode}/site/eale-aboutus-customer.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.row .col-md-2')->each(function ($node) use (& $i) {
            $cModel = new Customer();
            $name = trim($node->filter('.title-bg')->text());
            $url = trim($node->filter('a')->attr('href'));
            $pic = trim($node->filter('img')->attr('src'));
            $cModel->name = $name;
            $cModel->url = $url;
            $cModel->thumb = $i;
            $cModel->insert(false);
            echo $name . '--' . $url  . '--' . $pic . '<br />';

            $aData = [
                'source_url' => $pic,
                'name' => $name,
                'info_table' => 'customer',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $i,
            ];
            print_r($aData);
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }

    public function spiderStar($siteCode)
    {
        //exit('finish');
        $file = "{$siteCode}/site/eale-aboutus-star.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.row .col-md-2')->each(function ($node) use (& $i) {
            $cModel = new Star();
        //$model->insert(false);
            $name = trim($node->filter('.title-bg')->text());
            $url = trim($node->filter('a')->attr('href'));
            $pic = trim($node->filter('img')->attr('src'));
            $cModel->name = $name;
            $cModel->url = $url;
            $cModel->thumb = $i;
            $cModel->insert(false);
            echo $name . '--' . $url  . '--' . $pic . '<br />';

            $aData = [
                'source_url' => $pic,
                'name' => $name,
                'info_table' => 'star',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $i,
            ];
            print_r($aData);
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }
}
