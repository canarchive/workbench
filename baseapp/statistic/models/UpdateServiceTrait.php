<?php

namespace baseapp\statistic\models;

trait UpdateServiceTrait
{
    public function serviceSql()
    {
        $sql = $this->_serviceUser();
        $sql .= $this->_serviceBase();
        $sql .= $this->_serviceStatus();
        $sql .= $this->_serviceBad();
        $sql .= $this->_serviceOut();
        return $sql;
    }

    protected function _serviceUser()
    {
        $sqlBase = "UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = ";
        $whereBase = "WHERE `u`.`id` = `m`.`user_id` AND";
        $sql = "{$sqlBase} `u`.`status` = 'valid-back', `status_sort` = '' WHERE `service_id` IN ({$serviceIds}) AND `status` IN ('valid', 'valid-part');";
        $sql .= "{$sqlBase} `u`.`status` = 'valid' {$whereBase} `status` = '';";
        $sql .= "{$sqlBase} 'u`.`status_sort` = `part` {$whereBase} `status` = '' AND `sort` = 'part';";
        $sql .= "{$sqlBase} 'u`.`status_sort` = `overall` {$whereBase} `status` = '' AND `sort` = 'overall';";
        $sql .= "{$sqlBase} 'u`.`status_sort` = `office` {$whereBase} `status` = '' AND `sort` = 'office';";
        return $sql;
    }

    protected function _serviceStatus()
    {
        $elems = [
            'all' => 'visit_num_success',
            '' => 'new_num',
            'follow' => 'follow_num',
            'follow-plan' => 'followplan_num',
            'valid' => 'valid_num',
            'valid-back' => 'valid_back_num',
            'valid-part' => 'valid_part_num',
            'valid-out' => 'validout_num',
            'bad' => 'bad_num',
        ];
        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = $elem == 'all' ? "`service_num` = 0" : "`service_num` = 0 AND `status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, $elemField);
            $where = $elem == 'all' ? "`service_num` > 0" : "`service_num` > 0 AND `status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, 'old_' . $elemField);
        }
        return $sql;
    }

    protected function _serviceOut()
    {
        $elems = [
            '' => 'outnew_num',
            'no_call' => 'outout_num',
            'noneed' => 'outpart_num',
            'booked' => 'outsmall_num',
            'no_test' => 'outshop_num',
            'soft' => 'outsoft_num',
        ];

        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = "`service_num` = 0 AND `status` = 'valid-out' AND `out_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, $elemField);
            $where = "`service_num` > 0 AND `status` = 'valid-out' AND `out_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, 'old_' . $elemField);
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
            'no_test' => 'badtest_num',
        ];

        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = "`service_num` = 0 AND `status` = 'bad' AND `invalid_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, $elemField);
            $where = "`service_num` > 0 AND `status` = 'bad' AND `invalid_status` = '{$elem}'";
            $sql .= $this->_serviceSql($where, 'old_' . $elemField);
        }
        return $sql;
    }

    protected function _serviceSql($where, $field)
    {
        $sqlBase = "UPDATE `workplat_statistic`.`ws_service_origin` AS `a`, 
            (SELECT `merchant_id`, `service_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d') AS `created_day`, COUNT(*) AS `count` FROM `workplat_subsite`.`wd_user` WHERE {{WHERE}} GROUP BY `merchant_id`, `service_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d')) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`merchant_id` = `b`.`merchant_id` AND `a`.`service_id` = `b`.`service_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br />';
        return $sql;
    }

    protected function _serviceBase()
    {
        $sql = 'TRUNCATE `workplat_statistic`.`ws_service_origin`;';
        $sql .= 'INSERT INTO `workplat_statistic`.`ws_service_origin` (`merchant_id`, `service_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `merchant_id`, `service_id`, FROM_UNIXTIME(`created_at`, "%Y%m"), FROM_UNIXTIME(`created_at`, "%Y%m%d"), FROM_UNIXTIME(`created_at`, "%w"), FROM_UNIXTIME(`created_at`, "%u") FROM `workplat_subsite`.`wd_user` WHERE `service_id` IN (1, 27, 28, 31, 46, 47) GROUP BY `merchant_id`, `service_id`, FROM_UNIXTIME(`created_at`, "%Y%m%d");<br />';
        return $sql;
    }
}
