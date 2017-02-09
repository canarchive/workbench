UPDATE `wc_quote` SET `style` = 'cn' WHERE `style` = 'CN';
UPDATE `wc_quote` SET `style` = 'en' WHERE `style` = 'EN';
UPDATE `wc_quote` SET `style` = 'newclassics' WHERE `style` = 'nwe-classics';
UPDATE `wc_quote` SET `style` = 'simpleen' WHERE `style` = 'simple-EN';
UPDATE `wc_quote` SET `style` = 'us' WHERE `style` = 'US';

UPDATE `wc_sample` SET `style` = 'cn' WHERE `style` = 'CN';
UPDATE `wc_sample` SET `style` = 'en' WHERE `style` = 'EN';
UPDATE `wc_sample` SET `style` = 'newclassics' WHERE `style` = 'nwe-classics';
UPDATE `wc_sample` SET `style` = 'simpleen' WHERE `style` = 'simple-EN';
UPDATE `wc_sample` SET `style` = 'us' WHERE `style` = 'US';

UPDATE `wc_sample` SET `area` = 'one' WHERE `area_real` <= 60;
UPDATE `wc_sample` SET `area` = 'two' WHERE `area_real` > 60 AND `area_real` <= '80';
UPDATE `wc_sample` SET `area` = 'three' WHERE `area_real` > 80 AND `area_real` <= '100';
UPDATE `wc_sample` SET `area` = 'four' WHERE `area_real` > 100 AND `area_real` <= '120';
UPDATE `wc_sample` SET `area` = 'five' WHERE `area_real` > 120 AND `area_real` <= '160';
UPDATE `wc_sample` SET `area` = 'six' WHERE `area_real` > 160;
