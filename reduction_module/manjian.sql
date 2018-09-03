/*
Navicat MySQL Data Transfer

Source Server         : 地老天荒果
Source Server Version : 50718
Source Host           : gz-cdb-9yvp3vjn.sql.tencentcdb.com:63119
Source Database       : manjian

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2018-09-01 21:28:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for manjian
-- ----------------------------
DROP TABLE IF EXISTS `manjian`;
CREATE TABLE `manjian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `less` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
