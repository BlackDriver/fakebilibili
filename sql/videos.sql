/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : mysql

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-03-04 00:02:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `video_id` int(20) NOT NULL AUTO_INCREMENT,
  `contributor_id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `comment_id` int(20) DEFAULT NULL,
  `contributor` varchar(60) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('1', '1', '1', '1', 'Giligili配音社', '【Giligili配音社】小拳拳胸口碎大石-宣传视频第一弹！！', '\r\nBGM：on and on</br>\r\n素材：配音社部分成员</br>\r\n参考制作视频：av8549304</br>\r\n音频后期：施屹成 伍睿璇</br>\r\n视频：施屹成');
INSERT INTO `videos` VALUES ('3', '3', '1', '2', '？？？', 'papi酱', null);
INSERT INTO `videos` VALUES ('4', '4', '1', '3', 'LaoCAT', '不如修仙（熬夜的注视）', '\r\nBGM：不如跳舞</br>\r\n熬夜做视频的UP没有性生活');
INSERT INTO `videos` VALUES ('2', '2', '1', '4', '小可儿', '【最难念】我的电音名字', '\r\nbgm : skrillex - ragga bomb</br>\r\n跟风檬神（其实很早就想做了</br>\r\n做完之后我自己都会念了。。。');
INSERT INTO `videos` VALUES ('5', '5', '2', '5', '电喵大战皮卡丘', '【耳机福利】【Electro House】Virtual Riot - In My Head(VIP Mix)', '\r\nVirtual Riot声云:soundcloud.com/Virtual-riot</br>\r\nVirtual Riot脸书:facebook.com/virtualriotmusic</br>\r\nPRXZM声云:soundcloud.com/PRXZM</br>\r\n背景画师sakimichan:deviantart.com/art/Velvet-Crowe-662171894</br>\r\n画师脸书:facebook.com/Sakimichanart/</br>');
