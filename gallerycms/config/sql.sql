UPDATE `wc_ask_question` SET `created_at` = ROUND(RAND() * 2750012);
SELECT `name`, CONCAT('http://www.tu8zhang.com/', `code`, '/') AS `pc站`, CONCAT('http://wap.tu8zhang.com/', `code`, '/') AS `wap站`, CONCAT('http://3g.tu8zhang.com/', `code`, '/') AS `3g站`, CONCAT('http://m.tu8zhang.com/', `code`, '/') AS `m站` FROM `wp_company` WHERE 1
