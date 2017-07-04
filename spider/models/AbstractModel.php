<?php
namespace spider\models;

use Yii;
use common\models\SpiderModel;
use yii\helpers\FileHelper;

class AbstractModel extends SpiderModel
{
    public $code;

    public function fileExist($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
        return file_exists($file);
    }

    public function getFile($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
        return $file;
    }

    public function getContent($file)
    {
        $file = $this->getFile($file);
        $content = file_get_contents($file);
        return $content;
    }

    public function writeFile($file, $content)
    {
        $logFile = Yii::$app->params['spiderPath'] . 'source/' . $file;
        $path = dirname($logFile);
        if (!is_dir($path)) {
            FileHelper::createDirectory($path, 0777);
        }
        return file_put_contents($logFile, $content);
    }

    protected function _getListInfos($where, $limit = 50)
    {
        $class = "\spider\models\\{$this->code}\ListModel";
        $model = new $class();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }

    protected function _listSpider($infos)
    {
        foreach ($infos as $info) {
            $fileSuffix = '';
            $file = $info->listFile();
            $info->status = 1;
            if ($this->fileExist($file)) {
                echo $file . '<br />';
                $info->update();
                continue;
            }
            //$header = get_headers($info['url_source']);
            //echo "wget -O {$info['id']}-{$info['page']}.html {$info['url_source']}<br />";
            //continue ;
            //$content = file_get_contents($info['url_source']);
            $content = $this->getRemoteContent($info['url_source']);
            $this->writeFile($file, $content);
            $info->update();
        }
    }

    protected function _showSpider($infos)
    {
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
            //$content = @ file_get_contents($url);
            $content = $this->getRemoteContent($url);
            //echo strlen($content);
            if ($content) {
                $num++;
                $this->writeFile($file, $content);
            } else {
                $header = @ get_headers($url);
                //$info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status = -1;
            }
            $info->update();
        }
        return $num;
    }
}
