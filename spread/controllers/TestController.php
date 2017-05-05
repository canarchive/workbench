<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;
use spread\decoration\models\Quote;

class TestController extends SpreadController
{
    public function actionIndex()
    {
        $quote = new Quote();
        $r = $quote->getResult(100, 2.4);
        print_r($r);
    }

    public function actionTg()
    {
        $session = Yii::$app->session;
        //$data['spread_csrf'] = 
        $data['time'] = time();
        $session['session_spread_info'] = $data;
    }

    public function actionSetstatus()
    {
        $sql = '';
        $infos = Yii::$app->params['companyInfos'];
        //$cityCodes = ['tj', 'sjz', 'cs', 'dl'];
        foreach ($infos as $info) {
            if ($info->status < 1) {
            //if (!in_array($info['code_short'], $cityCodes)) {
                continue;
            }
            $code = $info['code_short'];
            $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` SET `status` = 1 WHERE `city_code` = '{$code}' AND `status` = 0 ORDER BY `praise` DESC LIMIT 5;\n";
            $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` SET `status` = 1 WHERE `city_code` = '{$code}' AND `status` = 0 ORDER BY `praise` ASC LIMIT 5;\n";

        }
        $sql .= "\n\n";
        $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_realcase` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
        $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_working` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
        $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_designer` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
        $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_owner` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
        $sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_merchant_comment` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
        echo $sql;
    }
}
