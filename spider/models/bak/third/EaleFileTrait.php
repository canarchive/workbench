<?php
namespace spider\models\third;

use Yii;
use yii\helpers\FileHelper;

Trait EaleFileTrait
{
    public function fileCheck($siteCode)
    {
        $model = new Attachment();
        $where = ['source_status' => 0];
        $infos = $model->find()->where($where)->limit(300)->all();
        //$localBase = 'http://sj.shedaojia.com/';
        $localBase = 'http://upthird.up.acanstudio.com/';
        $pathBase = '/data/htmlwww/filesys/upthird/';
        foreach ($infos as $info) {
            $sFile = $info['source_url'];
            $sFile = strpos($sFile, '@') !== false ? substr($sFile, intval(strpos($sFile, '@')) + 1) : $sFile;
            //echo $sFile . '--';
            $pos1 = strrpos($sFile, '/');
            $sFile = $pos1 > 0 ? substr($sFile, $pos1 + 1) : $sFile;
            //echo $sFile , '<br />';continue;
            $pos = strpos($sFile, '?');
            $sFile = $pos ? substr($sFile, 0, $pos) : $sFile;
            $fileOld = $pathBase . 'eale/picbefore/' . $sFile;
 
            if (!file_exists($fileOld)) {
                echo 'no--' . $fileOld . '<br />';
                continue;
            }
            $file = $pathBase . 'eale/asset/' . $sFile;
            copy($fileOld, $file);

            $pathInfo = pathinfo($file);
            $extName = isset($pathInfo['extension']) ? $pathInfo['extension'] : '';
            $extName = $pos = strpos($extName, '?') ? substr($extName, 0, strpos($extName, '?')) : $extName;

            $filepath = str_replace($pathBase, '', $file);
            $info->source_status = 1;
            $info->extname = $extName;
            $info->filepath = $filepath;
            $info->size = @ filesize($file);
            $info->type = !is_null(FileHelper::getMimeType($file)) ? FileHelper::getMimeType($file) : '';
            $info->created_at = Yii::$app->params['currentTime'];
            $info->update(false);
            echo "<a href='{$localBase}{$filepath}' target='_blank'>{$file}</a>--<a href='{$info['source_url']}' target='_blank'>{$info['source_url']}</a><br />";
            //print_r($info);exit();
        }
    }
}
