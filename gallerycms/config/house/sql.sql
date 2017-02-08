INSERT INTO `wc_ask_question` (`name`, `category`, `description`, `img`, `source_code`,`source_id`) 
SELECT `question_title`, `question_category`, `question_description`, `question_img`,'to8to',`question_id` 
FROM `ask_to8to_question`; 

INSERT INTO `wc_ask_question` (`name`, `category`, `description`, `img`, `source_code`,`source_id`) 
SELECT `question_title`, `question_category`, `question_description`, `question_img`,'meilele',`question_id` 
FROM `ask_meilele_question`; 

INSERT INTO `wc_ask_question` (`name`, `category`, `description`, `img`, `source_code`,`source_id`) 
SELECT `question_title`, `question_category`, `question_description`, `question_img`,'jiuzheng',`question_id` 
FROM `ask_jiuzheng_question`; 

INSERT INTO `wc_ask_question` (`name`, `category`, `description`, `img`, `source_code`,`source_id`) 
SELECT `question_title`, `question_category`, `question_description`, `question_img`,'jia',`question_id` 
FROM `ask_jia_question`; 

INSERT INTO `wc_ask_answer_bak` (`description`, `img`, `authkey`, `source_code`,`source_id`, `source_question_id`) 
SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` 
FROM `ask_tobato_answer`; 

INSERT INTO `wc_ask_answer_bak` (`description`, `img`, `authkey`, `source_code`,`source_id`, `source_question_id`) 
SELECT `answer_content`, `answer_img`,`is_best`, 'jia',`answer_id`, `question_id` 
FROM `ask_jia_answer`; 

INSERT INTO `wc_ask_answer_bak` (`description`, `img`, `authkey`, `source_code`,`source_id`, `source_question_id`) 
SELECT `answer_content`, `answer_img`,`is_best`, 'melele',`answer_id`, `question_id` 
FROM `ask_meilele_answer`; 

INSERT INTO `wc_ask_answer_bak` (`description`, `img`, `authkey`, `source_code`,`source_id`, `source_question_id`) 
SELECT `answer_content`, `answer_img`,`is_best`, 'jiuzheng',`answer_id`, `question_id` 
FROM `ask_jiuzheng_answer`; 

UPDATE `wc_ask_answer_bak` SET `is_best` = 1 WHERE `authkey` = 'yes';
UPDATE `wc_ask_question` AS `q`, `wc_ask_answer_bak` AS `a` SET `a`.`question_id` = `q`.`id` WHERE `q`.`source_code` = `a`.`source_code` AND `q`.`source_id` = `a`.`source_question_id` ;


INSERT INTO `wc_ask_answer_2` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 2000001, 1000000;

INSERT INTO `wc_ask_answer_1` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 1000001, 1000000;

INSERT INTO `wc_ask_answer_2` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 2000001, 1000000;

INSERT INTO `wc_ask_answer_3` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 3000001, 1000000;

INSERT INTO `wc_ask_answer_4` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 4000001, 1000000;

INSERT INTO `wc_ask_answer_5` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 5000001, 1000000;

INSERT INTO `wc_ask_answer_6` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 6000001, 1000000;

INSERT INTO `wc_ask_answer_7` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'to8to',`answer_id`, `question_id` FROM `ask_tobato_answer` ORDER BY `answer_id` LIMIT 7000001, 1000000;

INSERT INTO `wc_ask_answer_7` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'jia',`answer_id`, `question_id` FROM `ask_jia_answer`; 

INSERT INTO `wc_ask_answer_7` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'meilele',`answer_id`, `question_id` FROM `ask_meilele_answer`; 

INSERT INTO `wc_ask_answer_7` (`description`, `img`, `source_is_best`, `source_code`,`source_id`, `source_question_id`) SELECT `answer_content`, `answer_img`,`is_best`, 'jiuzheng',`answer_id`, `question_id` FROM `ask_jiuzheng_answer`; 
