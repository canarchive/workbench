UPDATE  `wd_guestbook` AS `g`, `wd_user_merchant` AS `m` SET `g`.`mobile` = `m`.`mobile`, `g`.`merchant_id` = `m`.`merchant_id` WHERE `g`.`user_merchant_id`  = `m`.`id`  ;


UPDATE `wm_user` SET `name` = `truename` WHERE `name` = '';
ALTER TABLE `wm_user` DROP `encrypt`;
ALTER TABLE `wm_user` DROP `truename`;
ALTER TABLE `wm_user` DROP `service_id`;

ALTER TABLE `wd_user`
  DROP `sem_account`,
  DROP `client_type`,
  DROP `plan_id`,
  DROP `unit_id`,
  DROP `position`,
  DROP `note`,
  DROP `signup_city`,
  DROP `signup_ip`,
  DROP `keyword`,
  DROP `keyword_search`,
  DROP `created_month`,
  DROP `created_day`,
  DROP `created_hour`,
  DROP `created_week`,
  DROP `created_weekday`;
