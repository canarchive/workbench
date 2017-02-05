<?php

namespace gallerycms\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\cmsad\models\Article;
use gallerycms\house\models\AskQuestion;

class TmpController extends GallerycmsController
{
    public function actionTest()
    {   
        $action = Yii::$app->request->get('action');
        $this->$action();
    }   

    protected function updateSort()
    {   
        $model = new AskQuestion();
        //$sortInfos = $model->db->createCommand('SELECT `sort_parent`, `sort`, COUNT(*) AS `count` FROM `wc_ask_question` GROUP BY `sort_parent`, `sort`')->queryAll();

        $datas = require(Yii::getAlias('@gallerycms/runtime/sort-ext.php'));
        $others = $datas['其他'];
        unset($datas['其他']);
        $sql = '';
        foreach ($others as $o) {
            foreach ($datas as $p => $info) {
                if (in_array($o, $info)) {
                    //echo $o . '-' . $p . '<br />';
                    $sql .= "UPDATE `wc_ask_question` SET `sort_parent` = '{$p}' WHERE `sort_parent` = '其他' AND `sort` = '{$o}';\n";
                    break;
                }
            }
        }
        echo $sql;
    }

    protected function updateSortPre()
    {   
        $model = new AskQuestion();
        //$sortInfos = $model->db->createCommand('SELECT `category` FROM wc_ask_question GROUP BY category')->queryAll();
        $datas = require(Yii::getAlias('@gallerycms/runtime/sort.php'));
        $single = $full = $sortParents = $sorts = [];
        $sql = $sort = $sortParent = '';
        foreach ($datas as $data) {
            $pos = strpos($data, '>');
            $pos = $pos === false ? strpos($data, '>') : $pos;
            if ($pos !== false) {
                $sortParent = substr($data, 0, $pos);
                $sort = substr($data, $pos + 1);
                //$sql .= "UPDATE `wc_ask_question` SET `source_sort_parent` = '{$sortParent}', `source_code` = '{$sort}' WHERE `category` = '{$data}';\n";

                $sortParents[] = $sortParent;
                $sortFulls[$sortParent][] = $sort;
                $sorts[] = $sort;
                
                $full[] = $data;
            }
        }
        //print_r(array_values($sorts));exit();

        $sqlExt = '';
        foreach ($datas as $data) {
            $pos = strpos($data, ',');
            $pos = $pos === false ? strpos($data, '>') : $pos;
            if ($pos === false) {
                if (strpos($data, '其他') === false) {
                    $dataSource = $data;
                    $data = str_replace('其他', '', $data);
                if (in_array($data, $sortParents)) {
                    //echo 'p-' . $data . '<br />';
                    //$sqlExt .= "UPDATE `wc_ask_question` SET `source_sort_parent` = '{$data}', `source_sort` = '其他' WHERE `category` = '{$dataSource}';\n";
                } elseif (in_array($data, array_values($sorts))) {
                    //$tmp = array_search($data, $sorts);
                    $tmp = '';
                    foreach ($sortFulls as $key => $value) {
                        if (in_array($data, $value)) {
                            $tmp = $key;
                            break;
                        }
                    }
                    //var_dump($tmp);
                    //echo 's-' . $data . '<br />';
                    //$sqlExt .= "UPDATE `wc_ask_question` SET `source_sort_parent` = '{$tmp}', `source_sort` = '{$data}' WHERE `category` = '{$data}';\n";
                } else {
                    $sqlExt .= "UPDATE `wc_ask_question` SET `source_sort_parent` = '其他', `source_sort` = '{$data}' WHERE `category` = '{$dataSource}';\n";
                    //echo 'no-' . $data . '<br />';
                }
                $single[] = $data;
                }
            }
        }
        echo $sqlExt;exit();
        print_r($sortFulls);exit();

        var_export(array_unique($sortParents));
        var_export(array_unique($sorts));
    
        echo $sql;exit();
        print_r(array_unique($sortParent));
        print_r($single);print_r($full);

    }   

    protected function updateInfo()
    {   
    }
}
