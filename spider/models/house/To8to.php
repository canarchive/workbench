<?php
namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use merchant\models\Company;
use spider\models\SpiderAbstract;
use spider\models\Merchant;
use Overtrue\Pinyin\Pinyin;
use spider\models\Owner;

class To8to extends SpiderAbstract
{
    use To8toMerchantTrait;
    use To8toRealcaseTrait;
    use To8toDesignerTrait;
    use To8toWorkingTrait;
    use To8toCommentTrait;

    private $configInfo;

    public static function tableName()
    {
        return '{{%house_site}}';
    }

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

    public function cityList($siteCode)
    {
        $cityInfos = [];
        $file = "{$siteCode}/city.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
        $crawler->filter('#city_box a')->each(function ($node) use (& $cityInfos) {
            $name = $node->text();
            $code = Pinyin::trans($name, ['delimiter' => '', 'accent' => false]);
            $codeShort = Pinyin::letter($name, ['delimiter' => '', 'accent' => false]);
            $info = Company::find()->where(['name' => $name])->one();

            if (empty($info)) {
                $info = [
                    'name' => $name,
                    'code' => $code,
                    'code_short' => $codeShort,
                    'code_initial' => substr($code, 0, 1),
                    'hotline' => Yii::$app->params['siteHotline'],
                    'address' => $name . '市',
                    'status' => 0,
                ];
                $addModel = new Company($info);
                $addModel->insert();
            }

            $url = $node->attr('href');
            $domain = str_replace(['http://', '.to8to.com/'], ['', ''], $url);
            $cityInfos[$domain] = [
                'name' => $name,
                'url' => $url,
                'code' => $info['code'],
                'code_short' => $info['code_short'],
            ];
        });
        var_export($cityInfos);
    }

    public function changeCityCode()
    {
        $cityInfos = $this->configInfo['cityInfos'];
        print_r($cityInfos);
        foreach ($cityInfos as $key => $info) {
            $sql = "UPDATE `ws_house_companylist` SET `city_code` = '{$info['code_short']}' WHERE `source_city_code` = '{$key}'";
            $this->db->createCommand($sql)->execute();
        }
    }

    protected function _dealOwner($crawler, $info)
    {
        $brief = trim($crawler->filter('.case_name')->text());
        $name = $community_name = $decoration_type = $decoration_price = $area = $style = $duration = '';
        $attrs = $crawler->filter('.case_tag span');
        foreach ($attrs as $key => $attr) {
            $value = trim($attr->nodeValue);
            if ($key == 1) {
                $community_name = $value;
            } elseif ($value == '全包' && $value == '半包') {
                $decoration_type = $value;
            } elseif (strpos($value, '工期') !== false) {
                $duration = str_replace('工期：', '', $value);
            } elseif (strpos($value, 'm²') !== false) {
                $area = $value;
            } elseif (strpos($value, '万') !== false) {
                $decoration_price = $value;
            } else {
                $style = $value;
            }
        }
        $designer_id = $crawler->filter('.design_ins a');
        $designer_id = count($designer_id) > 0 ? $designer_id->attr('href') : '';
        $source_designer_id = str_replace(['team-display-t', '.html'], ['', ''], basename($designer_id));
        $statusNode = $crawler->filter('.case_progress .on_li')->last();
        $status = count($statusNode) > 0 ? trim($statusNode->text()) : '开工';

        $ownerData = [
            'source_site_code' => $info['source_site_code'],
            'source_city_code' => $info['source_city_code'],
            'source_id' => $info['source_id'],
            'source_merchant_id' => $info['source_merchant_id'],
            'city_code' => $info['city_code'],
        ];
        $ownerMark = md5($name.$brief.$area.$style.$decoration_price);
        $exist = false;//Owner::find()->select('id')->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
        //$exist = Owner::find()->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
        //print_r($exist);
        if (!$exist) {
            $ownerFields = ['name', 'brief', 'area', 'style', 'decoration_type', 'decoration_price', 'community_name', 'source_designer_id', 'status'];
            foreach ($ownerFields as $ownerField) {
                $ownerData[$ownerField] = $$ownerField;
            }
            $ownerData['mark'] = $ownerMark;
            //print_r($ownerData);

            $model = new Owner($ownerData);
            $model->insert(false);
        }
    }
}
