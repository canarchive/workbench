ALTER TABLE `wm_user` DROP `encrypt`;
ALTER TABLE `wm_user` DROP `truename`;
ALTER TABLE `wm_user` DROP `service_id`;

ALTER TABLE `wd_user`
  DROP `sem_account`,
  DROP `client_type`,
  DROP `plan_id`,
  DROP `unit_id`,
  DROP `city_input`,
  DROP `area_input`,
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




ALTER TABLE `wd_user` ADD `updated_at` INT(10) NOT NULL DEFAULT '0' COMMENT '更新时间' AFTER `created_at`;
ALTER TABLE `wd_user` ADD `conversion_id` INT(10) NOT NULL DEFAULT '0' COMMENT '转化信息ID' AFTER `id`;

ALTER TABLE `wd_conversion` ADD `position` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '位置' AFTER `url_pre`, ADD `note` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT '备注' AFTER `position`;
ALTER TABLE `wd_callback` ADD `status` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '状态' AFTER `note`;

ALTER TABLE `wm_merchant` ADD `code` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '代码' AFTER `id`;
ALTER TABLE `wm_user` ADD `name` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '姓名' AFTER `id`;

ALTER TABLE `ws_keyword_origin` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
ALTER TABLE `ws_report_origin` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
ALTER TABLE `ws_report_service_origin` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
ALTER TABLE `ws_dispatch_origin` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;

-----------------



ALTER TABLE `wd_sem_template` DROP `layout`;
ALTER TABLE `wd_sem_domain` CHANGE `domain_pc` `copyright` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '版权信息';
ALTER TABLE `wd_sem_domain` CHANGE `domain_mobile` `icp` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'ICP备案';


ALTER TABLE `wm_service` ADD `user_id` SMALLINT(5) NOT NULL DEFAULT '0' COMMENT '用户ID' AFTER `id`;

ALTER TABLE `wd_visit` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
ALTER TABLE `wd_conversion` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
