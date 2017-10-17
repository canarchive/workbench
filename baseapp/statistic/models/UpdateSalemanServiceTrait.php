<?php

namespace baseapp\statistic\models;

trait UpdateSalemanServiceTrait
{
    public function salemanServiceSql()
    {
        $sql = $this->_salemanServiceBase();
        $sql .= $this->_salemanServiceFund(true);
        $sql .= $this->_salemanServiceFund();
        $sql .= $this->_salemanServiceContract();
        return $sql;
    }

    protected function _salemanServiceContract()
    {
        $where = 1;
        $field = 'contract_num';
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_service` AS `a`, 
            (SELECT `city_code`, `saleman_id`, `created_day`, COUNT(*) AS `count` FROM `workplat_merchant`.`wm_contract` WHERE {{WHERE}} GROUP BY `city_code`, `saleman_id`, `created_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanServiceFund($isFirst = false)
    {
        $where = empty($isFirst) ? 1 : '`is_first` = 1';
        $field = empty($isFirst) ? 'fund_num' : 'fund_first_num';
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_service` AS `a`, 
            (SELECT `city_code`, `saleman_id`, `pay_day`, SUM(`fund` - `refund` - `deduct`) AS `count` FROM `workplat_merchant`.`wm_fund` WHERE {{WHERE}} GROUP BY `city_code`, `saleman_id`, `pay_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`pay_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanServiceBase()
    {
        $sql = 'TRUNCATE `workplat_statistic`.`ws_saleman_service`;<br />';
        $sql .= 'INSERT INTO `workplat_statistic`.`ws_saleman_service` (`city_code`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%Y%m"), `created_day`, FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%w"), FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%u") FROM `workplat_merchant`.`wm_contract` GROUP BY `city_code`, `created_day`, `saleman_id`;<br /><br />';
        $sql .= 'REPLACE INTO `workplat_statistic`.`ws_saleman_service` (`city_code`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%Y%m"), `pay_day`, FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%w"), FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%u") FROM `workplat_merchant`.`wm_fund` GROUP BY `city_code`, `pay_day`, `saleman_id`;<br />';
        return $sql;
    }
}
