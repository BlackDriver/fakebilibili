/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : mysql

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-02-27 21:37:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contributors
-- ----------------------------
DROP TABLE IF EXISTS `contributors`;
CREATE TABLE `contributors` (
  `contributor_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` char(60) DEFAULT NULL,
  PRIMARY KEY (`contributor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contributors
-- ----------------------------
INSERT INTO `contributors` VALUES ('1', 'Giligili配音社');
INSERT INTO `contributors` VALUES ('2', '小可儿');
INSERT INTO `contributors` VALUES ('3', '？？？');
INSERT INTO `contributors` VALUES ('4', 'LaoCAT');
INSERT INTO `contributors` VALUES ('5', '电喵大战皮卡丘');
