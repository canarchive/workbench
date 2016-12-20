INSERT INTO `wc_attachment` ( `name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id`, `source_url`, `source_status`, `source_status_ext`) SELECT `name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id`, `source_url`, `source_status`, `source_status_ext` FROM `wc_attachmentmid` GROUP BY `source_id`;

INSERT INTO `wc_sample` ( `name`, `title`, `sort`, `tag`, `thumb`, `created_at`, `orderlist`, `updated_at`, `status`, `description`, `content`, `sort_name`, `tag_name`, `source_url`, `source_id`, `source_status`) SELECT `name`, `title`, `sort`, `tag`, `thumb`, `created_at`, `orderlist`, `updated_at`, `status`, `description`, `content`, `sort_name`, `tag_name`, `source_url`, `source_id`, `source_status` FROM `wc_samplemid` GROUP BY `sort`, `source_id`; 

UPDATE `wc_attachment` AS `a`, `wc_sample` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'sample' AND `info_field` = 'thumb' AND `a`.`source_id` = CONCAT(`b`.`sort`, '-' , `b`.`source_id`);
UPDATE `wc_attachment` AS `a`, `wc_sample` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_table` = 'sample' AND `info_field` = 'thumb' AND `a`.`info_id` = `b`.`id`;

UPDATE `wc_attachment` AS `a`, `wc_info` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'info' AND `info_field` = 'thumb' AND `a`.`source_id` = CONCAT(`b`.`sort`, '-' , `b`.`source_id`);
UPDATE `wc_attachment` AS `a`, `wc_info` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_table` = 'info' AND `info_field` = 'thumb' AND `a`.`info_id` = `b`.`id`;

UPDATE `wc_customer` SET `orderlist` = 0;
UPDATE `wc_customer` SET `orderlist` = `thumb`;
UPDATE `wc_attachment` AS `a`, `wc_customer` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'customer' AND `info_field` = 'thumb' AND `a`.`source_id` = `b`.`orderlist`;
UPDATE `wc_attachment` AS `a`, `wc_customer` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_table` = 'customer' AND `info_field` = 'thumb' AND `a`.`info_id` = `b`.`id`;

UPDATE `wc_star` SET `orderlist` = 0;
UPDATE `wc_star` SET `orderlist` = `thumb`;
UPDATE `wc_attachment` AS `a`, `wc_star` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'star' AND `info_field` = 'thumb' AND `a`.`source_id` = `b`.`orderlist`;
UPDATE `wc_attachment` AS `a`, `wc_star` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_table` = 'star' AND `info_field` = 'thumb' AND `a`.`info_id` = `b`.`id`;

UPDATE `wc_attachment` AS `a`, `wc_adpicture` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'adpicture' AND `info_field` = 'thumb' AND `a`.`source_id` = `b`.`description`;
UPDATE `wc_attachment` AS `a`, `wc_adpicture` AS `b` SET `b`.`thumb` = `a`.`id` WHERE `a`.`info_table` = 'adpicture' AND `info_field` = 'thumb' AND `a`.`info_id` = `b`.`id`;

UPDATE `wc_attachment` AS `a`, `wc_adpicture` AS `b` SET `a`.`info_id` = `b`.`id` WHERE `a`.`info_table` = 'adpicture' AND `info_field` = 'picture' AND `a`.`source_id` = `b`.`description`;
UPDATE `wc_attachment` AS `a`, `wc_adpicture` AS `b` SET `b`.`picture` = `a`.`id` WHERE `a`.`info_table` = 'adpicture' AND `info_field` = 'picture' AND `a`.`info_id` = `b`.`id`;
