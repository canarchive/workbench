<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

trait EaleDealTrait
{
    public function dealInfoList()
    {
        $sorts = [
            'eale' => ['eale-info-list.html', 'eale-info-list-2.html'],
            'ieale' => ['ieale-info-list.html'],
            'iealecn' => ['iealecn-info-list.html'], 
            'train' => ['iealecn-info-train.html'],
        ];
        
        foreach ($sorts as $code => $files) {
            foreach ($files as $file) {
                $file = "eale/site/{$file}";
                echo $file . '<br/>';
                $this->_dealNews($file, $code);
            }
        }

    }

    protected function _dealNews($file, $code)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.col-nopadding')->each(function ($node) use (& $i, $code) {
            $cModel = new Info();
            $url = trim($node->filter('a')->attr('href'));
            $pic = trim($node->filter('.img-responsive')->attr('src'));
            $name = trim($node->filter('.img-responsive')->attr('alt'));
            $title = count($node->filter('.subtitle')) > 0 ? trim($node->filter('.subtitle')->text()) : '';
            $urlPre = '';
            if (strpos($url, 'http') === false) {
            $urlPre = $info['code'] == 'eale' ? 'http://www.eale.cc' : 'http://www.ieale.com';
            $urlPre = $info['code'] == 'iealecn' ? 'http://www.ieale.cn' : $urlPre;
            }
            $sourceId = str_replace('.html', '', basename($url));

            $cModel->name = $name;
            $cModel->sort = $code;
            $cModel->sort_name = '';
            $cModel->tag_name = '';
            $cModel->tag = '';
            $cModel->source_url = $urlPre . str_replace('../', '/', $url);
            $cModel->source_id = $sourceId;
            $cModel->thumb = $i;
            $cModel->title = $title;
            $cModel->content = '';
            $cModel->insert(false);
            //print_r($cModel);

            $pos = strpos($pic, '?');
            $pic = $pos ? substr($pic, 0, $pos) : $pic;
            $pic = str_replace('@', '', $pic);

            $aData = [
                'source_url' => $pic,
                'name' => $name,
                'info_table' => 'info',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $code . '-' . $sourceId,
            ];
            //print_r($aData);
            echo $name . '--' . $urlPre . str_replace('../', '/', $url)  . '--' . $pic . '--' . $title . '<br />';
            $this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }


    public function dealSampleList($siteCode)
    {
        //exit('finish');
        $datas = require Yii::getAlias('@spider') . '/config/params-eale-sort1.php';

        $urlPres = [
            'eale' => 'http://www.eale.cc',
            'ieale' => 'http://www.ieale.com',
            'iealecn' => 'http://www.ieale.cn',
        ];
        foreach ($datas as $data) {
            $code = $data['code'];
            $sort = $data['sort'];
            for ($i = 1; $i <= $data['page']; $i++) {
                $file = "eale/listext/{$code}-{$sort}-{$i}.html";

                if ($file != 'eale/listext/iealecn-studentworks-1.html') {
                continue;
                }
                echo $file . '<br />';

                $info = [
                    'code' => $code,
                    'sort' => $sort,
                    'codeTag' => '',
                    'name' => $data['name'],
                    'tag' => '',
                ];
                $this->_dealFile($file, $info);
            }
        }
    }

    public function dealSampleTag($siteCode)
    {
        //exit('finish');
        $datas = require Yii::getAlias('@spider') . '/config/params-eale-sort.php';
        foreach ($datas as $key => $data) {
            foreach ($data['subInfo'] as $subInfo) {
                for ($i = 1; $i < 6; $i++) {
                    $file = 'eale/list/' . $data['code'] . '-' . $data['sort'] . '-' . $subInfo['codeTag'] . '-' . $i . '.html';
                    echo $file . '<br />';
                    $info = [
                        'code' => $data['code'],
                        'sort' => $data['sort'],
                        'codeTag' => $subInfo['codeTag'],
                        'name' => $data['name'],
                        'tag' => $subInfo['tag'],
                    ];
                    $this->_dealFile($file, $info);
                }
            }
        }
    }

    protected function _dealFile($file, $info)
    {
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $i = 1;
        $crawler->filter('.col-nopadding')->each(function ($node) use (& $i, $info) {
            $cModel = new Sample();
            $url = trim($node->filter('a')->attr('href'));
            $pic = trim($node->filter('img')->attr('src'));
            $name = trim($node->filter('img')->attr('alt'));
            $title = count($node->filter('.subtitle')) > 0 ? trim($node->filter('.subtitle')->text()) : '';
            $urlPre = '';
            if (strpos($url, 'http') === false) {
            $urlPre = $info['code'] == 'eale' ? 'http://www.eale.cc' : 'http://www.ieale.com';
            $urlPre = $info['code'] == 'iealecn' ? 'http://www.ieale.cn' : $urlPre;
            }
            $sourceId = str_replace('.html', '', basename($url));

            $cModel->name = $name;
            $cModel->sort = $info['sort'];
            $cModel->sort_name = $info['name'];
            $cModel->tag_name = $info['tag'];
            $cModel->tag = $info['codeTag'];
            $cModel->source_url = $urlPre . str_replace('../', '/', $url);
            $cModel->source_id = $sourceId;
            $cModel->thumb = $i;
            $cModel->title = $title;
            $cModel->content = '';
            //$cModel->insert(false);

            $pos = strpos($pic, '?');
            $pic = $pos ? substr($pic, 0, $pos) : $pic;
            $pic = str_replace('@', '', $pic);

            $aData = [
                'source_url' => $pic,
                'name' => $name,
                'info_table' => 'sample',
                'info_field' => 'thumb',
                'source_site_code' => 'eale',
                'source_id' => $info['sort'] . '-' . $sourceId,
            ];
            echo $name . '--' . $urlPre . str_replace('../', '/', $url)  . '--' . $pic . '--' . $title . '<br />';
            //$this->_addAttachment(new Attachment($aData));
            $i++;
             
        });
    }

}
