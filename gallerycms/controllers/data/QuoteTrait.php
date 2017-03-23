<?php

namespace gallerycms\controllers\data;

use Yii;
use common\models\Company;
use gallerycms\house\models\QuoteBak;
use gallerycms\house\models\CommunityBase;
use common\models\Quote as QuoteTool;

trait QuoteTrait
{
    protected function qustatus()
    {
        $sql = '';
        //for ($j = 1; $j <= 9; $j++) {
        $j = 7;
		$time = time() - 86400 * $j;
        for ($i = 1; $i <= 100; $i++) {
            $sql .= "UPDATE `wc_quote` SET `created_at` = {$time} + FLOOR(1 + (RAND() * 86400)) WHERE `status` = 1 AND `created_at` = 0 LIMIT 10;\n";
        }
        //}
        echo $sql;
    }
    public function qPrice()
    {
        //$model = new QuoteBak();
        //$infos = $model->db->createCommand('SELECT `area_real`, COUNT(*) AS `count` FROM `wc_quote_bak` GROUP BY `area_real`')->queryAll();

        $quoteTool = new QuoteTool();
        $sqlFile = '/tmp/quote/bj.sql';
        $areas = require Yii::getAlias('@gallerycms/runtime/area.php');
        $sql = '';
        foreach ($areas as $area) {
            $area = $area['area_real'];
            $quoteInfos = $quoteTool->getResult($area, 2.3);
            $priceFull = round($quoteInfos['price'], 2);
            $pricePart = round($priceFull / 1.989, 2);
            $hardbackFull = round($priceFull * 2.0242, 2);
            $hardbackPart = round($hardbackFull / 1.992, 2);
            $sql .= "UPDATE `wc_quote_bak` SET `price_full` = $priceFull, `price_part` = $pricePart, `hardback_full` = $hardbackFull, `hardback_part` = $hardbackPart WHERE `area_real` = $area; <br />";
        }
        echo $sql;


        //var_export($areas);
    }

    public function quote()
    {
        $model = new QuoteBak();
        $infos = $model->find()->all();
        $sInfos = $model->styleInfos;
        $hInfos = $model->houseTypeInfos;
        $bInfos = $model->budgetInfos;

        $sqlFile = '/tmp/quote/bj.sql';
        $quote = new QuoteTool();
        $r = $quote->getResult(123);
        $cModel = new CommunityBase();
        $cInfos = $cModel->find()->where(['city_name' => '北京', 'num_quote' => 0])->limit(1000)->all();
        $areas = $this->_getAreas();
        foreach ($cInfos as $cInfo) {
            $i = 0;
            foreach ($sInfos as $sKey => $sValue) {
                foreach ($hInfos as $hKey => $hValue) {
                    foreach ($areas as $areaReal => $area) {
                        $data = [
                            'city_code' => 'beijing',
                            'district' => $cInfo['district'],
                            'community_name' => $cInfo['name'],
                            'owner_name' => '',
                            'house_type' => $hKey,
                            'style' => $sKey,
                            'area_real' => $areaReal,
                            'area' => $area,
                        ];
                        $mark = md5('beijing' . $cInfo['district'] . $cInfo['name'] . $hKey . $sKey . $area . $areaReal);
                        $sql = "INSERT INTO `wc_quote_bak` (`code`, `city_code`, `district`, `community_name`, `owner_name`, `house_type`, `style`, `area`, `area_real`, `price_part`, `price_full`, `hardback_part`, `hardback_full`, `orderlist`, `created_at`, `updated_at`, `description`, `mark`, `status`) VALUES ('', 'beijing', '{$cInfo['district']}', '{$cInfo['name']}', '', '{$hKey}', '{$sKey}', '{$area}', {$areaReal}, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, '', '{$mark}', 1);\n";

                        $i++;
                        file_put_contents($sqlFile, $sql, FILE_APPEND);
                    }
                }
            }
            $cInfo['num_quote'] = $i;
            $cInfo->update(false);
        }
        //echo $sql;

    }

    protected function _getAreas()
    {
        $areas = [];
        //for ($areaReal = 1; $areaReal <= 20; $areaReal + 5) {
        for ($i = 1; $i <= 100; $i++) {
            if (count($areas) > 19) {
                break;
            }
            $areaReal = rand(40, 160);
            if (in_array($areaReal, array_keys($areas))) {
                continue;
            }
            
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
            $areas[$areaReal] = $area;
        }

        return $areas;

    }

    public function community()
    {
        $file = '/tmp/quote/house.txt';
        $datas = file($file);
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        echo count($datas), '<br />';

        $sqlFile = '/tmp/quote/tag.sql';
        $i = 0;
        foreach ($datas as $data) {
            $info = explode("\t", $data);
            $city_name = str_replace("'", '"', trim(trim($info[0]), '"'));
            $name = str_replace("'", '"', trim(trim($info[1]), '"'));
            $district = str_replace("'", '"', trim(trim($info[2]), '"'));
            $sqlStr = "INSERT INTO `wc_community_base` (`city_name`, `name`, `district`) VALUES('{$city_name}', '{$name}', '{$district}');\n";
            file_put_contents($sqlFile, $sqlStr, FILE_APPEND);
            $i++;
        }
        echo $i;
    }
}
