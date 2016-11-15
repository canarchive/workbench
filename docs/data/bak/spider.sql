

UPDATE `wm_owner` AS `t1`, `wm_realcase` as `t2` SET `t1`.`realcase_id` = `t2`.`id` WHERE `t1`.`id` = `t2`.`owner_id`;
UPDATE `wm_owner` AS `t1`, `wm_working` as `t2` SET `t1`.`working_id` = `t2`.`id` WHERE `t1`.`id` = `t2`.`owner_id`;
UPDATE `wm_owner` AS `t1`, (SELECT `owner_id`, COUNT(*) AS `count` FROM `wm_merchant_comment` GROUP BY `owner_id`) as `t2` SET `t1`.`num_comment` = `t2`.`count` WHERE `t1`.`id` = `t2`.`owner_id`;

UPDATE `wm_merchant` SET `num_owner` = 0, `num_designer` = 0, `num_realcase` = 0, `num_working` = 0, `num_comment` = 0;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_owner` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_owner` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_designer` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_designer` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_realcase` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_realcase` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_working` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_working` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_merchant_comment` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_comment` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;

UPDATE `wm_designer` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_owner` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_merchant_comment` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_realcase` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_working` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;

UPDATE `wm_merchant` SET `score` = ROUND(4+RAND(), 1), `num_owner` = FLOOR( 50 + RAND() * (500 - 50)), `num_realcase` = FLOOR( 3 + RAND() * (10 - 3)), `num_working` = FLOOR( 1 + RAND() * (10 - 1)), `praise` = FLOOR( 100 + RAND() * (300 - 100)) WHERE 1
UPDATE `wm_merchant` SET `score` = `score` + 0.4 WHERE `score` < 4.5


UPDATE `workhouse_merchant`.`wm_owner` AS `o`, (SELECT `owner_id`, COUNT(*) AS `count` FROM `workhouse_merchant`.`wm_merchant_comment` GROUP BY `owner_id`) AS `r` SET `o`.`num_comment` = `r`.`count` WHERE `r`.`owner_id` = `o`.`id`;
UPDATE `workhouse_merchant`.`wm_owner` AS `o`, `workhouse_merchant`.`wm_realcase` AS `r` SET `o`.`realcase_id` = `r`.`id` WHERE `r`.`owner_id` = `o`.`id`;
UPDATE `workhouse_merchant`.`wm_owner` AS `o`, `workhouse_merchant`.`wm_working` AS `r` SET `o`.`working_id` = `r`.`id` WHERE `r`.`owner_id` = `o`.`id`;


UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `a`.`info_id` = `m`.`id`  WHERE `a`.`info_table` = 'merchant' AND `a`.`source_id` = `m`.`source_id`;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `m`.`logo` = `a`.`id`  WHERE `m`.`logo` = 0 AND `a`.`info_table` = 'merchant' AND `a`.`info_field` = 'logo' AND `a`.`info_id` = `m`.`id`;


UPDATE `workhouse_merchant`.`wm_designer` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_detail` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_integrity` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_merchant_comment` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_owner` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_woring` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_realcase` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_designer` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'designer' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_designer` AS `d` SET `d`.`photo` = `a`.`id`  WHERE `a`.`info_table` = 'designer' AND `a`.`info_field` = 'photo' AND `a`.`info_id` = `d`.`id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`thumb` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'thumb' AND `a`.`info_id` = `d`.`id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`picture_design` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'picture_design' AND `a`.`info_id` = `d`.`id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`picture_origin` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'picture_origin' AND `a`.`info_id` = `d`.`id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_working` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'working' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_working` AS `d` SET `d`.`thumb` = `a`.`id`  WHERE `a`.`info_table` = 'working' AND `a`.`info_field` = 'thumb' AND `a`.`info_id` = `d`.`id`;

UPDATE `workhouse_merchant`.`wm_merchant_comment` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_owner_mark` = `b`.`mark`;

UPDATE `workhouse_merchant`.`wm_designer` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `b`.`designer_id` = `a`.`id`  WHERE `a`.`source_id` = `b`.`source_designer_id`;

UPDATE `workhouse_merchant`.`wm_realcase` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_id` = `b`.`source_id`;
UPDATE `workhouse_merchant`.`wm_working` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_id` = `b`.`source_id`;
