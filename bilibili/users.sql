/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : mysql

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-02-26 22:34:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `regtime` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` char(20) DEFAULT NULL,
  `gender` enum('') DEFAULT NULL,
  `birthday` varchar(60) DEFAULT NULL,
  `marriage` char(60) DEFAULT NULL,
  `interests` text,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'guixuan', null, null, null, null, null, null, null, '82d92703df4e84e7105be7a2c2eb8ee0');
INSERT INTO `users` VALUES ('4', '123', null, null, null, null, null, null, null, '202cb962ac59075b964b07152d234b70');
