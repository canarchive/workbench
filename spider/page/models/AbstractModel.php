<?php

namespace spider\page\models;

use yii\helpers\FileHelper;
use common\models\SpiderModel as ModelBase;

class AbstractModel extends ModelBase
{
    protected $validExtNames = ['js', 'css', 'png', 'jpg', 'gif', 'ico', 'jpeg', 'eot', 'ttf', 'woff', 'svg', 'cur'];
    public $urlInfo;

    protected function formatFile($urlRemote)
    {
        $url = $this->_formatUrl($urlRemote);
        $urlBase = strpos($url, '?') !== false ? substr($url, 0, strpos($url, '?')) : $url;
        $name = basename($urlBase);

        $extName = $this->extNameCheck($name);
        if (!in_array($extName, $this->validExtNames)) {
            echo $extName . '--' . $name . '--' . $urlRemote . '<br />';
            return false;
        }
        $data = [
            'name_ext' => $extName,
            'name' => $name,
            'url' => $url,
            'url_remote' => $urlRemote,
            'url_base' => $urlBase,
        ];

        return $data;
    }

    protected function _formatUrl($urlBase)
    {
        $urlBase = str_replace(['"', "'", ' '], ['', '', ''], $urlBase); 
        $url = strpos($urlBase, '//') === 0 ? 'http:' . $urlBase : $urlBase;
        //echo $url . '<br />';
        if (strpos($url, 'http') !== false) {
            return $url;
        }
        /*if (!isset($this->urlInfo)) {
            echo $this->url;
            print_r($this);
            exit();
        }*/
        if (substr($url, 0, 1) == '/') {
            $url = $this->urlInfo['scheme'] . '://' . $this->urlInfo['host'] . $url;
            //echo "<a href='{$url}' target='_blank'>{$url}</a>--{$urlBase}=={$this->url}<br />";
            return $url;
        }

        $last = substr($this->url, -1);
        $posNum = strripos($this->url, '/');
        $baseUrlPre = $posNum == 6 ? $this->url : dirname($this->url);
        $urlPre = $last == '/' ? $this->url : $baseUrlPre . '/';
        if (substr($url, 0, 1) != '.' || substr($url, 0, 2) == './') {
            $url = $urlPre . $url;
            //echo "<a href='{$url}' target='_blank'>{$url}</a>--{$urlBase}==<a href='{$this->url}' target='_blank'>{$this->url}</a><br />";
            return $url;
        }
        for ($i = 0; substr($url, 0, 3) == '../'; $i++) {
            $urlPre = dirname($urlPre);
            $url = substr($url, 3);
        }
        $url = $urlPre . '/' . $url;
        //echo "<a href='{$url}' target='_blank'>{$url}</a>--{$urlBase}==<a href='{$this->url}' target='_blank'>{$this->url}</a><br />";
        return $url;
    }

    protected function extNameCheck($name)
    {
        $dotPos = strripos($name, '.');
        if ($dotPos === false) {
            //echo $name . '--' . $baseUrl . '==' . $urlRemote . '<br />';
            return '';
        }

        $extName = strtolower(substr($name, $dotPos + 1));
        return $extName;
    }

    protected function getAssets($content)
    {
        $patterns = $this->getPatterns();
        $datas = []; 
        foreach ($patterns as $pattern) {
            preg_match_all($pattern, $content, $url);
            if (is_array($url)) {
                $datas = array_merge($datas, $url['url']);
            }
        }
        $datas = array_unique($datas);
        return $datas;
    }

    function downFile($url, $basefile,  $isForce = false)
    {
        $cssPrefix = $this->configs['isCss'] ? '/images/' : '/img/';
        $path = $this->configs['rootPath'] . '/asset/' . $this->configs['code'] . $cssPrefix;
        if (!is_dir($path)) {
            mkdir($path, '0755', true);
        }
        $localFile = $this->configs['rootPath'] . '/asset/' . $this->configs['code'] . $cssPrefix . $basefile;
        $url = str_replace('com//', 'com/', $url);
        $data['file'] = $localFile;
        $data['exist'] = $exist = file_exists($localFile);
        if (!$this->configs['down'] || $exist || empty($url)) {
            return $data;
        }
        //echo "wget -O {$localFile} {$url}\n<br />";
        //return ;
        
        //$fileInfos = pathinfo($url);
        $remoteContent = file_get_contents($url);
        $remoteContent && file_put_contents($localFile, $remoteContent);
        return true;
    }
    
    protected function getPatterns()
    {
        $patterns = [ 
            '@data-original="(?P<url>.*)"@Us',
            '@data-source="(?P<url>.*)".*@Us',
            '@src= *"(?P<url>.*)".*@Us',
            "@src= *'(?P<url>.*)'.*@Us",
            '@<link.*type="text/css".*href="(?P<url>.*)".*>@Us',
            "@url\( *'(?P<url>.*)'.*\)@Us",
            '@url\( *"(?P<url>.*)".*\)@Us',
            '@url\((?P<url>.*)\)@Us',
            "@<link.*href='(?P<url>.*\.css)'.*>@Us",
            '@<link.*href="(?P<url>.*)".*>@Us',
        ];

        return $patterns;
    }

    protected function _getAsset($new = false, $data = [])
    {
        static $model = null;

        if (is_null($model) || $new) {
            $model = new Asset($data);
        }
        return $model;
    }
}
