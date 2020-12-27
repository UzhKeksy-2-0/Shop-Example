CREATE TABLE `book` (id INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY ( id )) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ;
ALTER TABLE `book` ADD `title`  VARCHAR(191)  ;
ALTER TABLE `book` ADD `rating`  VARCHAR(191)  ;
ALTER TABLE `book` ADD `published`  DATE  ;
ALTER TABLE `book` ADD `dollar`  INT(11) UNSIGNED  ;
CREATE TABLE `data` (id INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY ( id )) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci ;
ALTER TABLE `data` ADD `fr`  INT(11) UNSIGNED  ;
ALTER TABLE `data` ADD `book_id`  INT(11) UNSIGNED  ;
CREATE INDEX index_foreignkey_data_book ON `data` (`book_id`) ;