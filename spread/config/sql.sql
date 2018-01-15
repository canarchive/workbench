UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid-back' WHERE `u`.`id` = `m`.`user_id`;
UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid-part' WHERE `u`.`id` = `m`.`user_id` AND `m`.`status` = '';
UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid' WHERE `u`.`id` = `m`.`user_id` AND `m`.`merchant_id` IN (667, 669, 671, 682) AND `m`.`status` = '';


SELECT `m`.`mobile`, `m`.`merchant_id`, `m`.`status`,`g`.`content`,`g`.`reply` FROM `wd_user_merchant` AS `m`, `wd_guestbook` AS `g` WHERE `m`.`mobile` IN ('13381005251', '18910391561', '18910648870', '17710123690', '17710668569', '13370114181', '15321125670', '13311588632', '13321139090', '18910620651', '18910622634') AND `m`.`id` = `g`.`user_merchant_id` ORDER BY `m`.`mobile` ASC;



SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170501 GROUP BY `service_id`;
SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170501 AND `status` = '' GROUP BY `service_id`;
SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170501 AND `status` = '' AND `merchant_id` IN (667, 669, 671) GROUP BY `service_id`;

SELECT `service_id`, `status`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170501 AND `merchant_id` IN (667, 669, 671) GROUP BY `service_id`, `status`;



SELECT `service_id`, `status_dispatch`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user` WHERE `status_dispatch` IN ('valid-back', 'valid-nodispatch', 'valid', 'valid-part') AND `service_id` IN (27, 28, 31) GROUP BY `service_id`, `status_dispatch` 
SELECT `service_id`, `status_dispatch`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user` WHERE `status_dispatch` IN ('valid-back', 'valid-nodispatch', 'valid', 'valid-part') AND `service_id` IN (27, 28, 31) GROUP BY `service_id` 


SELECT `service_id`, COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` < 20170501 AND `merchant_id` IN (684, 686) GROUP BY `service_id`;
UPDATE `wd_user_merchant` AS `m`, `wd_user` AS `u` SET `m`.`service_id` = `u`.`service_id` WHERE `u`.`service_id` IN (27, 28, 31) AND `u`.`mobile` = `m`.`mobile` AND `m`.`service_id` != `u`.`service_id`;


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
