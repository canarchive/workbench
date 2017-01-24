<?php

namespace spider\page\models;

use Yii;
use yii\helpers\FileHelper;

class Page extends AbstractModel
{
    public $urlInfo;

    public function getIsMobileInfos()
    {
        $datas = [
            0 => 'PC端页面',
            1 => '移动端页面',
            2 => '自适应页面',
        ];

        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            0 => '录入',
            1 => '一次采集',
            2 => '二次采集',
        ];

        return $datas;
    }

    public function getIsbakInfos()
    {
        $datas = [
            0 => '已启用',
            1 => '备用',
        ];
        return $datas;
    }

    public function spider()
    {
        $this->urlInfo = parse_url($this->url);
        $file = $this->_getFile();
        if (!file_exists($file)) {
            $this->status = 0;
            $this->update(false);
            echo $file . '---no<br />';
        }

        $content = file_get_contents($file);
        $assets = $this->getAssets($content);
        foreach ($assets as $asset) {
            $data = $this->formatFile($asset);
            if (empty($data)) {
                continue;
            }
            $data['page_id'] = $this->id;
            $data['sort'] = 'page';
            $this->_getAsset()->addInfo($data, $this);
            $this->status = 1;
            $this->update(false);
        }
    }

    public function deal()
    {
        $this->urlInfo = parse_url($this->url);
        $file = $this->_getFile();
        if (!file_exists($file)) {
            $this->status = 0;
            $this->update(false);
            echo $file . '---no<br />';
        }
        $fileDeal = str_replace('source', 'source-deal', $file);
        if (file_exists($fileDeal)) {
            echo $fileDeal . '---exists<br />';
            return ;
        }

        $content = file_get_contents($file);
        $assets = $this->getAssets($content);
        $urlPrefix = Yii::$app->params['pageAssetUrl'] . 'asset/';
        $rDatas = [];
        foreach ($assets as $asset) {
            $data = $this->formatFile($asset);
            if (empty($data)) {
                continue;
            }
            $aData = $this->_getAsset()->findOne(['url_base' => $data['url_base']]);
            $rDatas[$asset] = $urlPrefix . $aData['path'];
            $this->status = 2;
            //$this->update(false);
        }
        FileHelper::createDirectory(dirname($fileDeal));
        $contentNew = str_replace(array_keys($rDatas), array_values($rDatas), $content);
        file_put_contents($fileDeal, $contentNew);
    }

    public function getLocalName()
    {
        $name = $this->name . '-' . $this->isMobileInfos[$this->is_mobile];
        return $name;
    }

    public function getUrlLocalName()
    {
        $name = $this->getLocalName();
        $url = $this->_getFileUrl();
        $file = $this->_getFile();
        if (file_exists($file)) {
            return "<a href='{$url}' target='_blank'>{$name}</a>";
        }
        return $name;
    }

    public function getOpeStr()
    {
        $spiderUrl = "/page/tmp/spider.html?id={$this->id}";
        $firstUrl = $spiderUrl . '&sort=first';
        $secondUrl = $spiderUrl . '&sort=second';
        $str = '';
        switch ($this->status) {
        case 0:
            $str = "<a href='{$firstUrl}' target='_blank'>一次采集</a>";
            break;
        case 1:
            $str = "<a href='{$secondUrl}' target='_blank'>二次采集</a>";
            break;
        }

        return $str;
    }

    protected function _getFile($full = true)
    {
        $isMobile = $this->is_mobile == 1 ? '-m' : '';
        $file = "source/{$this->site_code}{$isMobile}/{$this->code}.php";
        if ($full) {
            $path = Yii::$app->params['spiderPath'] . 'pages/';
            $file = $path . $file;
        }
        return $file;
    }

    protected function _getFileUrl()
    {
        $url = Yii::$app->params['pageAssetUrl'];
        $file = $this->_getFile(false);

        return $url . $file;
    }
}
