<?php

namespace gallerycms\controllers;

use Yii;
use Overtrue\Pinyin\Pinyin; 
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\AskQuestionBak;
use gallerycms\house\models\AskSort;

class UpdateController extends GallerycmsController
{
    public function actionIndex()
    {   
        $action = Yii::$app->request->get('action');
        $this->$action();
    }   

    public function merchant()
    {
        $cityCodes = ['beijing', 'shanghai', 'tianjin'];
        $sql = '';
        foreach ($cityCodes as $code) {
            $sql .= "UPDATE `wm_merchant` SET `status` = 1 WHERE `city_code` = '{$code}' ORDER BY `id` ASC LIMIT 60;\n";
        }
        $sql .= "UPDATE `wm_designer` AS `b`, `wm_merchant` AS `m` SET `b`.`status` = `m`.`status`, `b`.`city_code` = `m`.`city_code` WHERE `b`.`merchant_id` = `m`.`id`;\n";
        $sql .= "UPDATE `wm_owner` AS `b`, `wm_merchant` AS `m` SET `b`.`status` = `m`.`status`, `b`.`city_code` = `m`.`city_code` WHERE `b`.`merchant_id` = `m`.`id`;\n";
        $sql .= "UPDATE `wm_merchant_comment` AS `b`, `wm_merchant` AS `m` SET `b`.`status` = `m`.`status`, `b`.`city_code` = `m`.`city_code` WHERE `b`.`merchant_id` = `m`.`id`;\n";
        $sql .= "UPDATE `wm_working` AS `b`, `wm_merchant` AS `m` SET `b`.`status` = `m`.`status`, `b`.`city_code` = `m`.`city_code` WHERE `b`.`merchant_id` = `m`.`id`;\n";
        $sql .= "UPDATE `wm_realcase` AS `b`, `wm_merchant` AS `m` SET `b`.`status` = `m`.`status`, `b`.`city_code` = `m`.`city_code` WHERE `b`.`merchant_id` = `m`.`id`;\n";
        echo $sql;
    }

    public function mCode()
    {
        $model = new Merchant();
        $infos = $model->find()->where(['status' => 0])->limit(1000)->all();
        foreach ($infos as $info) {
            $code = Pinyin::letter($info['name'], ['delimiter' => '', 'accent' => false]); 
            $info->code = $code;
            $info->status = 1;
            $info->update(false);
        }
    }

    public function mCodeExt()
    {
        $model = new Merchant();
        $infos = $model->db->createCommand('SELECT `code`, COUNT(*) AS `cnum` FROM `wm_merchant` GROUP BY `code` HAVING `cnum` > 1 LIMIT 1000')->queryAll();
        foreach ($infos as $info) {
            $code = $info['code'];
            $mInfos = $model->find()->where(['code' => $code])->all();
            $i = 0;
            foreach ($mInfos as $mInfo) {
                if ($i != 0) {
                $mInfo->code = $code . $i;
                echo $mInfo->code . '<br />';
                $mInfo->update(false);
                }
                $i++;
            }
        }
    }

    public function mQuestion()
    {
        $sort = new AskSort();
        $model = new AskQuestion();
        $modelBak = new AskQuestionBak();

        $sorts = AskSort::find()->indexBy('code')->asArray()->all();
        $sql = '';
        foreach ($sorts as $sort => $sortInfo) {
            if ($sortInfo['parent_code'] == '') {
                continue;
            }
            //$sql .= "INSERT INTO `wc_ask_question_new` SELECT * FROM `wc_ask_question` WHERE sort = '{$sort}' ORDER BY id ASC LIMIT 100;\n";
            $sql .= "DELETE FROM `wc_ask_question` WHERE sort = '{$sort}' ORDER BY id ASC LIMIT 100;\n";
        }

        echo $sql;
    }
}
