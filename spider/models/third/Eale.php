<?php
namespace spider\models\third;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use Overtrue\Pinyin\Pinyin;

class Eale extends SpiderAbstract
{
    use EaleSpiderTrait;
    use EaleDealTrait;
    use EaleAdTrait;
    use EaleFileTrait;
    use EaleCStarTrait;
    use EaleShowTrait;
    private $configInfo;
    protected $siteInfos = [
        'eale' => 'http://www.eale.cc',
        'ieale' => 'http://www.ieale.com',
        'iealecn' => 'http://www.ieale.cn',
    ];

    public static function tableName()
    {
        return '{{%site}}';
    }

    protected function _getShowSamples($where, $limit = 100)
    {
        $model = new Sample();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }

    protected function _getShowInfos($where, $limit = 100)
    {
        $model = new Info();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }
}
