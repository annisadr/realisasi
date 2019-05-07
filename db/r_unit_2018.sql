/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_pnbp_2017_04_09

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 03/04/2018 12:05:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for r_unit_2018
-- ----------------------------
DROP TABLE IF EXISTS `r_unit_2018`;
CREATE TABLE `r_unit_2018`  (
  `kdunit` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `baes1` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmunit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdaktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`kdunit`) USING BTREE,
  INDEX `idx_COVER_UNIT`(`kdaktif`, `kdunit`) USING BTREE,
  INDEX `idx_kdunit`(`kdunit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_unit_2018
-- ----------------------------
INSERT INTO `r_unit_2018` VALUES ('01', '03301', 'SEKRETARIAT JENDERAL', 1);
INSERT INTO `r_unit_2018` VALUES ('02', '03302', 'INSPEKTORAT JENDERAL', 1);
INSERT INTO `r_unit_2018` VALUES ('04', '03304', 'DIREKTORAT JENDERAL BINA MARGA', 1);
INSERT INTO `r_unit_2018` VALUES ('05', '03305', 'DIREKTORAT JENDERAL CIPTA KARYA', 1);
INSERT INTO `r_unit_2018` VALUES ('06', '03306', 'DIREKTORAT JENDERAL SUMBER DAYA AIR', 1);
INSERT INTO `r_unit_2018` VALUES ('07', '03307', 'DIREKTORAT JENDERAL PENYEDIAAN PERUMAHAN', 1);
INSERT INTO `r_unit_2018` VALUES ('08', '03308', 'DIREKTORAT JENDERAL PEMBIAYAAN PERUMAHAN', 1);
INSERT INTO `r_unit_2018` VALUES ('11', '03311', 'BADAN PENELITIAN DAN PENGEMBANGAN', 1);
INSERT INTO `r_unit_2018` VALUES ('13', '03313', 'DIREKTORAT JENDERAL BINA KONSTRUKSI', 1);
INSERT INTO `r_unit_2018` VALUES ('14', '03314', 'BADAN PENGEMBANGAN INFRASTRUKTUR WILAYAH', 1);
INSERT INTO `r_unit_2018` VALUES ('15', '03315', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 1);

SET FOREIGN_KEY_CHECKS = 1;
