/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : mysql

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-03-04 06:26:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lzl
-- ----------------------------
DROP TABLE IF EXISTS `lzl`;
CREATE TABLE `lzl` (
  `post_id` int(20) NOT NULL,
  `reply_name` varchar(255) DEFAULT NULL,
  `contents` text,
  `dates` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

