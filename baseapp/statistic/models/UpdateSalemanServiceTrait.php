<?php

namespace baseapp\statistic\models;

use subsite\decoration\models\MerchantFee;

trait UpdateSalemanServiceTrait
{
    public function salemanServiceSql()
    {
        $sql = $this->_salemanServiceBase();
        $sql .= $this->updateCurrentNum();
        $sql .= $this->_salemanServiceContract();
        $sql .= $this->_salemanServiceFund('`is_first` = 0', 'fund_num');
        $sql .= $this->_salemanServiceFund('`is_first` = 1', 'fund_first_num');
        $sql .= $this->_salemanServiceFund('1', 'fund_all_num');
        $sql .= $this->_salemanServiceFund('1', 'user_num', '`num`');
        $sql .= $this->_salemanServiceFund('1', 'user_current_num', '`num_current`');
        $sql .= $this->_salemanServiceFund('1', 'fund_current_num', '`fund_current`');
        return $sql;
    }

    protected function _salemanServiceContract()
    {
        $where = 1;
        $field = 'contract_num';
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_service` AS `a`, 
            (SELECT `city_code`, `merchant_id`, `saleman_id`, `created_day`, COUNT(*) AS `count` FROM `workplat_merchant`.`wm_contract` WHERE {{WHERE}} GROUP BY `city_code`, `merchant_id`, `saleman_id`, `created_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`merchant_id` = `b`.`merchant_id` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanServiceFund($where, $field, $sum = '`fund` - `refund` - `deduct`')
    {
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_service` AS `a`, 
            (SELECT `city_code`, `merchant_id`, `saleman_id`, `pay_day`, SUM({$sum}) AS `count` FROM `workplat_subsite`.`wd_merchant_fee` WHERE {{WHERE}} GROUP BY `city_code`, `merchant_id`, `saleman_id`, `pay_day`) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`merchant_id` = `b`.`merchant_id` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`pay_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanServiceBase()
    {
        $sql = 'TRUNCATE `workplat_statistic`.`ws_saleman_service`;<br />';
        $sql .= 'INSERT INTO `workplat_statistic`.`ws_saleman_service` (`city_code`, `merchant_id`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `merchant_id`, `saleman_id`, FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%Y%m"), `created_day`, FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%w"), FROM_UNIXTIME(UNIX_TIMESTAMP(`created_day`), "%u") FROM `workplat_merchant`.`wm_contract` GROUP BY `city_code`, `merchant_id`, `created_day`, `saleman_id`;<br /><br />';
        $sql .= 'REPLACE INTO `workplat_statistic`.`ws_saleman_service` (`city_code`, `merchant_id`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `merchant_id`, `saleman_id`, FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%Y%m"), `pay_day`, FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%w"), FROM_UNIXTIME(UNIX_TIMESTAMP(`pay_day`), "%u") FROM `workplat_subsite`.`wd_merchant_fee` GROUP BY `city_code`, `merchant_id`, `pay_day`, `saleman_id`;<br />';
        return $sql;
    }

    public function updateCurrentNum()
    {
        $model = new MerchantFee();
        return $model->updateCurrentNum();
    }
}
