<?php

namespace common\models;

use Yii;

class County extends AbstractRegion
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region_county}}';
    }

    public function getMapInfos()
    {
        $infos = $this->find()->where(['status' => 1])->asArray()->all();
        $companyInfos = Yii::$app->params['companyInfos'];
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['parent_id']][] = $info;
        }

        foreach ($companyInfos as $key => & $companyInfo) {
            $parentCode = $companyInfo['region_code'];
            if (!isset($datas[$parentCode])) {
                unset($companyInfos[$key]);
                continue;
            }
            $companyInfo = $companyInfo->toArray();
            $companyInfo['countyInfos'] = $datas[$companyInfo['region_code']];
        }
        return $companyInfos;
    }

    public function getMapMoreInfos($regionId)
    {
        $infos = $this->find()->where(['parent_id' => $regionId])->asArray()->all();
        $prefix = substr($regionId, 0, 3);

        $villageModel = new RegionTown();
        $sql = "SELECT * FROM `wc_region_village` WHERE `status` = 1 AND `region_id` LIKE '{$prefix}%'";
        $villageInfos = $villageModel->findBySql($sql)->asArray()->all();
        $townDatas = [];
        foreach ($villageInfos as $villageInfo) {
            $townDatas[$villageInfo['parent_id']][] = $villageInfo;
        }

        $townModel = new RegionTown();
        $sql = "SELECT * FROM `wc_region_town` WHERE `status` = 1 AND `region_id` LIKE '{$prefix}%'";
        $townInfos = $townModel->findBySql($sql)->asArray()->all();
        $countyDatas = [];
        foreach ($townInfos as $townInfo) {
            $townInfo['villageInfos'] = isset($townDatas[$townInfo['region_id']]) ? $townDatas[$townInfo['region_id']] : [];
            $countyDatas[$townInfo['parent_id']][] = $townInfo;
        }

        foreach ($infos as & $info) {
            $info['townInfos'] = isset($countyDatas[$info['region_id']]) ? $countyDatas[$info['region_id']] : [];
        }

        return $infos;
    }
}
