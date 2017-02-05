<?php

namespace spider\page\models;

use Yii;
use yii\helpers\FileHelper;

class Asset extends AbstractModel
{
    public function addInfo($data, $pageInfo)
    {
        $info = $this->findone(['url_base' => $data['url_base']]);
        if (empty($info)) {
            $data['code'] = $this->_createCode($data);
            $data['path'] = $this->_createPath($data, $pageInfo);
            //print_r($data);return;
            $new = new self($data);
            $new->insert(false);
        } /*else {
            $info->css_id = $data['css_id'];//$info->code . '<br />';
            echo $info->css_id . '<br />';

            $info->status = 3;
            $info->update(false);
        }*/
    }

    public function spider()
    {
        if ($this->name_ext != 'css') {
            return ;
        }
        $this->urlInfo = parse_url($this->url);

        $path = Yii::$app->params['spiderPath'] . 'pages/source/css/';
        $file = $path . $this->path;
        if (!file_exists($file)) {
            $this->status = 0;
            $this->update(false);
            echo 'nono---' . $file . '<br />';
            return ;
        }

        $pageInfo = Page::findOne($this->page_id);
        $content = file_get_contents($file);
        $assets = $this->getAssets($content);
        foreach ($assets as $asset) {
            $data = $this->formatFile($asset);
            if (empty($data)) {
                continue;
            }
            $data['page_id'] = $this->page_id;
            $data['sort'] = 'ext';
            $data['css_id'] = $this->id;
            $this->_getAsset()->addInfo($data, $pageInfo);
            //$this->status = 2;
            //$this->update(false);
        }
    }

    public function deal()
    {
        if ($this->name_ext != 'css') {
            return ;
        }

        $path = Yii::$app->params['spiderPath'] . 'pages/source/css/';
        $file = $path . $this->path;
        if (!file_exists($file)) {
            $this->status = 0;
            $this->update(false);
            echo 'nono---' . $file . '<br />';
            return ;
        }
        $fileDeal = str_replace('source/css', 'asset', $file);
        if (file_exists($fileDeal)) {
            echo $fileDeal . '---exists<br />';
            return ;
        }

        $content = file_get_contents($file);
        $assets = $this->getAssets($content);
        $rDatas = [];
        foreach ($assets as $asset) {
            $data = $this->formatFile($asset);
            if (empty($data)) {
                continue;
            }
            $aData = $this->_getAsset()->findOne(['url_base' => $data['url_base']]);
            $rDatas[$asset] = $aData['sort'] == 'page' ? '../img/' . $aData['code'] : '../images/' . $aData['code'];
            $this->status = 2;
            //$this->update(false);
        }
        FileHelper::createDirectory(dirname($fileDeal));
        $contentNew = str_replace(array_keys($rDatas), array_values($rDatas), $content);
        file_put_contents($fileDeal, $contentNew);
    }

    public function down()
    {
        $path = Yii::$app->params['spiderPath'] . 'pages/';
        $path .= $this->name_ext == 'css' ? 'source/css/' : 'asset/';
        $file = $path . $this->path;
        //echo $file . '<br />';return;
        if (!file_exists($file)) {
            echo "<a href='{$this->url}' target='_blank'>{$this->url}</a><br />";
            FileHelper::createDirectory(dirname($file));
            //$content =  @ file_get_contents($this->url);
            $content = $this->getRemoteContent($this->url);
            if ($content) {
                file_put_contents($file, $content);
                $this->status = 1;
            } else {
                $headers = @ get_headers($this->url);
                print_r($headers);
                $this->status = -1;
            }
        } else {
            //echo filesize($file) . '<br />';
        }
        $this->update(false);
        //print_r($this);exit();
    }

    public function _createCode($data)
    {
        if ($data['name_ext'] != 'js') {
            return substr(md5($data['url']), 0, 5) . '-' . rand(1000, 9999) . '.' . $data['name_ext'];
        }

        $code = strtolower(str_replace('.js', '', $data['name'])) . '.js';
        foreach ($this->siteInfos as $sKey => $info) {
            if (strpos($code, $sKey) !== false) {
                $code = str_replace($sKey, $info['code'], $code);
            }
        }
        return $code;
    }

    public function _createPath($data, $pageInfo)
    {
        $siteInfo = $this->siteInfos[$pageInfo->site_code];
        $path = "{$siteInfo['code']}/";
        
        $path .= $pageInfo['is_mobile'] == 1 ? 'm/' : '';
        if (in_array($data['name_ext'], ['js', 'css'])) {
            $path .= "{$data['name_ext']}/";
        } else {
            $path .= $data['sort'] == 'ext' ? 'images/' : 'img/';
        }
        $path .= $data['code'];
        return $path;
    }

    public function getSiteInfos()
    {
        $siteInfos = require(Yii::getAlias('@spider') . '/config/page/site.php');
        return $siteInfos;
    }

    public function getPageInfo()
    {
        $model = new Page();
        $info = $model->findOne($this->page_id);
        return $info;
    }
}
