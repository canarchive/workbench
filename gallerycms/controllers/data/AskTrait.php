<?php

namespace gallerycms\controllers\data;

use Yii;
use common\models\Company;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\AskQuestionBak;
use gallerycms\house\models\AskSort;
use gallerycms\house\models\AskTag;

trait AskTrait
{
    protected function testNum()
    {
        $model = new AskQuestion();
        $infos = $model->find()->orderBy(['created_at' => SORT_DESC])->limit(20)->all();
        foreach ($infos as $info) {
            echo $info->num_answer . '--' . $info->num_answer_final . '<br />';
            echo date('Y-m-d H:i:s', $info->created_at) . '<br />';
            echo $info->getNumAnswer() . '<br /> <br />';
        }

    }

    protected function aupdate()
    {
        $updateDatas = require(Yii::getAlias('@gallerycms') . '/config/update-datas.php');
        $uData = $updateDatas['ask'];
        $cTime = Yii::$app->params['currentTime'];
        $index = date('W', $cTime) - 11;
        $data = $uData[$index];
        
        $cMinute = $cTime - strtotime(date('Y-m-d', $cTime));
        $cMinute = floor($cMinute / 60);
        echo $cMinute . '<br />';
        $hit = $cMinute % $data['minute'];
        //if ($hit === 0) {
            $model = new AskQuestion();
            $model->updateInfo();
        //}
    }

    protected function uq()
    {
        $sorts = AskSort::find()->indexBy('code')->asArray()->all();
        $sql = '';
		$time = time() - 86400 * 4;
        //echo date('Y-m-d', $time);exit();
        foreach ($sorts as $sort => $sortInfo) {
            if ($sortInfo['parent_code'] == '') {
                continue;
            }
            for ($i = 1; $i <= 10; $i++) {
            $sql .= "UPDATE `wc_ask_question` SET `created_at` = {$time} + FLOOR(1 + (RAND() * 86400)) WHERE `sort` = '{$sort}' AND `created_at` = 0 LIMIT 1;\n";
            }
        }
        echo $sql;
    }

    public function asktag()
    {
        /*$model = new AskTag();
        $sqlFile = '/tmp/ask/tag.sql';
        $sql = file_get_contents($sqlFile);
        $sortInfos = $model->db->createCommand($sql)->execute();
        exit();*/
        $file = '/tmp/ask/ptci.txt';
        $askTag = new AskTag();
        $datas = file($file);
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        echo count($datas), '<br />';

        $sqlFile = '/tmp/ask/tag.sql';
        $i = 0;
        foreach ($datas as $data) {
            $info = explode("\t", $data);
            $name = str_replace("'", '"', trim(trim($info[0]), '"'));
            $t = str_replace("'", '"', trim(trim($info[1]), '"'));
            $k = str_replace("'", '"', trim(trim($info[2]), '"'));
            $d = str_replace("'", '"', trim(trim($info[3]), '"')); 
            $sqlStr = "INSERT INTO `wc_ask_tag` (`name`, `meta_title`, `meta_keyword`, `meta_description`) VALUES('{$name}', '{$t}', '{$k}', '{$d}');\n";
            file_put_contents($sqlFile, $sqlStr, FILE_APPEND);
            $i++;
        }
        echo $i;
    }

    public function utdk()
    {
        return ;
        $askSort = new AskSort();
        $datas = require Yii::getAlias('@gallerycms/config/house/ask-tdk.php');
        foreach ($datas as $code => $data) {
            $info = $askSort->find()->where(['code' => $code])->one();
            $info->meta_title = $data['title'];
            $info->meta_keyword = $data['keyword'];
            $info->meta_description = $data['description'];
            $info->update(false);
        }
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
}
