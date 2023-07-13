/*
 Navicat Premium Data Transfer

 Source Server         : MacOs okal
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:3306
 Source Schema         : db_if4b

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 13/07/2023 11:13:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barang
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE `tb_barang` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_barang
-- ----------------------------
BEGIN;
INSERT INTO `tb_barang` VALUES (1, 'Buku Gambar', 10000, 10);
INSERT INTO `tb_barang` VALUES (2, 'Pensil Warna', 5000, 50);
INSERT INTO `tb_barang` VALUES (3, 'Pulpen', 8000, 20);
INSERT INTO `tb_barang` VALUES (4, 'Laptop', 5000000, 10);
INSERT INTO `tb_barang` VALUES (5, 'Komputer', 500000, 10);
INSERT INTO `tb_barang` VALUES (6, 'Laptop2', 5000000, 10);
INSERT INTO `tb_barang` VALUES (7, 'Laptop3', 5000000, 10);
INSERT INTO `tb_barang` VALUES (8, 'Laptop4', 5000000, 10);
INSERT INTO `tb_barang` VALUES (9, 'Laptop5', 5000000, 10);
INSERT INTO `tb_barang` VALUES (10, 'Laptop6', 5000000, 10);
INSERT INTO `tb_barang` VALUES (11, 'Meja', 4000, 50);
INSERT INTO `tb_barang` VALUES (12, 'Meja Belajar', 10, 10);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
