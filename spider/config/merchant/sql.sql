SELECT `c`.`name`, `c`.`code`, `m`.`source_city_code`  FROM `wp_company` AS `c`, `work_spider`.`ws_list_merchant` AS `m` WHERE `c`.`name_full` = `m`.`source_city_name`;
UPDATE `wp_company` AS `c`, `work_spider`.`ws_list_merchant` AS `m` SET `c`.`logo` = 99 WHERE `c`.`name_full` = `m`.`source_city_name`;
UPDATE `wp_company` AS `c`, `work_spider`.`ws_list_merchant` AS `m` SET `m`.`city_code` = `c`.`code` WHERE `c`.`name_full` = `m`.`source_city_name` ;

SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%常熟%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%义乌%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%昆山%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%江阴%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%凯里%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%大理%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%楚雄%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%西双版纳%';
SELECT * FROM `ws_list_merchant` WHERE `source_city_name` LIKE '%锡林郭勒%';
