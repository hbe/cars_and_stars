# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.27)
# Database: cars-and-stars
# Generation Time: 2012-11-13 22:40:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table class
# ------------------------------------------------------------

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `c_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table core_class
# ------------------------------------------------------------

DROP TABLE IF EXISTS `core_class`;

CREATE TABLE `core_class` (
  `c_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table core_student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `core_student`;

CREATE TABLE `core_student` (
  `stud_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table core_test
# ------------------------------------------------------------

DROP TABLE IF EXISTS `core_test`;

CREATE TABLE `core_test` (
  `stud_id` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table core_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `core_user`;

CREATE TABLE `core_user` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table login
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `l_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  `role` int(1) NOT NULL COMMENT '0 = admin, 1 = user',
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;

INSERT INTO `login` (`l_id`, `username`, `email`, `password`, `role`)
VALUES
	(1,'superadmin','jsyah@hbe.com.au','hawker',0);

/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table question_answer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `question_answer`;

CREATE TABLE `question_answer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `answer` text NOT NULL COMMENT 'every answer will be separated by ","',
  `type` text NOT NULL COMMENT '1.) every type will be separated by "," |2.) this field is to store the type of the answer (e.g. reading, writing)',
  `option` text,
  `book` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `question_answer` WRITE;
/*!40000 ALTER TABLE `question_answer` DISABLE KEYS */;

INSERT INTO `question_answer` (`id`, `answer`, `type`, `option`, `book`)
VALUES
	(1,'1,3,2,4,2,3,2,2,1','Reading,Writing,Guessing','a,b,c,d,e','ZZ'),
	(2,'1,1,2,1,2,3,1,4','Writing,Reading','a,b,c','XX');

/*!40000 ALTER TABLE `question_answer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table school
# ------------------------------------------------------------

DROP TABLE IF EXISTS `school`;

CREATE TABLE `school` (
  `s_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_name` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `u_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `stud_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` int(11) DEFAULT NULL,
  `lastname` int(11) DEFAULT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table student_answer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student_answer`;

CREATE TABLE `student_answer` (
  `test_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `mark` varchar(4) NOT NULL DEFAULT '' COMMENT 'mark using percentage (%)',
  `date` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `student_answer` WRITE;
/*!40000 ALTER TABLE `student_answer` DISABLE KEYS */;

INSERT INTO `student_answer` (`test_id`, `stud_id`, `answer`, `mark`, `date`)
VALUES
	(11,123,'1,1,1,1,1,1,1,1','50','11/11/12');

/*!40000 ALTER TABLE `student_answer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table test_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `test_group`;

CREATE TABLE `test_group` (
  `t_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `test_name` int(11) DEFAULT NULL,
  `book` varchar(2) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table unique_code
# ------------------------------------------------------------

DROP TABLE IF EXISTS `unique_code`;

CREATE TABLE `unique_code` (
  `u_code` varchar(11) NOT NULL DEFAULT '',
  `used` int(1) DEFAULT NULL COMMENT '0 = false, 1 = true',
  PRIMARY KEY (`u_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` int(11) DEFAULT NULL,
  `lastname` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
