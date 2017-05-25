<?php

namespace gallerycms\house\models;

use Yii;
use common\models\Company;
use common\models\Quote as QuoteTool;

class QuoteUpdate extends Quote
{
    public function quoteUpdate($cityCode = 'changsha')
    {
        $data = $this->dataBase($cityCode);
        $dataPrice = $this->dataPrice();
        $data = array_merge($data, $dataPrice);

        $newModel = new self($data);
        $r = $newModel->insert();
        $id = $newModel->id;
        $length = 12 - strlen($id);
        //$code = Yii::$app->getSecurity()->generatePasswordHash($id);
        $code = strtolower(Yii::$app->getSecurity()->generateRandomString($length));
        $newModel->code = $code . $id;
        $newModel->save();
    }

    protected function dataBase($cityCode)
    {
        $sInfos = array_keys($this->styleInfos);
        $sIndex = rand(0, count($sInfos));
        $sKey = $sInfos[$sIndex];
        $hInfos = array_keys($this->houseTypeInfos);
        $hIndex = rand(0, count($hInfos));
        $hKey = $sInfos[$sIndex];

        $cModel = new CommunityBase();
        $cInfo = $cModel->find()->where(['city_code' => $cityCode])->orderBy('num_quote ASC, orderlist DESC')->one();
        $cInfo->updateCounters(['num_quote' => 1]);

        $data = [
            'city_code' => $cityCode,
            'district' => $cInfo['district'],
            'community_name' => $cInfo['name'],
            'owner_name' => '',
            'house_type' => $hKey,
            'style' => $sKey,
            'status' => 1,
        ];
        return $data;
    }

    protected function dataPrice()
    {
        $quoteTool = new QuoteTool();
        $areaReal = rand(40, 300);
        $area = $this->getArea($areaReal);
        $quote = new QuoteTool();
        $quoteInfos = $quoteTool->getResult($areaReal, 2.3);
        $priceFull = round($quoteInfos['price'], 2);
        $pricePart = round($priceFull / 1.989, 2);
        $hardbackFull = round($priceFull * 2.0242, 2);
        $hardbackPart = round($hardbackFull / 1.992, 2);

        $data = [
            'area_real' => $areaReal,
            'area' => $area,
            'price_full' => $priceFull,
            'price_part' => $pricePart,
            'hardback_full' => $hardbackFull,
            'hardback_part' => $hardbackPart,
        ];
        return $data;
    }

    protected function getArea($areaReal)
    {
        $area = '';
        if ($areaReal <= 60) {
            $area = 'one';
        } elseif ($areaReal > 60 && $areaReal <= 80) {
            $area = 'two';
        } elseif ($areaReal > 80 && $areaReal <= 100) {
            $area = 'three';
        } elseif ($areaReal > 100 && $areaReal <= 120) {
            $area = 'four';
        } elseif ($areaReal > 120 && $areaReal <= 160) {
            $area = 'five';
        } elseif ($areaReal > 160) {
            $area = 'six';
        }

        return $area;
    }
}
