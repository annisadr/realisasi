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

 Date: 03/04/2018 12:08:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for r_mak
-- ----------------------------
DROP TABLE IF EXISTS `r_mak`;
CREATE TABLE `r_mak`  (
  `kdmak` char(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmmak` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdjenbel` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdgbkpk` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdkbkpk` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdbkpk` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdkmak` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdjenpnbp` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kdaktif` tinyint(1) UNSIGNED DEFAULT NULL,
  `ta` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  PRIMARY KEY (`kdmak`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of r_mak
-- ----------------------------
INSERT INTO `r_mak` VALUES ('421111', 'Pendapatan Minyak Bumi', '4', '42', '421', '4211', '42111', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421211', 'Pendapatan Gas Bumi', '4', '42', '421', '4212', '42121', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421321', 'Pendapatan Iuran Tetap Pertambangan Mineral dan Batubara ? Eksplorasi', '4', '42', '421', '4213', '42132', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421322', 'Pendapatan Iuran Tetap Pertambangan Mineral dan Batubara - Operasi Produksi', '4', '42', '421', '4213', '42132', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421323', 'Pendapatan Iuran Tetap Pertambangan Mineral dan Batubara - Izin Pertambangan Rakyat', '4', '42', '421', '4213', '42132', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421331', 'Pendapatan Iuran Produksi/Royalti Pertambangan Batubara', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421332', 'Pendapatan Iuran Produksi/Royalti Pertambangan Tembaga', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421333', 'Pendapatan Iuran Produksi/Royalti Pertambangan Emas', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421334', 'Pendapatan Iuran Produksi/Royalti Pertambangan Perak', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421335', 'Pendapatan Iuran Produksi/Royalti Pertambangan Nikel', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421336', 'Pendapatan Iuran Produksi/Royalti Pertambangan Timah', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421337', 'Pendapatan Iuran Produksi/Royalti Pertambangan Besi', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421339', 'Pendapatan Iuran Produksi/Royalti Pertambangan Lainnya', '4', '42', '421', '4213', '42133', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421341', 'Pendapatan Bagian Pemerintah dari Keuntungan Bersih Pemegang Izin Usaha Pertambangan Khusus (IUPK)', '4', '42', '421', '4213', '42134', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421411', 'Pendapatan Dana Reboisasi', '4', '42', '421', '4214', '42141', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421421', 'Pendapatan Provisi Sumber Daya Hutan', '4', '42', '421', '4214', '42142', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421435', 'Pendapatan Iuran Izin Usaha Pemanfaatan Hasil Hutan (IIUPHH)', '4', '42', '421', '4214', '42143', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421441', 'Pendapatan Penggunaan Kawasan Hutan Untuk Kepentingan Pembangunan Di Luar Kegiatan Kehutanan', '4', '42', '421', '4214', '42144', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421521', 'Pendapatan Pungutan Pengusahaan Perikanan Bidang Perikanan Tangkap', '4', '42', '421', '4215', '42152', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421522', 'Pendapatan Pungutan Pengusahaan Perikanan Bidang Pembudidayaan Ikan', '4', '42', '421', '4215', '42152', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421531', 'Pendapatan Pungutan Hasil Perikanan', '4', '42', '421', '4215', '42153', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421621', 'Pendapatan Pengusahaan Panas Bumi', '4', '42', '421', '4216', '42162', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421631', 'Pendapatan Iuran Tetap Panas Bumi-Eksplorasi', '4', '42', '421', '4216', '42163', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421632', 'Pendapatan Iuran Tetap Panas Bumi-Operasi Produksi', '4', '42', '421', '4216', '42163', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('421641', 'Pendapatan Iuran Produksi/Royalti Panas Bumi', '4', '42', '421', '4216', '42164', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422131', 'Pendapatan Bagian Laba BUMN Perbankan di Bawah Kementerian BUMN', '4', '42', '422', '4221', '42213', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422132', 'Pendapatan Bagian Laba BUMN Non Perbankan di Bawah Kementerian BUMN', '4', '42', '422', '4221', '42213', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422141', 'Pendapatan Bagian Laba BUMN/Lembaga Perbankan di Bawah Kementerian Keuangan', '4', '42', '422', '4221', '42214', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422142', 'Pendapatan Bagian Laba BUMN/Lembaga Non Perbankan di Bawah Kementerian Keuangan', '4', '42', '422', '4221', '42214', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422211', 'Pendapatan dari Surplus Bank Indonesia', '4', '42', '422', '4222', '42221', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422212', 'Pendapatan dari Surplus Otoritas Jasa Keuangan', '4', '42', '422', '4222', '42221', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422213', 'Pendapatan dari Surplus Lembaga Penjamin Simpanan', '4', '42', '422', '4222', '42221', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('422219', 'Pendapatan dari Surplus Lembaga Lainnya', '4', '42', '422', '4222', '42221', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424111', 'Pendapatan Jasa Pelayanan  Rumah Sakit', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424112', 'Pendapatan Jasa Pelayanan Pendidikan', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424113', 'Pendapatan Jasa Pelayanan Tenaga, Pekerjaan, Informasi, Pelatihan dan Teknologi', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424114', 'Pendapatan Jasa Pencetakan', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424115', 'Pendapatan Jasa Bandar Udara, Kepelabuhan dan Kenavigasian', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424116', 'Pendapatan Jasa Penyelenggaraan Telekomunikasi', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424117', 'Pendapatan Jasa Pelayanan Pemasaran', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424118', 'Pendapatan Penyediaan Barang', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424119', 'Pendapatan Jasa Penyediaan Barang dan Jasa Lainnya', '4', '42', '424', '4241', '42411', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424121', 'Pendapatan Pengelolaan Kawasan Otorita', '4', '42', '424', '4241', '42412', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424122', 'Pendapatan Pengelolaan Kawasan Pengembangan Ekonomi Terpadu', '4', '42', '424', '4241', '42412', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424123', 'Pendapatan Pengelolaan Fasilitas Umum Milik Pemerintah', '4', '42', '424', '4241', '42412', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424129', 'Pendapatan Pengelolaan Kawasan Lainnya', '4', '42', '424', '4241', '42412', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424131', 'Pendapatan Program Dana Penjaminan', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424132', 'Pendapatan Program Dana Penjaminan Syariah', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424133', 'Pendapatan Program Modal Ventura', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424134', 'Pendapatan Program Dana Bergulir Sektoral', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424135', 'Pendapatan Program Dana Bergulir Syariah', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424136', 'Pendapatan Investasi', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424137', 'Pendapatan Pengelolaan Dana Pengembangan Pendidikan Nasional', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424138', 'Pendapatan Dana Perkebunan Kelapa Sawit', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424139', 'Pendapatan Pengelolaan Dana Khusus Lainnya', '4', '42', '424', '4241', '42413', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424141', 'Pendapatan dari Pengelolaan Barang Milik Negara pada Pengelola Barang', '4', '42', '424', '4241', '42414', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424211', 'Pendapatan Hibah Terikat Dalam Negeri-Perorangan', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424212', 'Pendapatan Hibah Terikat Dalam Negeri-Lembaga/Badan Usaha', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424213', 'Pendapatan Hibah Terikat Dalam Negeri-Pemda', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424214', 'Pendapatan Hibah Terikat Luar Negeri-Perorangan', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424215', 'Pendapatan Hibah Terikat Luar Negeri-Lembaga/Badan Usaha', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424216', 'Pendapatan Hibah Terikat Luar Negeri-Negara', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424219', 'Pendapatan Hibah Terikat Lainnya', '4', '42', '424', '4242', '42421', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424221', 'Pendapatan Hibah Tidak Terikat Dalam Negeri-Perorangan', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424222', 'Pendapatan Hibah Tidak Terikat Dalam Negeri-Lembaga/Badan Usaha', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424223', 'Pendapatan Hibah Tidak Terikat Dalam Negeri-Pemda', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424224', 'Pendapatan Hibah Tidak Terikat Luar Negeri-Perorangan', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424225', 'Pendapatan Hibah Tidak Terikat Luar Negeri-Lembaga/Badan Usaha', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424226', 'Pendapatan Hibah Tidak Terikat Luar Negeri-Negara', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424229', 'Pendapatan Hibah Tidak Terikat -Lainnya', '4', '42', '424', '4242', '42422', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424311', 'Pendapatan Hasil Kerjasama Perorangan', '4', '42', '424', '4243', '42431', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424312', 'Pendapatan Hasil Kerja Sama Lembaga/Badan Usaha', '4', '42', '424', '4243', '42431', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424313', 'Pendapatan Hasil Kerja Sama Pemerintah Daerah', '4', '42', '424', '4243', '42431', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424911', 'Pendapatan Jasa Layanan Perbankan BLU', '4', '42', '424', '4249', '42491', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('424912', 'Pendapatan Jasa Layanan Perbankan BLU yang dibatasi pengelolaannya', '4', '42', '424', '4249', '42491', '', 1, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425111', 'Pendapatan Penjualan Hasil Tambang Batubara', '4', '42', '425', '4251', '42511', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425112', 'Pendapatan Penjualan Hasil Pertanian, Perkebunan, Peternakan dan Budidaya', '4', '42', '425', '4251', '42511', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425113', 'Pendapatan Penjualan Dokumen-dokumen Pelelangan', '4', '42', '425', '4251', '42511', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425114', 'Pendapatan Penjualan Cadangan Beras Pemerintah Dalam Rangka Operasi Pasar Murni', '4', '42', '425', '4251', '42511', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425119', 'Pendapatan Penjualan Hasil Produksi Non Litbang Lainnya', '4', '42', '425', '4251', '42511', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425121', 'Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425122', 'Pendapatan dari Penjualan Peralatan dan Mesin', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425123', 'Pendapatan Kompensasi Sewa Beli Rumah Negara Golongan III', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425124', 'Pendapatan dari Tukar Menukar Tanah, Gedung dan Bangunan', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425125', 'Pendapatan dari Tukar Menukar Peralatan dan Mesin', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425126', 'Pendapatan dari Tukar Menukar Jalan, Irigasi dan Jaringan', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425129', 'Pendapatan dari Pemindahtanganan BMN Lainnya', '4', '42', '425', '4251', '42512', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425131', 'Pendapatan Sewa Tanah, Gedung, dan Bangunan', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425132', 'Pendapatan Sewa Peralatan dan Mesin', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425133', 'Pendapatan Sewa Jalan, Irigasi dan Jaringan', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425134', 'Pendapatan dari KSP Tanah, Gedung, dan Bangunan', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425135', 'Pendapatan dari KSP Peralatan dan Mesin', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425136', 'Pendapatan dari KSP Jalan, Irigasi, dan Jaringan', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425137', 'Pendapatan dari Bangun, Guna, dan Serah (BGS)', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425138', 'Pendapatan dari Bangun, Serah, dan Guna (BSG)', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425139', 'Pendapatan dari Pemanfaatan BMN Lainnya', '4', '42', '425', '4251', '42513', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425141', 'Pendapatan atas Pengelolaan BMN yang Berasal dari KKKS', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425142', 'Pendapatan atas Pengelolaan BMN yang Berasal dari Kontraktor PKP2B', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425143', 'Pendapatan atas Pemanfaatan Aset Properti', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425144', 'Pendapatan Atas Aset Saham dan Surat Berharga Lain', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425145', 'Pendapatan Kompensasi Aset Bekas Milik Asing/Tionghoa', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425149', 'Pendapatan atas Pengelolaan BMN dan Kekayaan Negara Lainnyadari Pengelola Barang', '4', '42', '425', '4251', '42514', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425151', 'Pendapatan Penggunaan Sarana dan Prasarana sesuai dengan Tusi', '4', '42', '425', '4251', '42515', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425161', 'Pendapatan Bersih Hasil Penjualan Bahan Bakar Minyak', '4', '42', '425', '4251', '42516', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425162', 'Pendapatan Minyak Mentah (DMO)', '4', '42', '425', '4251', '42516', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425169', 'Pendapatan Lainnya dari Kegiatan Hulu Migas', '4', '42', '425', '4251', '42516', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425171', 'Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Penyediaan dan Pendistribusian BBM', '4', '42', '425', '4251', '42517', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425172', 'Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Gas Bumi Melalui Pipa', '4', '42', '425', '4251', '42517', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425211', 'Pendapatan Paspor', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425212', 'Pendapatan Visa', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425213', 'Pendapatan Izin Keimigrasiandan Izin Masuk Kembali (Re-entry permit)', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425214', 'Pendapatan Pelayanan Keimigrasian Lainnya', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425215', 'Pendapatan Pelayanan Fidusia', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425216', 'Pendapatan Pelayanan Badan Hukum', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425217', 'Pendapatan Pelayanan Jasa Hukum Lainnya', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425218', 'Pendapatan Pelayanan Kekayaan Intelektual', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425219', 'Pendapatan Pelayanan dan Administrasi Hukum Lainnya', '4', '42', '425', '4252', '42521', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425221', 'Pendapatan Visa Republik Indonesia di Luar Negeri', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425222', 'Pendapatan Paspor Republik Indonesia di Luar Negeri', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425223', 'Pendapatan Dokumen Kekonsuleran', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425224', 'Pendapatan Jasa Pelayanan pada Kantor Dagang dan Ekonomi Indonesia di Luar Negeri', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425228', 'Pendapatan Pelayanan Lainnya di Luar Negeri', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425229', 'Pendapatan Administrasi di Luar Negeri', '4', '42', '425', '4252', '42522', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425231', 'Pendapatan Pengesahan Surat di Bawah Tangan', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425232', 'Pendapatan Uang Meja (Leges) dan Upah pada Panitera Badan Peradilan', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425233', 'Pendapatan Ongkos Perkara', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425234', 'Pendapatan Gratifikasi yang Ditetapkan KPK Menjadi Milik Negara', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425235', 'Pendapatan Penjualan Hasil Lelang Gratifikasi', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425236', 'Pendapatan Hasil Rampasan', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425237', 'Pendapatan Denda Pelanggaran Lalu Lintas', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425238', 'Pendapatan Denda Hasil Tindak Pidana Lainnya', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425239', 'Pendapatan Kejaksaan dan Peradilan Lainnya', '4', '42', '425', '4252', '42523', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425241', 'Pendapatan Uang Sitaan Hasil Korupsi yang Telah Ditetapkan Pengadilan', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425242', 'Pendapatan Uang Sitaan Tindak Pidana Pencucian Uang yang Telah Ditetapkan', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425243', 'Pendapatan Uang Pengganti Tindak Pidana Korupsi yang Ditetapkan Pengadilan', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425244', 'Pendapatan Penjualan Hasil Lelang Tindak Pidana Pencucian Uang', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425245', 'Pendapatan Penjualan Hasil Lelang Tindak Pidana Korupsi', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425246', 'Pendapatan Denda Hasil Tindak Pidana Korupsi', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425247', 'Pendapatan Denda Hasil Tindak Pidana Pencucian Uang', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425248', 'Pendapatan Hasil Pengembalian Uang Negara', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425249', 'Pendapatan Uang Sitaan Tindak Pidana Lainnya', '4', '42', '425', '4252', '42524', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425251', 'Pendapatan Perizinan Tenaga Kerja Asing', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425252', 'Pendapatan Perizinan Pertanian', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425253', 'Pendapatan Perizinan di Bidang Perdagangan', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425254', 'Pendapatan Perizinan di Bidang Kesehatan', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425255', 'Pendapatan Perizinan di Bidang Lingkungan Hidup dan Kehutanan', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425259', 'Pendapatan Perizinan Lainnya', '4', '42', '425', '4252', '42525', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425261', 'Pendapatan Penerbitan Surat Izin Mengemudi (SIM)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425262', 'Pendapatan Perpanjangan Surat Izin Mengemudi (SIM)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425263', 'Pendapatan Penerbitan Surat Tanda Nomor Kendaraan Bermotor (STNK)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425264', 'Pendapatan Pengesahan Surat Tanda Nomor Kendaraan Bermotor (STNK)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425265', 'Pendapatan Buku Pemilik Kendaraan Bermotor (BPKB)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425266', 'Pendapatan Tanda Nomor Kendaraan Bermotor (TNKB)', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425267', 'Pendapatan Ujian Keterampilan Mengemudi', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425268', 'Pendapatan Penerbitan Surat Mutasi Kendaraan Ke Luar Daerah', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425269', 'Pendapatan Nomor Registrasi Kendaraan Bermotor Pilihan', '4', '42', '425', '4252', '42526', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425271', 'Pendapatan Surat Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425272', 'Pendapatan Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425273', 'Penerbitan Surat Ijin Senjata Api dan Bahan Peledak dan Pendapatan Penerbitan Surat Keterangan Catatan Kepolisian', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425274', 'Pendapatan Surat Tanda Coba Kendaraan (STCK)', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425275', 'Pendapatan Pelayanan Satuan Pengaman', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425276', 'Pendapatan Pengamanan Obyek Vital', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425279', 'Pendapatan Pelayanan Kepolisian Lainnya', '4', '42', '425', '4252', '42527', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425281', 'Pendapatan Akreditasi', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425282', 'Pendapatan Pengujian, Sertifikasi dan Standardisasi di Bidang Lingkungan Hidup dan Kehutanan', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425283', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perindustrian', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425284', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perdagangan', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425285', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Kesehatan', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425286', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Pekerjaan', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425287', 'Pendapatan Pengujian, Sertifikasi dan Kalibrasidi Bidang Perhubungan', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425288', 'Pendapatan Sertifikasi di Bidang Komunikasi dan Informatika', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425289', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi Lainnya', '4', '42', '425', '4252', '42528', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425311', 'Pendapatan dari Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan pada Fasilitas Kesehatan Tingkat Pertama (FKTP)', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425312', 'Pendapatan dari BPJS Kesehatan pada Fasilitas Kesehatan Tingkat Lanjutan (FKTL)', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425313', 'Pendapatan Layanan Fasilitas Kesehatan', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425314', 'Pendapatan Jasa Karantina Kesehatan', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425315', 'Pendapatan Jasa Pemberian Vaksin Kesehatan', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425316', 'Pendapatan Registrasi Tenaga Kesehatan', '4', '42', '425', '4253', '42531', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425321', 'Pendapatan Jasa Pengawasan Obat dan Makanan', '4', '42', '425', '4253', '42532', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425331', 'Pendapatan Jasa Karantina Pertanian dan Peternakan', '4', '42', '425', '4253', '42533', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425332', 'Pendapatan Jasa Karantina Perikanan', '4', '42', '425', '4253', '42533', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425341', 'Pendapatan Pelayanan Pertanahan', '4', '42', '425', '4253', '42534', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425342', 'Pendapatan Peneriman Hak Atas Tanah P3MB/Presidium Kabinet Dwikora', '4', '42', '425', '4253', '42534', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425351', 'Pendapatan Jasa Kantor Urusan Agama', '4', '42', '425', '4253', '42535', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425359', 'Pendapatan Jasa Pelayanan Keagamaan Lainnya', '4', '42', '425', '4253', '42535', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425411', 'Pendapatan Ujian/Seleksi Masuk Pendidikan', '4', '42', '425', '4254', '42541', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425412', 'Pendapatan Biaya Pendidikan', '4', '42', '425', '4254', '42541', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425413', 'Pendapatan Penelitian, Pengembangan, dan Pengabdian Masyarakat', '4', '42', '425', '4254', '42541', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425419', 'Pendapatan Pendidikan Lainnya', '4', '42', '425', '4254', '42541', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425421', 'Pendapatan Layanan Pendidikan dan/atau Pelatihan', '4', '42', '425', '4254', '42542', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425429', 'Pendapatan Pengembangan Sumber Daya Manusia Lainnya', '4', '42', '425', '4254', '42542', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425431', 'Pendapatan Layanan Penelitian/Riset dan Pengembangan Iptek', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425432', 'Pendapatan Layanan Survey dan Pemetaan', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425433', 'Pendapatan Layanan Meteorologi, Klimatologi dan Geofisika', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425434', 'Pendapatan Hasil Penelitian/Riset dan Hasil Pengembangan Iptek', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425435', 'Pendapatan Hasil Survey dan Pemetaan', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425436', 'Pendapatan Royalti atas Kekayaan Intelektual', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425439', 'Pendapatan Penelitian/Riset, Survey, Pemetaan, dan Pengembangan Iptek Lainnya', '4', '42', '425', '4254', '42543', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425451', 'Pendapatan Museum', '4', '42', '425', '4254', '42545', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425459', 'Pendapatan Sejarah dan Kebudayaan Lainnya', '4', '42', '425', '4254', '42545', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425511', 'Pendapatan Pelayanan Pengujian Kendaraan Bermotor', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425512', 'Pendapatan Penggunaan Prasarana Perkeretaapian/Track Access Charge', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425513', 'Pendapatan Jasa Kepelabuhanan', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425514', 'Pendapatan Jasa Navigasi Pelayaran', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425515', 'Pendapatan Jasa Perkapalan dan Kepelautan', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425516', 'Pendapatan Jasa Kebandarudaraan', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425517', 'Pendapatan Jasa Navigasi Penerbangan', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425518', 'Pendapatan dari Konsesi Bidang Transportasi', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425519', 'Pendapatan Jasa Transportasi Lainnya', '4', '42', '425', '4255', '42551', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425521', 'Pendapatan Penggunaan Spektrum Frekuensi Radio', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425522', 'Pendapatan Hak Penyelenggaraan Telekomunikasi', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425523', 'Pendapatan Izin Penyelenggaraan Penyiaran', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425524', 'Pendapatan Izin Penyelenggaraan Pos', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425525', 'Pendapatan Kontribusi Penyelenggaraan Pos Untuk Pembiayaan Layanan Pos Universal', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425526', 'Pendapatan Pengelolaan Nama Domain Indonesia', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425529', 'Pendapatan Jasa Komunikasi dan Informatika Lainnya', '4', '42', '425', '4255', '42552', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425531', 'Pendapatan Jasa Siaran LPP RRI', '4', '42', '425', '4255', '42553', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425532', 'Pendapatan Jasa Non Siaran LPP RRI', '4', '42', '425', '4255', '42553', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425533', 'Pendapatan Jasa Siaran LPP TVRI', '4', '42', '425', '4255', '42553', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425534', 'Pendapatan Jasa Non Siaran LPP TVRI', '4', '42', '425', '4255', '42553', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425611', 'Pendapatan Wisata Alam', '4', '42', '425', '4256', '42561', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425612', 'Pendapatan Iuran di Bidang Lingkungan Hidup dan Kehutanan', '4', '42', '425', '4256', '42561', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425619', 'Pendapatan Jasa di Bidang Lingkungan Hidup dan Kehutanan Lainnya', '4', '42', '425', '4256', '42561', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425621', 'Pendapatan Jasa Pelabuhan Perikanan', '4', '42', '425', '4256', '42562', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425629', 'Pendapatan Jasa Kelautan dan Perikanan Lainnya', '4', '42', '425', '4256', '42562', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425691', 'Pendapatan Jasa Pengawasan/Pemeriksaan', '4', '42', '425', '4256', '42569', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425692', 'Pendapatan Jasa Tenaga, Pekerjaan, dan Informasi', '4', '42', '425', '4256', '42569', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425693', 'Pendapatan dari Jasa Layanan Jalan Tol', '4', '42', '425', '4256', '42569', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425694', 'Pendapatan dari Biaya Jasa Pengelolaan Sumber Daya Air (BJPSDA)', '4', '42', '425', '4256', '42569', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425699', 'Pendapatan Jasa Lainnya', '4', '42', '425', '4256', '42569', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425711', 'Pendapatan Bunga atas Investasi dalam Obligasi', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425712', 'Pendapatan PPA (eks BPPN) atas Bunga Obligasi', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425713', 'Pendapatan Bunga dari Piutang dan Penerusan Pinjaman', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425714', 'Pendapatan Bunga dari Pemberian Kredit Pemerintah', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425715', 'Pendapatan Komitmen Penerusan Pinjaman', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425716', 'Pendapatan Bunga Kredit Program', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425717', 'Pendapatan Bunga dari Rekening Pembangunan Hutan', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425719', 'Pendapatan Bunga Lainnya', '4', '42', '425', '4257', '42571', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425721', 'Pendapatan Gain on Bond Redemption atas Pembelian Kembali Obligasi Negara Jangka Panjang', '4', '42', '425', '4257', '42572', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425722', 'Pendapatan dari Transaksi Security Lending', '4', '42', '425', '4257', '42572', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425723', 'Pendapatan Gain on BondRedemption atas Pembelian Kembali Obligasi Negara Valuta Asing', '4', '42', '425', '4257', '42572', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425724', 'Pendapatan Gain on BondRedemption atas Pembelian Kembali SBSN Jangka Panjang', '4', '42', '425', '4257', '42572', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425725', 'Pendapatan Gain on Bond Redemption atas Pembelian Kembali SBSN Valuta Asing Jangka Panjang', '4', '42', '425', '4257', '42572', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425731', 'Pendapatan Premium Obligasi Negara Dalam Negeri/Rupiah', '4', '42', '425', '4257', '42573', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425732', 'Pendapatan Premium Obligasi Negara Dalam Valuta Asing', '4', '42', '425', '4257', '42573', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425733', 'Pendapatan Premium atas Surat Berharga Syariah Negara (SBSN) Dalam Negeri/Rupiah', '4', '42', '425', '4257', '42573', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425734', 'Pendapatan Premium atas Surat Berharga Syariah Negara (SBSN) Dalam Valuta Asing', '4', '42', '425', '4257', '42573', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425741', 'Pendapatan Imbal Jasa Penjaminan Infrastruktur', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425742', 'Pendapatan Selisih Harga SBN', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425743', 'Pendapatan Kupon SBN', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425744', 'Pendapatan Bunga Reverse Repo', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425745', 'Pendapatan Fee atas Transaksi Security Lending SUN', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425746', 'Pendapatan Lain-lain atas Rekening Tujuan Tertentu', '4', '42', '425', '4257', '42574', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425751', 'Pendapatan dari Selisih Kurs dalam Pengelolaan Rekening Milik BUN', '4', '42', '425', '4257', '42575', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425752', 'Pendapatan dari Untung Selisih Kurs Uang Persediaan', '4', '42', '425', '4257', '42575', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425753', 'Pendapatan dari Selisih Kurs yang Terealisasi', '4', '42', '425', '4257', '42575', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425761', 'Pendapatan Layanan Jasa Perbankan', '4', '42', '425', '4257', '42576', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425762', 'Pendapatan Jasa Bank dari Penerusan Pinjaman', '4', '42', '425', '4257', '42576', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425763', 'Pendapatan Biaya Lain-lain Penerusan Pinjaman', '4', '42', '425', '4257', '42576', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425764', 'Pendapatan Jasa Lembaga Keuangan (Jasa Giro)', '4', '42', '425', '4257', '42576', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425765', 'Pendapatan dari Penutupan Rekening', '4', '42', '425', '4257', '42576', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425771', 'Pendapatan atas Penerbitan SP2D Dalam Rangka TSA', '4', '42', '425', '4257', '42577', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425772', 'Pendapatan atas Penempatan Uang Negara Pada Bank Umum', '4', '42', '425', '4257', '42577', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425773', 'Pendapatan dari Pelaksanaan Treasury National Pooling', '4', '42', '425', '4257', '42577', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425774', 'Pendapatan atas Penempatan Uang Negara pada Bank Indonesia', '4', '42', '425', '4257', '42577', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425775', 'Pendapatan dari Penempatan Uang Sebelum Rekonsiliasi', '4', '42', '425', '4257', '42577', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425781', 'Pendapatan Biaya Penagihan Pajak Negara dengan Surat Paksa', '4', '42', '425', '4257', '42578', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425782', 'Pendapatan Bea Lelang Pejabat Lelang Kelas I', '4', '42', '425', '4257', '42578', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425783', 'Pendapatan Bea Lelang Pejabat Lelang Kelas II', '4', '42', '425', '4257', '42578', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425784', 'Pendapatan Bea Lelang Pegadaian', '4', '42', '425', '4257', '42578', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425785', 'Pendapatan Biaya Administrasi Pengurusan Piutang Negara', '4', '42', '425', '4257', '42578', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425791', 'Pendapatan Penyelesaian Tuntutan Ganti Rugi Non Bendahara', '4', '42', '425', '4257', '42579', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425792', 'Pendapatan Penyelesaian Tuntutan Perbendaharaan', '4', '42', '425', '4257', '42579', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425811', 'Pendapatan Denda Penyelesaian Pekerjaan Pemerintah', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425812', 'Pendapatan Denda Pelanggaran di Bidang Persaingan Usaha', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425813', 'Pendapatan Denda Pelanggaran di Bidang Perdagangan', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425814', 'Pendapatan Denda Pelaksanaan Rekening Pengeluaran Bersaldo Nihil dalam Rangka TSA', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425815', 'Pendapatan Denda atas Pelaksanaan Penempatan uang Negara di Bank Umum dan Bank Indonesia', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425816', 'Pendapatan Denda atas Pelaksanaan Treasury National Pooling', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425817', 'Pendapatan Denda atas Kekurangan/Keterlambatan Pelimpahan Penerimaan Negara oleh Bank/Pos Persepsi', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425818', 'Pendapatan Denda, Bunga, dan Penalti terkait Kegiatan Usaha Hulu Migas', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425819', 'Pendapatan Denda terkait Pengusahaan Panas Bumi', '4', '42', '425', '4258', '42581', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425821', 'Pendapatan Denda atas Kekurangan/Keterlambatan Pelimpahan Saldo BO II ke BO', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425822', 'Pendapatan Denda atas Kekurangan/Keterlambatan Pembagian PBB oleh BO III PBB', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425823', 'Pendapatan Denda atas Keterlambatan Pengembalian Penerusan Pinjaman', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425824', 'Pendapatan Denda Penyaluran Kredit Program', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425825', 'Pendapatan Denda Administrasi Akuntan Publik dan Kantor Akuntan Publik', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425826', 'Pendapatan Denda atas Keterlambatan Penyampaian Laporan oleh debitur Kredit Pemerintah (KUMK)', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425827', 'Pendapatan Denda atas Keterlambatan Penyampaian Laporan oleh debitur', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425828', 'Pendapatan Denda atas Keterlambatan Kompensasi Sewa Beli Rumah Negara Golongan III', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425829', 'Pendapatan Denda/Kompensasi di Bidang Lingkungan Hidup dan Kehutanan', '4', '42', '425', '4258', '42582', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425839', 'Pendapatan Denda Lainnya', '4', '42', '425', '4258', '42583', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425911', 'Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425912', 'Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425913', 'Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425914', 'Penerimaan Kembali Belanja Pembayaran Kewajiban Utang Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425915', 'Penerimaan Kembali Belanja Subsidi Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425916', 'Penerimaan Kembali Belanja Hibah Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425917', 'Penerimaan Kembali Belanja Bantuan Sosial Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425918', 'Penerimaan Kembali Belanja Lain-lain Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425919', 'Penerimaan Kembali Transfer ke Daerah dan Dana Desa Tahun Anggaran Yang Lalu', '4', '42', '425', '4259', '42591', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425921', 'Penerimaan Kembali Belanja Kontribusi Sosial TAYL', '4', '42', '425', '4259', '42592', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425991', 'Penerimaan Kembali Persekot/Uang Muka Gaji', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425992', 'Penerimaan Premi Penjaminan Perbankan Nasional', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425993', 'Pendapatan Jasa Perbendaharaan', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425994', 'Pendapatan Kelebihan Pelimpahan Pajak/PNBP dari Bank/Pos Persepsi', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425995', 'Pendapatan Penyetoran Kelebihan Hasil Bersih Lelang yang Tidak Diambil oleh yang Berhak', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425996', 'Pendapatan dalam rangka Refund Dana PHLN', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425997', 'Pendapatan dari Hibah yang Belum Disahkan', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425998', 'Pendapatan dari Retur SP2D', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');
INSERT INTO `r_mak` VALUES ('425999', 'Pendapatan Anggaran Lain-lain', '4', '42', '425', '4259', '42599', '', 0, '2018', '2018-01-01');

SET FOREIGN_KEY_CHECKS = 1;
