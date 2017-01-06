<?php
namespace spider\models\sinfo;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait ListTrait
{
    public function infosListSpider($siteCode)
    {
        $where = ['status' => 0];
        $infos = $this->_getListInfos($where);
        $this->_listSpider($infos);
    }

    public function infoList($siteCode)
    {
        $where = ['status' => 1];
        $infos = $this->_getListInfos($where, 200);
        foreach ($infos as $info) {
            $file = $info->listFile();
            $info->status = 2;
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }

            $spiderNum = 0;
            $crawler = new Crawler();
            echo $file;
            $crawler->addContent($this->getContent($file));
            $method = "_{$info['site_code']}";
            $this->$method($crawler, $info);

            $info->spider_num = $spiderNum;
            $info->status = 2;
            //print_r($info);exit();
            //$info->update(false);
        }
    }

    protected function _laiyixia($crawler, $info) 
    {
        $spiderNum = 0;
        $crawler->filter('.pageNews li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('.date')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _baisou($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.box_left .text ul li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('b')->text();
            $created_at = strtotime('2016-' . $created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'source_url' => 'http://www.shbaisou.com' . $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _sousuopai($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.postlist li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('span')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _lrblog($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.posts-ul li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('.fa fa-clock-o fa-fw')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _sogou($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.news-list li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('h3 a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('.s2')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $description = $node->filter('.txt-info')->text();
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'description' => $description,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _92991($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.main .coll')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $node->filter('.clla_ar p')->text();
            $created_at = $node->filter('.clla_al')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $description = $node->filter('.clla_ar')->text();
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'description' => $description,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _51soudao($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.cms2 .li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('.ntitle a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('.date')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $description = $node->filter('.dp')->text();
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'description' => $description,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }

    protected function _qqluowang($crawler, $info)
    {
        $spiderNum = 0;
        $crawler->filter('.NewsList li')->each(function ($node) use ($info, &$spiderNum) {
            //print_r($node);exit();
            $attrs = $node->filter('.NewsTitle a');
            if (count($attrs) < 1) {
                return ;
            }
            $source_url = $attrs->attr('href');
            $name = $attrs->text();
            $created_at = $node->filter('.NewsTime')->text();
            $created_at = strtotime($created_at);
            $source_id = str_replace('.html', '', basename($source_url));
            $description = $node->filter('.NewsDatail')->text();
            $data = [
                'source_id' => $source_id,
                'name' => $name,
                'created_at' => $created_at,
                'description' => $description,
                'source_url' => $source_url,
                'source_site_code' => $info['site_code'],
            ];
            print_r($data);exit();
            $model = new Article($data);
            //$model->insert(false);
            $spiderNum++;
        });
        return $spiderNum;
    }
}
