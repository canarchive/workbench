<?php

namespace baseapp\statistic\models;

trait UpdateServiceDispatchTrait
{
    protected $serviceIds = [1, 27, 28, 31, 46, 47, 49, 50, 52, 54, 55, 56, 57];
    public function serviceDispatchSql()
    {
        $this->tableStr = 'ws_service_dispatch_origin';
        $sql = $this->_serviceUserPre();
        $sql .= $this->_serviceDispatchBase();
        $sql .= $this->_serviceUser();
        $sql .= $this->_serviceDispatchStatus();
		$r = $this->db->createCommand($sql)->execute();
		return $r;
    }

    protected function _serviceUserPre()
    {
        $serviceIds = implode(',', $this->serviceIds);
        $sqlBase = "UPDATE `workplat_subsite`.`wd_user` AS `u`, `workplat_subsite`.`wd_user_merchant` AS `m` SET ";
        $whereBase = "WHERE `u`.`id` = `m`.`user_id` AND";
        $sql = "UPDATE `workplat_subsite`.`wd_user` SET `status` = 'valid-back', `status_sort` = '' WHERE `service_id` IN ({$serviceIds}) AND `status` = 'valid';\n";
        $sql .= "{$sqlBase} `u`.`status` = 'valid' {$whereBase} `m`.`status` = '';\n";
        $sql .= "{$sqlBase} `u`.`status_sort` = 'part' {$whereBase} `m`.`status` = '' AND `sort` = 'part';\n";
        $sql .= "{$sqlBase} `u`.`status_sort` = 'overall' {$whereBase} `m`.`status` = '' AND `sort` = 'overall';\n";
        $sql .= "{$sqlBase} `u`.`status_sort` = 'office' {$whereBase} `m`.`status` = '' AND `sort` = 'office';\n";
        return $sql;
    }

    protected function _serviceDispatchStatus()
    {
        $elems = [
            'dispatch' => "`status` = ''",
            'back' => "`status` IN ('back_reply', 'back_confirm')",
        ];
        $pres = ['', 'overall', 'office', 'part'];

        $sql = '';
        foreach ($pres as $pre) {
            foreach ($elems as $fieldBase => $where) {
                $field = $pre === '' ? "{$fieldBase}_num" : "{$pre}_{$fieldBase}_num";
                $fieldMobile = $fieldBase == 'back' ? 'back_mobile_num' : 'mobile_num';
                $fieldMobile = $pre === '' ? $fieldMobile : "{$pre}_$fieldMobile";

                $where = $pre === '' ? $where : "{$where} AND `sort` = '{$pre}'";
                $updateSet = "`a`.`{$field}` = `b`.`count`, `a`.`{$fieldMobile}` = `b`.`mobilecount`";
                //echo $where . '--' . $updateSet . "\n";
                $sql .= $this->_serviceDispatchSql($where, $updateSet);
            }
        }
        return $sql;
    }

    protected function _serviceDispatchSql($where, $updateSet)
    {
        $sqlBase = "UPDATE `workplat_statistic`.`{$this->tableStr}` AS `a`, 
            (SELECT `service_id`, `created_day`, COUNT(*) AS `count`, COUNT(DISTINCT(`mobile`)) AS `mobilecount` FROM `workplat_subsite`.`wd_user_merchant` WHERE {{WHERE}} GROUP BY `service_id`, `created_day`) AS `b` 
            SET {{UPDATESET}} WHERE `a`.`service_id` = `b`.`service_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPDATESET}}'], [$where, $updateSet], $sqlBase) . "\n";
        return $sql;
    }

    protected function _serviceUser()
    {
        $serviceIds = implode(',', $this->serviceIds);
        $sqlBase = "UPDATE `workplat_statistic`.`{$this->tableStr}` AS `a`, 
            (SELECT `service_id_first`, FROM_UNIXTIME(`created_at`, '%Y%m%d') AS `created_day`, COUNT(DISTINCT(`mobile`)) AS `count` FROM `workplat_subsite`.`wd_user` WHERE `service_id_first` IN ({$serviceIds}) AND {{WHERE}} GROUP BY FROM_UNIXTIME(`created_at`, '%Y%m%d'), `service_id_first`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`service_id` = `b`.`service_id_first` AND `a`.`created_day` = `b`.`created_day`;";
        $sort = ['overall', 'part', 'office'];
        $datas = [
            'info_num' => '1',
            'info_valid_num' => "`status` = 'valid'",
            'info_valid_overall_num' => "`status` = 'valid' AND `status_sort` = 'overall'",
            'info_valid_part_num' => "`status` = 'valid' AND `status_sort` = 'part'",
            'info_valid_office_num' => "`status` = 'valid' AND `status_sort` = 'office'",
        ];
        $sql = '';
        foreach ($datas as $field => $where) {
            $sql .= str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . "\n";
        }
        return $sql;
    }

    public function _serviceDispatchBase()
    {
        $serviceIds = implode(',', $this->serviceIds);
        $sql = "TRUNCATE `workplat_statistic`.`{$this->tableStr}`;";
        $sql .= "INSERT INTO `workplat_statistic`.`{$this->tableStr}` (`service_id`, `created_month`, `created_day`, `created_weekday`, `created_week`)
            SELECT `service_id`, FROM_UNIXTIME(`created_at`, '%Y%m'), FROM_UNIXTIME(`created_at`, '%Y%m%d'), FROM_UNIXTIME(`created_at`, '%w'), FROM_UNIXTIME(`created_at`, '%u') FROM `workplat_subsite`.`wd_user` WHERE `service_id` IN ({$serviceIds}) GROUP BY `service_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d');\n";
        $sql .= "REPLACE `workplat_statistic`.`{$this->tableStr}` (`service_id`, `created_month`, `created_day`, `created_weekday`, `created_week`) SELECT `service_id`, `created_month`, `created_day`, `created_weekday`, `created_week` FROM `workplat_subsite`.`wd_user_merchant` WHERE `service_id` IN ({$serviceIds}) GROUP BY `service_id`, `created_day`;\n";
        return $sql;


        /*$sql = "TRUNCATE `workplat_statistic`.`{$this->tableStr}`;";
        $sql .= "INSERT INTO `workplat_statistic`.`{$this->tableStr}` (`service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`)
            SELECT `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day` FROM `workplat_subsite`.`wd_user_merchant` GROUP BY `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`;\n";
        return $sql;*/
        //UPDATE `wd_user_merchant` SET `created_month` = FROM_UNIXTIME(`created_at`, "%Y%m"), `created_day` = FROM_UNIXTIME(`created_at`, "%Y%m%d"), `created_weekday` = FROM_UNIXTIME(`created_at`, "%w") + 1, `created_week` = FROM_UNIXTIME(`created_at`, "%u") WHERE 1 ;
    }
}
