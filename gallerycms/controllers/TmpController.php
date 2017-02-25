<?php

namespace gallerycms\controllers;

use Yii;
use Overtrue\Pinyin\Pinyin; 
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\AskSort;

class TmpController extends GallerycmsController
{
    public function actionTest()
    {   
        $action = Yii::$app->request->get('action');
        $this->$action();
    }   

    protected function uQuestion()
    {
        $sorts = AskSort::find()->indexBy('code')->asArray()->all();
        $sql = '';
        $i = 0;
        $infos = [];
        foreach ($sorts as $sort => $sortInfo) {
            $infos[$sort] = [
                'parent' => isset($sorts[$sortInfo['parent_code']]) ? $sorts[$sortInfo['parent_code']]['name'] : '',
                'name' => $sortInfo['name'],
                'title' => '',
                'keyword' => '',
                'description' => '',
            ];
            continue;

            $sortName = $sortInfo['name'];
            if ($sortInfo['parent_code'] == '') {
                $sql .= "UPDATE `wc_ask_question` SET `sort_parent` = '{$sort}' WHERE `sort_parent` = '{$sortName}'<br />";
                continue;
            }
            /*$sortParent = $sorts[$sortInfo['parent_code']]['name'];
            $sql .= "{$i}--UPDATE `wc_ask_question` SET `sort` = '{$sort}' WHERE `sort_parent` = '{$sortParent}' AND `sort` = '{$sortName}'<br />";*/
            $i++;
        }
        var_export($infos);
        //echo $sql;
        //print_r($sorts);exit();
    }

    protected function updateSort()
    {   
        $model = new AskQuestion();
        $sortInfos = $model->db->createCommand('SELECT `sort_parent`, `sort`, COUNT(*) AS `count` FROM `wc_ask_question` GROUP BY `sort_parent`, `sort`')->queryAll();
        $datas = [];
        foreach ($sortInfos as $sInfo) {
            $datas[$sInfo['sort_parent']][] = $sInfo['sort'];
        }
        var_export($datas);exit();
    }

    protected function writeSort()
    {
        $datas = require(Yii::getAlias('@gallerycms/runtime/sort-ext.php'));
        unset($datas['其他']);
        $model = new AskSort();
        foreach ($datas as $sortParent => $data) {
            $pCode = Pinyin::letter($sortParent, ['delimiter' => '', 'accent' => false]); 
            $pInfos = [
                'code' => $pCode,
                'name' => $sortParent,
                'status' => 1,
                'parent_code' => '',
            ];
            //print_r($pInfos);
            $newParent = new AskSort($pInfos);
            $newParent->insert();
            foreach ($data as $sort) {
                $code = Pinyin::letter($sort, ['delimiter' => '', 'accent' => false]); 
                $code = empty($code) ? strtolower($sort) : $code;
                $infos = [
                    'code' => $code,
                    'name' => $sort,
                    'status' => 1,
                    'parent_code' => $pCode,
                ];
                //print_r($infos);
                $info = new AskSort($infos);
                $info->insert();
            }
        }
    }

    protected function dealSort()
    {
        $datas = require(Yii::getAlias('@gallerycms/runtime/sort-ext.php'));
        unset($datas['其他']);
        $model = new AskQuestion();
        $infos = $model->db->createCommand('SELECT `id`, `name` FROM `wc_ask_question` WHERE `sort_parent` = "其他" AND `status` = 0 LIMIT 10000')->queryAll();
        foreach ($infos as $info) {
            $update = false;
            $sql = '';
            foreach ($datas as $sortParent => $data) {
                foreach ($data as $sort) {
                    $pos = strpos($info['name'], $sort);
                    if (empty($pos) && strpos($sort, '/') !== false) {
                        $subSort = explode('/', $sort);
                        $pos = strpos($info['name'], $subSort[0]);
                        $pos = empty($pos) ? strpos($info['name'], $subSort[1]) : $pos;
                    }
                    if ($pos !== false) {
                        $update = true;
                        $sql = "UPDATE `wc_ask_question` SET `sort_parent` = '{$sortParent}', `sort` = '{$sort}' WHERE `id` = {$info['id']}";
                //echo 'yes-' . $sql . '<br />';
                    }
                }
                if (!$update) {
                    $pos = strpos($info['name'], substr($sortParent, 0, 6));
                    if ($pos !== false) {
                        $sql = "UPDATE `wc_ask_question` SET `sort_parent` = '{$sortParent}', `sort` = '其他' WHERE `id` = {$info['id']}";
                        //echo 'pppp-' . $sql;
                    }

                }
            }
            if (!$update) {
                $sql = "UPDATE `wc_ask_question` SET `status` = 99 WHERE `id` = {$info['id']}";
                //echo 'no-' . $info['name'] . $sql . '<br />';
            }
            if (!empty($sql)) {
                $model->db->createCommand($sql)->execute();
            }
        }

        exit();
        //echo $sql;exit();
        print_r($infos);exit();

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
