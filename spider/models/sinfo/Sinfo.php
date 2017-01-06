<?php
namespace spider\models\sinfo;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

class Sinfo extends SpiderAbstract
{
    use PreTrait;
    use ListTrait;
    use ShowTrait;

    private $configInfo;

    public static function tableName()
    {
        return '{{%site}}';
    }

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $file = Yii::getAlias('@spider') . '/config/sinfo/config.php';
        $this->configInfo = require $file;
    }

    protected function _getListInfos($where, $limit = 100)
    {
        $model = new ListurlSinfo();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }

    protected function _getShowInfos($where, $limit = 100)
    {
        $model = new Article();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }
}
