ALTER TABLE `wp_auth_manager` CHANGE `username` `name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '帐号';
ALTER TABLE `wp_auth_managerlog` CHANGE `manager_username` `manager_name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '管理员帐号';
