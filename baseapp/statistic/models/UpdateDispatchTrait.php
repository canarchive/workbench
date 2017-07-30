<?php

namespace baseapp\statistic\models;

trait UpdateDispatchTrait
{
    public $updateType = '';
    public $merchantStr;
    public $tableStr;
    public function dispatchSql()
    {
        $this->merchantStr = $this->updateType == 'service' ? '' : '`merchant_id`,';
        $this->tableStr = $this->updateType == 'service' ? 'ws_dispatch_service_origin' : 'ws_dispatch_origin';
        $sql = $this->_dispatchBase();
        $sql .= $this->_dispatchStatus();
        return $sql;
    }

    protected function _dispatchStatus()
    {
        $elems = [
            '' => 'dispatch_num',
            'back_reply' => 'back_reply_num',
            'back_confirm' => 'back_confirm_num',
        ];

        $sql = '';
        foreach ($elems as $elem => $elemField) {
            $where = "`status` = '{$elem}'";
            $sql .= $this->_dispatchSql($where, $elemField);
        }
        return $sql;
    }

    protected function _dispatchSql($where, $field)
    {
        $merchantWhereStr = $this->updateType == 'service' ? '' : '`a`.`merchant_id` = `b`.`merchant_id` AND ';

        $sqlBase = "UPDATE `workplat_statistic`.`{$this->tableStr}` AS `a`, 
            (SELECT {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`, COUNT(*) AS `count` FROM `workplat_subsite`.`wd_user_merchant` WHERE {{WHERE}} GROUP BY {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE {$merchantWhereStr} `a`.`service_id` = `b`.`service_id` AND `a`.`created_month` = `b`.`created_month` AND `a`.`created_week` = `b`.`created_week` AND `a`.`created_weekday` = `b`.`created_weekday` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br />';
        return $sql;
    }

    public function _dispatchBase()
    {
        $sql = "TRUNCATE `workplat_statistic`.`{$this->tableStr}`;";
        $sql .= "INSERT INTO `workplat_statistic`.`{$this->tableStr}` ({$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`)
            SELECT {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day` FROM `workplat_subsite`.`wd_user_merchant` GROUP BY {$this->merchantStr} `service_id`, `created_month`, `created_week`, `created_weekday`, `created_day`;<br />";
        return $sql;
    }
}
