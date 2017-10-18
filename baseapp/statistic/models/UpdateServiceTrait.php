<?php

namespace baseapp\statistic\models;

trait UpdateServiceTrait
{
    public function serviceSql()
    {
        $sql = $this->_serviceBase();
        $sql .= $this->_serviceStatus();
        $sql .= $this->_serviceBad();
        $sql .= $this->_serviceOut();
        return $sql;
    }

    protected function _serviceStatus()
    {
        $elems = [
            'visit_num_success' => "",
            'new_num' => '`status` = ""',
            'valid_num' => '`status` = "valid"',
            'validout_num' => '`status` = "valid-out"',
            'valid_back_num' => '`status` = "valid-back"',
            'follow_num' => '`status` IN ("follow", "follow-plan")',
            'bad_num' => '`status` = "bad"',
        ];
        $sql = '';
        foreach ($elems as $elemField => $where) {
            $sql .= $this->_serviceSql($where, $elemField);
        }
        return $sql;
    }

    protected function _serviceOut()
    {
        $elems = [
            '' => 'outnew_num',
            'out' => 'outout_num',
            'part' => 'outpart_num',
            'small' => 'outsmall_num',
            'shop' => 'outshop_num',
            'soft' => 'outsoft_num',
        ];

        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = "`status` = 'valid-out' AND `out_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, $elemField);
        }
        return $sql;
    }

    protected function _serviceBad()
    {
        $elems = [
            '' => 'badnew_num',
            'no_call' => 'badnocall_num',
            'noneed' => 'badnoneed_num',
            'booked' => 'badbooked_num',
            'no_test' => 'badnotest_num',
        ];

        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = "`status` = 'bad' AND `invalid_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, $elemField);
        }
        return $sql;
    }

    protected function _serviceSql($where, $field)
    {
        $where = empty($where) ? 1 : $where;
        $sqlBase = "UPDATE `workplat_statistic`.`ws_service_invalid` AS `a`, 
            (SELECT `merchant_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d') AS `created_day`, COUNT(*) AS `count` FROM `workplat_subsite`.`wd_user` WHERE {{WHERE}} GROUP BY `merchant_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d')) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`merchant_id` = `b`.`merchant_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _serviceBase()
    {
        $sql = 'TRUNCATE `workplat_statistic`.`ws_service_invalid`;';
        $sql .= 'INSERT INTO `workplat_statistic`.`ws_service_invalid` (`merchant_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `merchant_id`, FROM_UNIXTIME(`created_at`, "%Y%m"), FROM_UNIXTIME(`created_at`, "%Y%m%d"), FROM_UNIXTIME(`created_at`, "%w"), FROM_UNIXTIME(`created_at`, "%u") FROM `workplat_subsite`.`wd_user` WHERE `service_id` IN (1, 27, 28, 31, 46, 47, 49, 50, 52) GROUP BY `merchant_id`, FROM_UNIXTIME(`created_at`, "%Y%m%d");<br />';
        return $sql;
    }
}
