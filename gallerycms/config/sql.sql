ALTER TABLE `wm_merchant_comment` CHANGE `status` `status_decoration` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '装修';
ALTER TABLE `wm_merchant_comment` ADD `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '状态' AFTER `updated_at`;

UPDATE `wm_merchant` SET `orderlist` = ROUND(RAND() * 2750012);
UPDATE `wm_merchant` SET `num_owner` = 0, `num_designer` = 0, `num_realcase` = 0, `num_working` = 0, `num_comment` = 0, `status` = 0;
UPDATE `wm_designer` SET `merchant_id` = 0, `status` = 0, `created_at` = 0, `updated_at` = 0, `sample_num` = 0;
UPDATE `wm_owner` SET `merchant_id` = 0, `designer_id` = 0, `realcase_id` = 0, `working_id` = 0, `num_comment` = 0, `status` = 0, `created_at` = 0, `updated_at` = 0;
UPDATE `wm_realcase` SET `merchant_id` = 0, `owner_id` = 0, `status` = 0, `created_at` = 0, `updated_at` = 0;
UPDATE `wm_working` SET `merchant_id` = 0, `owner_id` = 0, `status` = 0, `created_at` = 0, `updated_at` = 0;
UPDATE `wm_merchant_comment` SET `merchant_id` = 0, `owner_id` = 0, `status` = 0, `created_at` = 0, `updated_at` = 0;

ALTER TABLE `wm_designer` CHANGE `orderlist` `orderlist` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序';
UPDATE `wm_designer` SET `orderlist` = ROUND(RAND() * 2750012);
ALTER TABLE `wm_merchant_comment` ADD `orderlist` INT(10) NOT NULL DEFAULT '0' COMMENT '排序' AFTER `city`;
ALTER TABLE `wm_merchant_comment` CHANGE `orderlist` `orderlist` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序';
UPDATE `wm_merchant_comment` SET `orderlist` = ROUND(RAND() * 2750012);
ALTER TABLE `wm_owner` CHANGE `orderlist` `orderlist` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序';
UPDATE `wm_owner` SET `orderlist` = ROUND(RAND() * 2750012);
ALTER TABLE `wm_working` CHANGE `orderlist` `orderlist` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序';
UPDATE `wm_working` SET `orderlist` = ROUND(RAND() * 2750012);
ALTER TABLE `wm_realcase` CHANGE `orderlist` `orderlist` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序';
UPDATE `wm_realcase` SET `orderlist` = ROUND(RAND() * 2750012);

UPDATE `wc_ask_question` SET `created_at` = ROUND(RAND() * 2750012);
SELECT `name`, CONCAT('http://www.tu8zhang.com/', `code`, '/') AS `pc站`, CONCAT('http://wap.tu8zhang.com/', `code`, '/') AS `wap站`, CONCAT('http://3g.tu8zhang.com/', `code`, '/') AS `3g站`, CONCAT('http://m.tu8zhang.com/', `code`, '/') AS `m站` FROM `wp_company` WHERE 1
