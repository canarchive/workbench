<?php

namespace baseapp\statistic\models;

trait UpdateDispatchTrait
{
    public $merchantStr;
    public function dispatchSql()
    {
        $this->merchantStr = '`merchant_id`,';
        $this->tableStr = 'ws_dispatch_origin';
        $sql = $this->_dispatchBase();
        $sql .= $this->_dispatchStatus();
		$r = $this->db->createCommand($sql)->execute();
		return $r;
    }

    protected function _dispatchStatus()
    {
        $elems = [
            '' => 'dispatch_num',
            'back_reply' => 'back_reply_num',
            'back_confirm' => 'back_confirm_num',
        ];
        $pres = ['', 'overall', 'office', 'part'];

        $sql = '';
        foreach ($pres as $pre) {
            foreach ($elems as $elem => $elemField) {
                $field = $pre === '' ? $elemField : $pre . '_' . $elemField;
                $where = $pre === '' ? "`status` = '{$elem}'" : "`status` = '{$elem}' AND `sort` = '{$pre}'";
                $sql .= $this->_dispatchSql($where, $field);
            }
        }
        return $sql;
    }

    protected function _dispatchSql($where, $field)
    {
        $merchantWhereStr = '`a`.`merchant_id` = `b`.`merchant_id` AND ';

        $sqlBase = "UPDATE `workplat_statistic`.`{$this->tableStr}` AS `a`, 
            (SELECT {$this->merchantStr} `service_id`, `created_day`, COUNT(*) AS `count` FROM `workplat_subsite`.`wd_user_merchant` WHERE {{WHERE}} GROUP BY {$this->merchantStr} `service_id`, `created_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE {$merchantWhereStr} `a`.`service_id` = `b`.`service_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . "\n";
        return $sql;
    }

    public function _dispatchBase()
    {
        $sql = "TRUNCATE `workplat_statistic`.`{$this->tableStr}`;";
        $sql .= "INSERT INTO `workplat_statistic`.`{$this->tableStr}` ({$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`)
            SELECT {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day` FROM `workplat_subsite`.`wd_user_merchant` GROUP BY {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`;\n";
        return $sql;
    }
}
