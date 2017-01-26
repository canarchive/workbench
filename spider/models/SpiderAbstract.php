<?php
namespace spider\models;

use Yii;
use common\models\SpiderModel;
use yii\helpers\FileHelper;

class SpiderAbstract extends SpiderModel
{

    public function fileExist($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
        return file_exists($file);
    }

    public function getContent($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
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

    protected function _listSpider($infos)
    {
        foreach ($infos as $info) {
            $fileSuffix = '';
            $file = $info->listFile();
            $info->status = 1;
            $info->updated_at = Yii::$app->params['currentTime'];
            if ($this->fileExist($file)) {
                //echo $file . '<br />';
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

    protected function _addAttachment($model)
    {
        if (strlen($model->source_url) > 200) { return ;}
        $model->path_prefix = 'default';
        $model->url_prefix = 'default';
        $model->filename = $model->name;
        $model->description = $model->name;
        //$model->created_at = Yii::$app->params['currentTime'];
        $model->source_status = 0;
        $model->insert(false);
    }

    // one time function
    public function changeFiles($file, $fileSource)
    {
        static $dNum = 0;
        static $vNum = 0;
        $fileTarget = Yii::getAlias('@spider/runtime') . '/source/' . $fileSource;
        if (file_exists($fileTarget)) {
            return ;
        }
        $path = dirname($fileTarget);
        if (!is_dir($path)) {
            FileHelper::createDirectory($path, 0777);
        }

        $f1 = Yii::getAlias('@console/runtime') . '/sourcebak/' . $fileSource;
        $f2 = Yii::getAlias('@console/runtime') . '/sourcebak/' . $file;
        $f3 = Yii::getAlias('@spider/runtime') . '/sourcebak/' . $fileSource;
        $f4 = Yii::getAlias('@spider/runtime') . '/sourcebak/' . $file;
        $mv = false;
        foreach ([$f4, $f3, $f2, $f1] as $fileSource) {
            //echo $fileSource . "<br />";
            if (!file_exists($fileSource)) {
                continue;
            }
            if ($mv) {
                $dNum++;
                unlink($fileSource);
            } else {
                $mv = rename($fileSource, $fileTarget);
                $vNum++;
            }
        }
        echo $dNum . '--' . $vNum . '<br />';
    }

    public function getRemoteContent($url)
    {
        $ch = curl_init();
        $ip = '220.181.108.91';  // 百度蜘蛛
        $timeout = 15;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_TIMEOUT,0);
        //伪造百度蜘蛛IP  
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('X-FORWARDED-FOR:'.$ip.'','CLIENT-IP:'.$ip.'')); 
        //伪造百度蜘蛛头部
        curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
        $content = curl_exec($ch);
        if($content === false)
        {//输出错误信息
            $no = curl_errno($ch);
            switch(trim($no))
            {
                case 28 : $error = '访问目标地址超时'; break;
                default : $error = curl_error($ch); break;
            }
            echo $error;
        }
        else
        {
            $succ = true;
            return $content;
        }
        return false;
        //$url = 'http://spider.91zuiai.com/site/test.html';
        echo $url;
        $ip = rand(1,255).'.'.rand(1,255).'.'.rand(1,255).'.'.rand(1,255);
        $headerArr[] = 'X-FORWARDED-FOR' .':' . $ip;
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);//"http://ip138.com");
        curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );
        $re=curl_exec($ch);
        var_dump($re);
        return ;

        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
        curl_setopt($ch, CURLOPT_PROXY, "42.96.194.225"); //代理服务器地址
        curl_setopt($ch, CURLOPT_PROXYPORT, 80); //代理服务器端口
        //curl_setopt($ch, CURLOPT_PROXYUSERPWD, ":"); //http代理认证帐号，username:password的格式
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
        $file_contents = curl_exec($ch);
        var_dump($file_contents);
        curl_close($ch);
        echo $file_contents;exit();
        return ;


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        //curl_setopt($curl, CURLOPT_HTTPHEADER, 0);//$header); //设置header
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);

        curl_close($curl);
        var_dump($data);
    }
}
