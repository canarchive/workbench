<?php
namespace spider\models\cmsad;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

Trait ChinazListTrait
{
    public function infosListSpider($siteCode)
    {
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $this->_getListInfos($where);
        $this->_listSpider($infos);
    }

    public function infoList($siteCode)
    {
        $where = ['site_code' => $siteCode, 'status' => 1];
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
            $mark = $info['sort'] == 'yy' ? '.imgTxtBar li' : '#main article';
            $crawler->filter($mark)->each(function ($node) use ($info, &$spiderNum) {
                //print_r($node);exit();
                $attrs = $node->filter('h3 a');
                if (count($attrs) < 1) {
                    return ;
                }
                $source_url = $attrs->attr('href');
                $name = $attrs->text();
                $source_id = str_replace('.shtml', '', basename($source_url));
                $source_pic = $node->filter('img');
                $source_pic = count($source_pic) > 0 ? $source_pic->attr('src') : '';
                echo "<a href='{$info['url_source']}'>{$info['url_source']}</a>" . '--' . $source_url . '--' . $name . '--' . $source_id . '<br />';
                if (!empty($source_pic)) {
                    $aData = [
                        'source_url' => $source_pic,
                        'name' => $name,
                        'info_table' => 'article',
                        'info_field' => 'thumb',
                        'source_site_code' => $info['site_code'],
                        'source_id' => $source_id,
                    ];
                    //print_r($aData);
                    $this->_addAttachment(new Attachment($aData));
                }
                if ($info['sort'] == 'yy') {
                $description = trim($node->filter('.gray-5')->text());
                $author = '';
                $score = '';
                $tagInfos = $node->filter('.tags')->eq(0)->filter('em');
                } else {
                $description = trim($node->filter('.news-body p')->text());
                $author = $node->filter('.story-author');
                $author = count($author) > 0 ? trim($author->text()) : '';
                $score = $node->filter('.counter strong');
                $score = count($score) > 0 ? trim($score->text()) : '';
                $tagInfos = $node->filter('.user-details')->eq(0)->filter('em');
                }
                $tags = '';
                foreach ($tagInfos as $tag) {
                    $tags .= trim($tag->nodeValue) . ' ';
                }
                $data = [
                    'source_id' => $source_id,
                    'name' => $name,
                    'category_code_first' => $info['sort'],
                    'category_code' => $info['sort_sub'],
                    'source_url' => $source_url,
                    'author' => $author,
                    'score' => $score,
                    'tags' => $tags,
                    'description' => $description,
                    'source_site_code' => $info['site_code'],
                ];
                //print_r($data);
                $model = new Article($data);
                $model->insert(false);

                $spiderNum++;
            });
            $info->spider_num = $spiderNum;
            $info->status = 2;
            //print_r($info);exit();
            $info->update(false);
        }
    }

    public function _sourcePic($node, $sort)
    {
        switch ($sort) {
        case 'yy':
        default:
        }
        //echo $source_url . '--' . $name . '--' . $source_id;
        return [$name, $source_url, $source_id, $source_pic];
        echo 'sss';
    }
}
