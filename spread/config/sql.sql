SELECT `service_id`, COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` < 20170501 AND `merchant_id` IN (684, 686) GROUP BY `service_id`;
UPDATE `wd_user_merchant` AS `m`, `wd_user` AS `u` SET `m`.`service_id` = `u`.`service_id` WHERE `u`.`service_id` IN (27, 28, 31) AND `u`.`mobile` = `m`.`mobile` AND `m`.`service_id` != `u`.`service_id`;


UPDATE `workad_decoration`.`wd_user_merchant` SET `created_day` = FROM_UNIXTIME(`created_at`, '%Y%m%d'), `created_month` = FROM_UNIXTIME(`created_at`, '%Y%m'), `created_week` = FROM_UNIXTIME(`created_at`, '%u'), `created_weekday` = FROM_UNIXTIME(`created_at`, '%w');
UPDATE `workad_decoration`.`wd_user_merchant` SET `created_weekday` = 7 WHERE `created_weekday` = 0;

ALTER TABLE `wd_user_merchant` ADD `created_day` INT(10) NOT NULL DEFAULT '0' COMMENT '日期' AFTER `description`, ADD `created_month` INT(10) NOT NULL DEFAULT '0' COMMENT '月份' AFTER `created_day`, ADD `created_week` INT(10) NOT NULL DEFAULT '0' COMMENT '周' AFTER `created_month`, ADD `created_weekday` INT(10) NOT NULL DEFAULT '0' COMMENT '周几' AFTER `created_week`;

SELECT FROM_UNIXTIME(`created_at`, '%Y%m%d'), `merhcant_id` FROM `wd_user_merchant` GROUP BY FROM_UNIXTIME(`created_at`, '%Y%m%d'), `merchant_id`;


UPDATE `wd_user` AS `a`, `wd_user_third` AS `b` SET `b`.`status` = 'yes' WHERE `a`.`merchant_id` = 3 AND `a`.`mobile` = `b`.`mobile`;

INSERT INTO `wd_user` (`merchant_id`, `city_code`, `client_type`, `mobile`, `name`, `city_input`, `area_input`, `channel`, `sem_account`, `plan_id`, `unit_id`, `signup_num`, `position`, `note`, `message`, `signup_ip`, `signup_city`, `signup_at`, `keyword`, `keyword_search`, `service_id`, `view_at`, `invalid_status`, `callback_again`, `is_weigh`, `is_order`, `status`, `status_input`, `created_at`, `created_month`, `created_day`, `created_hour`, `created_week`, `created_weekday`) 
SELECT `merchant_id`, `city_code`, `client_type`, `mobile`, `name`, `city_input`, `area_input`, `channel`, `sem_account`, `plan_id`, `unit_id`, `signup_num`, `position`, `note`, `message`, `signup_ip`, `signup_city`, `signup_at`, `keyword`, `keyword_search`, `service_id`, `view_at`, `invalid_status`, `callback_again`, `is_weigh`, `is_order`, `status`, `status_input`, `created_at`, `created_month`, `created_day`, `created_hour`, `created_week`, `created_weekday` FROM `wd_user_third` WHERE `city_code` = 'beijing' AND `status` = '' AND `service_id` = 27 ORDER BY `id` DESC LIMIT 100;
UPDATE `wd_user` SET `service_num` = 1 WHERE `merchant_id` = 3 AND `service_num` = 0;



SELECT `name` AS `社区名称`, `name_short` AS `社区简称`, `town_name` AS `镇名称`, `town_name_short` AS `镇简称`, `county_name` AS `区县名称`, `county_name_short` AS `区县简称` FROM `wc_region_village_full` WHERE `province_id` = '120';

-----------------------------------------------


SELECT FROM_UNIXTIME(`signup_at`) AS `报名时间`, `mobile` AS `手机号`, `name` AS `业主称呼`, `client_type` AS `PC还是手机`, `area_input` AS `房屋面积`, `city_input` AS `输入城市`, `signup_city` AS `IP所在城市`, `note` AS `备注` FROM `wd_user` WHERE `merchant_id` = 678;

SELECT `keyword`, SUM(`visit_num`) AS `访问数`, SUM(`visit_num_success`) AS `报名数` FROM `ws_keyword_origin` GROUP BY `keyword`;
SELECT `keyword_search`, SUM(`visit_num`) AS `访问数`, SUM(`visit_num_success`) AS `报名数` FROM `ws_keyword_origin` GROUP BY `keyword_search`;

SELECT `keyword`, `keyword_search`, SUM(`visit_num`) AS `访问数`, SUM(`visit_num_success`) AS `报名数` FROM `ws_keyword_origin` GROUP BY `keyword`, `keyword_search`;
SELECT `keyword_search`, `keyword`, SUM(`visit_num`) AS `访问数`, SUM(`visit_num_success`) AS `报名数` FROM `ws_keyword_origin` GROUP BY `keyword_search`, `keyword`;
