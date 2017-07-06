SELECT `mobile`, `id`, `created_day` FROM `wd_user` WHERE `created_day` >= 20170601 AND `created_day`<= 20170704 AND `merchant_id` NOT IN (688, 689) GROUP BY `mobile`;
