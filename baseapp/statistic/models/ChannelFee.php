<?php

namespace baseapp\statistic\models;

use Yii;
use spread\models\Account;

class ChannelFee extends AbstractStatistic
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public static function tableName()
    {
        return '{{%planfee}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => '关键字',
            'keyword_search' => '搜索关键字',
            'channel_big' => '一级渠道',
            'channel' => '渠道',
            'created_day' => '日期',
            'created_hour' => '小时',
            'created_week' => '周',
            'merchant_id' => '商家',
            'client_type' => '客户端',
            'visit_num' => '访问数',
            'show_num' => '展现数',
            'num_success' => '转化数',
            'hit_num' => 'SEM点击数',
            'fee' => 'SEM消费',
            'fee_average' => 'SEM报名成本',
        ];
    }

    public function getFieldInfos()
    {
        $fields = ['sort', 'city_code', 'merchant_id', 'client_type', 'channel', 'account_id', 'plan_id', 'unit_id', 'created_month', 'created_week', 'created_weekday', 'created_day', 'created_hour'];
        return $fields;
    }

    public function channelFeeSql()
    {
        $this->channelFeeSqlExt();
        $vTable = '`workplat_spread`.`wd_visit`';
        $cTable = '`workplat_spread`.`wd_conversion`';
        $uTable = '`workplat_subsite`.`wd_user`';
        $pTable = '`workplat_spread`.`wd_planfee`';
        $where = '`a`.`created_day` = `b`.`created_day` AND `a`.`client_type` = `b`.`client_type` AND `a`.`channel` = `b`.`channel` AND `a`.`sem_account` = `b`.`account_id` AND `a`.`plan_id` = `b`.`plan_id`';
        $groupBy = '`created_day`, `client_type`, `channel`, `sem_account`, `plan_id`';
        $mid1 = "SELECT `created_day`, `client_type`, `channel`, `sem_account`, `plan_id`, COUNT(*) AS `count` FROM {$vTable} GROUP BY {$groupBy}";

        $sql = '';
        $sql .= "UPDATE {$cTable} as `a`, {$uTable} as `b` SET `a`.`status` = `b`.`status`, `a`.`status_input` = `b`.`status_input` WHERE `a`.`id` = `b`.`conversion_id`;<br /><br />";
        $sql .= "UPDATE ({$mid1}) as `a`, {$pTable} as `b` SET `b`.`visit_num` = `a`.`count` WHERE {$where};<br /><br />";
        $numSql = [
            'success_num' => '1',
            'valid_num' => '`status` IN ("valid")',
            'bad_num' => '`status` IN ("bad")',
            'out_num' => '`status` IN ("valid-out")',
            'back_num' => '`status` IN ("valid-back")',
            'follow_num' => '`status` IN ("follow", "follow-plan")',
        ];
        foreach ($numSql as $field => $whereMid) {
            $midSql = $mid2 = "SELECT `created_day`, `client_type`, `channel`, `sem_account`, `plan_id`, COUNT(DISTINCT(`mobile`)) AS `count` FROM {$cTable} WHERE {$whereMid} AND `status_input` = '' GROUP BY {$groupBy}";
            $sql .= "UPDATE ({$midSql}) as `a`, {$pTable} as `b` SET `b`.`{$field}` = `a`.`count` WHERE {$where};<br /><br />";
        }

        return $sql;
    }

    protected function channelFeeSqlExt()
    {
        $sql = 'INSERT INTO `workplat_spread`.`wd_planfee` (`created_month`, `created_day`, `created_week`, `created_weekday`, `client_type`, `channel`, `account_id`) VALUES';
        $sqlDetail = '';
        
        $aModel = new Account();
        //foreach ($days as $day) {
        for ($i = 21; $i < 25; $i++) {
            $day = $i < 10 ? '2017090' . $i : '201709' . $i;
            $time = strtotime($day);
            $month = date('Ym', $time);
            $week = date('W', $time);
            $weekday = date('N', $time);

            $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'pc', '', '0'),<br />";
            $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'h5', '', '0'),<br />";
            foreach ($this->channelInfos as $channel => $cInfo) {
                $accountInfos = $aModel->getInfos(['where' => ['channel' => $channel]]);
                //print_r($accountInfos);
                $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'pc', '{$channel}', '0'),<br />";
                $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'h5', '{$channel}', '0'),<br />";
                foreach ($accountInfos as $aInfo) {
                    $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'pc', '{$channel}', '{$aInfo['id']}'),<br />";
                    $sqlDetail .= "('{$month}', '{$day}', '{$week}', '{$weekday}', 'h5', '{$channel}', '{$aInfo['id']}'),<br />";
                }
            }
        }
        echo $sql . $sqlDetail;
    }
}
