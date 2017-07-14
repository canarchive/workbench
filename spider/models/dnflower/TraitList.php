<?php
namespace spider\models\news;

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

    protected function jiaDeal($crawler, $info) 
    {
        $spiderNum = 0;
        $crawler->filter('.news_matter li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $baseElem = $node->filter('.news_matter_img');
            $img = $baseElem->filter('img')->attr('src');
            $source_url = $baseElem->filter('a')->attr('href');
            $name = $node->filter('h3')->text();
            $source_id = str_replace('.html', '', basename($source_url));
            //echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '<br />';
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'article',
                    'info_field' => 'thumb',
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                ];
                $this->_addAttachment(new Attachment($aData));
            }
            $descriptions = $node->filter('p');//->text());
            foreach ($descriptions as $description) {
                $d = $description->nodeValue;
            }
            $tags = '';
            $tagInfos = $node->filter('.tag_small a');//->eq(0)->filter('em');
            foreach ($tagInfos as $tag) {
                $tags .= trim($tag->nodeValue) . ' ';
            }
            $createdAt = $node->filter('.time_details span')->eq(0)->text();
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'sort' => $info['sort'],
                'source_url' => $source_url,
                'tags' => $tags,
                'description' => $d,
                'content' => $d,
                'source_created' => $createdAt,
                'source_site_code' => $info['site_code'],
            ];
            $model = new Article($data);
            $model->insert(false);

            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function mllDeal($crawler, $info) 
    {
        //print_r($info);exit();
        $spiderNum = 0;
        $crawler->filter('.zxcate_list_box dl')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $baseElem = $node->filter('h3');
            $img = $node->filter('dt a img')->attr('data-src');
            $source_url = $baseElem->filter('a')->attr('href');
            $source_url = 'http://zx.meilele.com' . $source_url;
            $name = $baseElem->filter('a')->text();
            $source_id = str_replace(['article-', '.html'], ['', ''], basename($source_url));
            //echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '--' . $img . '<br />';
            if (!empty($img)) {
                $aData = [
                    'source_url' => $img,
                    'name' => $name,
                    'info_table' => 'article',
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
