<?php

namespace gallerycms\controllers\data;

use Yii;
use common\models\Company;
use gallerycms\merchant\models\Merchant;
use gallerycms\merchant\models\Owner;

trait MerchantTrait
{
    public function dispatch()
    {
        $model = New Merchant();
        $mInfos = $model->merchantSortInfos;
        /*$sorts = [
            ['common', 'villa', 'ktv', 'dining', 'recreation'],
            ['showroom', 'workshop', 'hsopital', 'bar', 'other'],
            ['loft', 'double', 'solo', 'part', 'store'],
            ['beauty', 'hotal', 'office', 'school', 'specailty'],
            ['super', 'plat', 'selfbuild'],
        ];
        $styles = [
            ['simple', 'en', 'rural', 'us'],
            ['family', 'newclassics', 'modern', 'cn'],
            ['mediterranean', 'mashup', 'simpleen', 'seasia'],
        ];*/
        $prices = [
            ['one', 'two', 'three'],
            ['two', 'three', 'four', 'five'],
            ['three', 'four', 'five'],
            ['four', 'five', 'size'],
            ['five', 'six', 'seven'],
        ];
        $sorts = array_keys($mInfos['decoration_sort']['values']);
        $styles = array_keys($mInfos['style']['values']);
        //$prices = $mInfos['budget']['values'];

        $infos = $model->find()->where(['source_status_deal' => 1])->limit(2000)->all();
        foreach ($infos as $info) {
            $sNum = rand(4, 8);
            $sortKeys = array_rand($sorts, $sNum);
            $sortStr = '';
            foreach ($sortKeys as $key) {
                $sortStr .= $sorts[$key] . ',';
            }
            //$info->sort = $sortStr;

            $styleNum = rand(3, 6);
            $styleKeys = array_rand($styles, $styleNum);
            $styleStr = '';
            foreach ($styleKeys as $key) {
                $styleStr .= $styles[$key] . ',';
            }
            echo $styleStr . '<br />';
            $info->style = $styleStr;
            $pIndex = rand(0, 4);
            $pKeys = $prices[$pIndex];
            $pStr = implode($pKeys, ',');
            //$info->price = $pStr . ',';
            $info->source_status_deal = 0;
            $info->update(false);

        }
    }
}
