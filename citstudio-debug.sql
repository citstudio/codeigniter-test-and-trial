/*
Navicat MySQL Data Transfer

Source Server         : CITSTUDIO [::1]
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : citstudio-debug

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-03-06 10:25:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `maps`
-- ----------------------------
DROP TABLE IF EXISTS `maps`;
CREATE TABLE `maps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locations` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of maps
-- ----------------------------
INSERT INTO `maps` VALUES ('1', 'CITSTUDIO', '-6.918864', '107.658677', 'Konsultan IT Bandung', 'map-marker-01.png');
INSERT INTO `maps` VALUES ('2', 'WareDC', '-6.875728', '107.575025', null, 'map-marker-02.png');
INSERT INTO `maps` VALUES ('3', 'Klinik Sumber Medika', '-6.918182', '107.562062', null, 'map-marker-03.png');
INSERT INTO `maps` VALUES ('4', 'PMI Bandung', '-6.9090815', '107.617204', null, 'map-marker-04.png');
INSERT INTO `maps` VALUES ('5', 'Sagara Sunda', '-6.911941', '107.629636', null, 'map-marker-05.png');
