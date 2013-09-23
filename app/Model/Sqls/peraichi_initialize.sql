GRANT ALL PRIVILEGES ON *.* TO peraichi@"%" IDENTIFIED BY 'flyer' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON *.* TO peraichi@localhost IDENTIFIED BY 'flyer' WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE DATABASE peraichi CHARACTER SET utf8;

USE peraichi;

DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `header` text NOT NULL,
  `description` text NOT NULL,
  `html` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;