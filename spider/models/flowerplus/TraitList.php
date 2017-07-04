<?php
namespace spider\models\shoot;

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
            $method = in_array($info['site_code'], ['toteme', 'jingshan', 'hanhan']) ? 'dede' : $info['site_code'];
            echo $method;
            if ($method != 'shouxi') {
                //continue;
            }
            $method = $method . 'Deal';
            $spiderNum = $this->$method($crawler, $info);
            $info->spider_num = $spiderNum;
            $info->status = 2;
            $info->update(false);
        }
    }

    protected function dedeDeal($crawler, $info) 
    {
        $urlBases = [
            'hanhan' => 'http://www.hanhanstudio.com/',
            'jingshan' => 'http://www.jingshanwenhua.com/',
            'toteme' => 'http://www.toteme.cn/',
        ];
        $urlBase = $urlBases[$info['site_code']];
        $spiderNum = 0;
        $crawler->filter('.zuopin li')->each(function ($node) use ($info, &$spiderNum, $urlBase) {
            $baseElem = $node->filter('a');
            $img = $urlBase . $baseElem->filter('img')->attr('src');
            $source_url = $urlBase . $baseElem->filter('a')->attr('href');
            $name = $node->filter('h3')->text();
            $source_id = str_replace('.html', '', basename($source_url));
            //echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '<br />';
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'sample',
                    'info_field' => 'thumb',
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                ];
                $this->_addAttachment(new Attachment($aData));
            }
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'sort' => $info['sort'],
                'source_url' => $source_url,
                'tag' => '',
                'description' => '',
                'content' => '',
                'source_site_code' => $info['site_code'],
            ];
            $model = new Article($data);
            $model->insert(false);

            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function honggDeal($crawler, $info) 
    {
        //print_r($info);exit();
        $spiderNum = 0;
        $crawler->filter('.zxkp_list li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $baseElem = $node->filter('a');
            $img = $baseElem->filter('img')->attr('src');
            $source_url = $baseElem->attr('href');
            $name = $baseElem->filter('img')->attr('alt');
            $source_id = str_replace(['article-', '.html'], ['', ''], basename($source_url));
            $name = '';
            //echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '--' . $img . '<br />';
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'sample',
                    'info_field' => 'thumb',
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                ];
                $this->_addAttachment(new Attachment($aData));
            }
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'sort' => $info['sort'],
                'source_url' => $source_url,
                'description' => $name,
                'content' => $name,
                'source_site_code' => $info['site_code'],
            ];
            $model = new Article($data);
            $model->insert(false);

            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function shouxiDeal($crawler, $info) 
    {
        //print_r($info);exit();
        $spiderNum = 0;
        $crawler->filter('.n_pro_list li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $img = 'http://shouxiphotos.com/' . $node->filter('img')->attr('src');
            $source_url = $node->filter('a')->attr('href');
            $source_url = 'http://shouxiphotos.com/' . $source_url;
            $name = '';
            $source_id = str_replace(['http://shouxiphotos.com/pro_show.asp?id='], [''], $source_url);
            //echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '--' . $img . '<br />';
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'sample',
                    'info_field' => 'thumb',
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                ];
                $this->_addAttachment(new Attachment($aData));
            }
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'sort' => $info['sort'],
                'source_url' => $source_url,
                'description' => $name,
                'content' => $name,
                'source_site_code' => $info['site_code'],
            ];
            $model = new Article($data);
            $model->insert(false);

            $spiderNum++;
        });
        return $spiderNum;
    }
}
