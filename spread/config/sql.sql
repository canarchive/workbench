ALTER TABLE `wm_user` CHANGE `truename` `name` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '姓名';
ALTER TABLE `wm_user` DROP `encrypt`;
ALTER TABLE `wm_user` DROP `service_id`;
-----------------


ALTER TABLE `wm_service` ADD `user_id` SMALLINT(5) NOT NULL DEFAULT '0' COMMENT '用户ID' AFTER `id`;

ALTER TABLE `wd_visit` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
ALTER TABLE `wd_conversion` ADD `sort` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '类别' AFTER `id`;
