ALTER TABLE `wc_attachment` ADD `is_master` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '是否是主图' AFTER `orderlist`;

UPDATE `wc_attachment` AS `a`, `wc_sample` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`source_site_code` = `b`.`source_site_code` AND `a`.`source_id` = `b`.`source_id` ;

UPDATE `wc_attachment` AS `a`, `wc_sample` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_id` = `b`.`id` ;
