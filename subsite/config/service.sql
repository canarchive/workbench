SELECT `service_id`, FROM_UNIXTIME(`created_at`, '%Y%m%d'), COUNT(*) FROM `wd_user` WHERE FROM_UNIXTIME(`created_at`, '%Y%m%d') >= 20170701 AND `merchant_id` = 2 GROUP BY FROM_UNIXTIME(`created_at`, '%Y%m%d'), `service_id`;

UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `m`.`user_id` = `u`.`id` WHERE `m`.`user_id` = 0 AND `m`.`mobile` = `u`.`mobile` AND `u`.`merchant_id` = 2;

UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid-back' WHERE `u`.`id` = `m`.`user_id`;
UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid-part' WHERE `u`.`id` = `m`.`user_id` AND `m`.`status` = ''; 
UPDATE `wd_user` AS `u`, `wd_user_merchant` AS `m` SET `u`.`status` = 'valid' WHERE `u`.`id` = `m`.`user_id` AND `m`.`merchant_id` IN (667, 669, 671, 682) AND `m`.`status` = '';


UPDATE `wd_user` SET `is_dispatch` = 1 WHERE `merchant_id` = 2 AND FROM_UNIXTIME(`created_at`, '%Y%m%d') < FROM_UNIXTIME(unix_timestamp(now()) - 43200, '%Y%m%d') AND `service_id` NOT IN (46, 47) AND `status` NOT IN ('valid', 'valid-part');
UPDATE `wd_user` SET `service_num` = `service_num` + 1 WHERE `merchant_id` = 2 AND FROM_UNIXTIME(`created_at`, '%Y%m%d') < FROM_UNIXTIME(unix_timestamp(now()) - 43200, '%Y%m%d') AND `service_id` NOT IN (46, 47) AND `status` NOT IN ('valid', 'valid-part');
UPDATE `wd_user` SET `service_id` = 46 WHERE `id` % 2 = 0 AND `merchant_id` = 2 AND FROM_UNIXTIME(`created_at`, '%Y%m%d') < FROM_UNIXTIME(unix_timestamp(now()) - 43200, '%Y%m%d') AND `service_id` NOT IN (46, 47) AND `status` NOT IN ('valid', 'valid-part');
UPDATE `wd_user` SET `service_id` = 47 WHERE `id` % 2 = 1 AND `merchant_id` = 2 AND FROM_UNIXTIME(`created_at`, '%Y%m%d') < FROM_UNIXTIME(unix_timestamp(now()) - 43200, '%Y%m%d') AND `service_id` NOT IN (46, 47) AND `status` NOT IN ('valid', 'valid-part');

INSERT `wd_user_service` (`user_id`, `merchant_id`, `service_id`, `status`, `status_change`, `is_first`, `created_at`, `created_at_point`)
SELECT `id`, `merchant_id`, `service_id`, `status`, `status`, 0, `created_at`, unix_timestamp(now()) FROM `wd_user` WHERE `is_dispatch` = 1;

------------------
INSERT `wd_user_service` (`user_id`, `merchant_id`, `service_id`, `note`, `status`, `status_change`, `is_first`, `created_at`, `created_at_point`)
SELECT `id`, `merchant_id`, `service_id`, `service_num`, '', `status`, 1, `created_at`, `created_at` FROM `wd_user`;



SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170601 AND `created_day` <= 20170630 GROUP BY `service_id`;
SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170601 AND `created_day` <= 20170630 AND `status` = '' GROUP BY `service_id`;
SELECT `service_id`, COUNT(*), COUNT(DISTINCT(`mobile`)) FROM `wd_user_merchant` WHERE `created_day` >= 20170601 AND `created_day` <= 20170630 AND `status` = '' AND `merchant_id` IN (667, 669, 671, 682, 689) GROUP BY `service_id`;
