DROP TABLE IF EXISTS `tbl_crawl_launch`;
CREATE TABLE `tbl_crawl_launch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `domain` varchar(253) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `weekly` boolean DEFAULT NULL,
  `daily` boolean DEFAULT NULL,
  `weekday` varchar(32) DEFAULT NULL,
  `last_ran` datetime DEFAULT NULL,
  `failed` boolean DEFAULT NULL,
  `errors` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`)
);

