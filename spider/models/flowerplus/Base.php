<?php
namespace spider\models\flowerplus;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\AbstractModel;
use Overtrue\Pinyin\Pinyin;

class Base extends AbstractModel
{
    //use TraitPre;
    //use TraitList;
    use TraitShow;

    private $configInfo;

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $this->code = 'flowerplus';
        //$file = Yii::getAlias('@spider') . '/config/jia/jia-urls.php';
        //$this->configInfo = require $file;
    }

    protected function _getShowInfos($where, $limit = 100)
    {
        $model = new Goods();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }

	public function getShowUrls()
	{
		$base = 'http://m.flowerplus.cn/f';
        for ($i = 2001; $i <= 30000; $i++) {
            $url = $base . $i;
            $str = "wget -O /data/htmlwww/filesys/spider/source/flowerplus/show/{$i}.html {$url}\n";
			file_put_contents('/tmp/flowerplus', $str, FILE_APPEND);
        }
	}
}
