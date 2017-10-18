<?php

namespace baseapp\statistic\models;

trait UpdateSalemanTrait
{
    public function salemanSql()
    {
        $sql = $this->_salemanBase();
        $sql .= $this->_salemanStatus();
        $sql .= $this->_salemanCallback();
        $sql .= $this->_salemanCallback(true);
        $sql .= $this->_salemanInterview();
        return $sql;
    }

    protected function _salemanStatus()
    {
        $elems = [
            'all_num' => '',
            'new_num' => '`status` = ""',
            'empty_num' => '`status` ="empty"',
            'follow_num' => '`status` ="follow"',
            'mismatch_num' => '`status` ="mismatch"',
            'no-purpose_num' => '`status` ="no-purpose"',
            'latent_num' => '`status` ="latent"',
            'purpose_num' => '`status` ="purpose"',
            'cooperation_num' => '`status` ="cooperation"',
            'cancel_num' => '`status` ="cancel"',
        ];
        $sql = '';
        foreach ($elems as $elemField => $where) {
            $sql .= $this->_salemanSql($where, $elemField);
        }
        return $sql;
    }

    protected function _salemanCallback($merchant = false)
    {
        $where = '';
        $field = empty($merchant) ? 'callback_num' : 'callback_merchant_num';
        $count = $merchant ? 'COUNT(DISTINCT(`merchant_id`))' : 'COUNT(*)';
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_origin` AS `a`, 
            (SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d') AS `created_day`, {$count} AS `count` FROM `workplat_merchant`.`wm_callback` GROUP BY `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d')) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanInterview($result = false)
    {
        $where = empty($result) ? 1 : '`status` = "finish"';
        $field = empty($merchant) ? 'interview_num' : 'interviewed_num';
        $count = 'COUNT(*)';
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_origin` AS `a`, 
            (SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`interview_at`, '%Y%m%d') AS `created_day`, {$count} AS `count` FROM `workplat_merchant`.`wm_interview` WHERE {{WHERE}} GROUP BY `city_code`, `saleman_id`, FROM_UNIXTIME(`interview_at`, '%Y%m%d')) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanSql($where, $field)
    {
        $where = empty($where) ? 1 : $where;
        $sqlBase = "UPDATE `workplat_statistic`.`ws_saleman_origin` AS `a`, 
            (SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d') AS `created_day`, COUNT(*) AS `count` FROM `workplat_merchant`.`wm_merchant_pond` WHERE {{WHERE}} GROUP BY `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d')) AS `b` 
            SET `a`.`{{UPFIELD}}` = `b`.`count` 
            WHERE `a`.`city_code` = `b`.`city_code` AND `a`.`saleman_id` = `b`.`saleman_id` AND `a`.`created_day` = `b`.`created_day`;";
        $sql = str_replace(['{{WHERE}}', '{{UPFIELD}}'], [$where, $field], $sqlBase) . '<br /><br />';
        return $sql;
    }

    protected function _salemanBase()
    {
        $sql = 'TRUNCATE `workplat_statistic`.`ws_saleman_origin`;';
        $sql .= 'INSERT INTO `workplat_statistic`.`ws_saleman_origin` (`city_code`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, "%Y%m"), FROM_UNIXTIME(`created_at`, "%Y%m%d"), FROM_UNIXTIME(`created_at`, "%w"), FROM_UNIXTIME(`created_at`, "%u") FROM `workplat_merchant`.`wm_merchant_pond` GROUP BY `city_code`, FROM_UNIXTIME(`created_at`, "%Y%m%d"), `saleman_id`;<br />';
        $sql .= 'REPLACE `workplat_statistic`.`ws_saleman_origin` (`city_code`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`created_at`, "%Y%m"), FROM_UNIXTIME(`created_at`, "%Y%m%d"), FROM_UNIXTIME(`created_at`, "%w"), FROM_UNIXTIME(`created_at`, "%u") FROM `workplat_merchant`.`wm_callback` GROUP BY `city_code`, FROM_UNIXTIME(`created_at`, "%Y%m%d"), `saleman_id`;<br />';
        $sql .= 'REPLACE `workplat_statistic`.`ws_saleman_origin` (`city_code`, `saleman_id`, `created_month`, `created_day`, `created_week`, `created_weekday`)
            SELECT `city_code`, `saleman_id`, FROM_UNIXTIME(`interview_at`, "%Y%m"), FROM_UNIXTIME(`interview_at`, "%Y%m%d"), FROM_UNIXTIME(`interview_at`, "%w"), FROM_UNIXTIME(`interview_at`, "%u") FROM `workplat_merchant`.`wm_interview` GROUP BY `city_code`, FROM_UNIXTIME(`interview_at`, "%Y%m%d"), `saleman_id`;<br />';
        return $sql;
    }
}
