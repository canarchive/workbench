<?php
namespace spider\models\dnflower;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\AbstractModel;
use Overtrue\Pinyin\Pinyin;

class Base extends AbstractModel
{
    use TraitList;
    use TraitShow;

    private $configInfo;

    public static function tableName()
    {
        return '{{%page}}';
    }

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $this->code = 'dnflower';
        //$file = Yii::getAlias('@spider') . '/config/jia/jia-urls.php';
        //$this->configInfo = require $file;
    }

    protected function _getShowInfos($where, $limit = 100)
    {
        $model = new Article();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }
}
