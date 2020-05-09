/*
 Navicat Premium Data Transfer

 Source Server         : System
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : biaobai

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 16/09/2018 15:35:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for biaobai
-- ----------------------------
DROP TABLE IF EXISTS `biaobai`;
CREATE TABLE `biaobai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '表白内容',
  `qq` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'QQ号码',
  `me` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '你的昵称',
  `you` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '对方昵称',
  `addtime` datetime NULL DEFAULT NULL COMMENT '添加时间',
  `uptime` datetime NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biaobai
-- ----------------------------
INSERT INTO `biaobai` VALUES (1, '我好喜欢你！', '734515886', '小波仔', '小刀', '2018-09-16 14:57:46', '2018-09-16 14:57:49');

SET FOREIGN_KEY_CHECKS = 1;
