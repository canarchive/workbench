<?php

namespace spider\controllers;

use Yii;
use spider\components\Controller as SpiderController;

class DealController extends SpiderController
{
    public function actionIndex()
    {
        $file = '/tmp/t.txt';
        $datas = file($file);
        $sqlBase = "INSERT INTO `tmp_keyword`(`keyword`, `show_num`, `average_order`, `hit_num`, `fee`, `is_delete`) VALUES ";
        $sql = '';
        foreach ($datas as $i => $data) {
            if ($i <= 20000) {
                continue;
            }
            $data = explode("\t", $data);
            $keyword = $data[0];
            $showNum = $data[1];
            $averageOrder = $data[2];
            $hitNum = $data[3];
            $fee = $data[4];
            $is_delete = strpos($keyword, '[已删除]') === false ? '0' : '1';
            if ($is_delete) {
                $keyword = str_replace('[已删除]', '', $keyword);
            }
            $sql .= $sqlBase . "('{$keyword}', '{$data[1]}', '{$data[2]}', '{$data[4]}', '{$data[5]}', '{$is_delete}');<br />";
        }
        echo $sql;
    }
}
