/*
Navicat MySQL Data Transfer

Source Server         : koneksi01
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_mizukiya

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 12:17:19
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Sushi');
INSERT INTO `kategori` VALUES ('2', 'Ramen');
INSERT INTO `kategori` VALUES ('3', 'Udon');
INSERT INTO `kategori` VALUES ('4', 'Yakiniku');
INSERT INTO `kategori` VALUES ('5', 'Donburi');
INSERT INTO `kategori` VALUES ('6', 'Drink');

-- ----------------------------
-- Table structure for `kontak`
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id_kontak` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES ('1', 'Herbert', 'Herbert@gmail.com', 'Kepuasan Pelanggan', 'restoran ini sangat mewah, pelayanan bagus bintang 5');
INSERT INTO `kontak` VALUES ('2', 'Rani', 'RaniMegasari@gmail.c', 'Survei Pelanggan', 'Makanan sangat mewah namun perlu ada variasi baru');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(6) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `thumbnail_menu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `kategori` (`id_kategori`),
  CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Tamago Sushi', 'Sushi isi telur', '15000', '1', '');
INSERT INTO `menu` VALUES ('2', 'Chicken Miso Ramen', 'Ramen dengan topping ayam kuah miso', '39000', '2', '');
INSERT INTO `menu` VALUES ('3', 'Beef Curry Udon', 'Udon dengan topping beef kuah kare jepang', '58000', '3', '');
INSERT INTO `menu` VALUES ('4', '1 Set Grill Wagyu ', '200 gram paket set daging wagyu a5', '499000', '4', '');
INSERT INTO `menu` VALUES ('5', 'Blackpaper Tori Don', 'Donburi isi daging ayam saus blakcpaper', '30000', '5', '');
INSERT INTO `menu` VALUES ('6', 'Vanilla Milkshake', 'Milkshake isi vanilla', '9000', '6', '');
INSERT INTO `menu` VALUES ('7', 'California Roll Sushi', 'Sushi Roll Musim Panas', '20000', '1', '');
INSERT INTO `menu` VALUES ('8', 'Makizushi', 'Sushi dibalut dengan potongan ikan salmon', '15000', '1', '');
INSERT INTO `menu` VALUES ('9', 'Vegan Sushi', 'Sushi dengan gaya elegan dan mewah', '23000', '1', '');
INSERT INTO `menu` VALUES ('10', 'Fried Sushi', 'Sushi goreng dengan toping yang enak', '27000', '1', '');
INSERT INTO `menu` VALUES ('11', 'Sesame Sushi Rolls', 'Sushi dengan toping sesame', '25000', '1', '');
INSERT INTO `menu` VALUES ('12', 'Udon Soup', 'Sup Udon Hangat', '45000', '3', '');
INSERT INTO `menu` VALUES ('13', 'Chicken Udon', 'Udon dengan toping daging ayam', '49000', '3', '');
INSERT INTO `menu` VALUES ('14', 'Yaki udon', 'Udon dengan toping daging sapi panggang', '54000', '3', '');
INSERT INTO `menu` VALUES ('15', 'Mushroom Ramen', 'Ramen dengan toping jamur shitake', '40000', '2', '');
INSERT INTO `menu` VALUES ('16', 'Kake Udon', 'Udon hangat disajikan dengan sup kake dashi', '57000', '3', '');
INSERT INTO `menu` VALUES ('17', 'Yakiniku Don', 'Donburi dengan topping daging sapi panggang', '25000', '5', '');
INSERT INTO `menu` VALUES ('18', 'Red Wine Teriyaki Steak Don', 'Donburi dengan topping daging teriyaki', '30000', '5', '');
INSERT INTO `menu` VALUES ('19', 'Salmon Teriyaki Don', 'Donburi dengan topping ikan salmon teriyaki', '27000', '5', '');
INSERT INTO `menu` VALUES ('20', 'Unagi Don', 'Doburi dengan topping daging belut', '39000', '5', '');
INSERT INTO `menu` VALUES ('21', 'Iced Tea', 'es teh segar dan nikmat', '8000', '6', '');
INSERT INTO `menu` VALUES ('22', 'Cherry Limeade', 'cherry lime menyejukkan', '16000', '6', '');
INSERT INTO `menu` VALUES ('23', 'Raspberry Watermelon Lemonade', 'Raspberry watermelon lemonade cocok saat musim panas', '16000', '6', '');
INSERT INTO `menu` VALUES ('24', 'Non-Alcoholic Singaria', 'sangria non alkohol nikmat dan elegan', '20000', '6', '');
INSERT INTO `menu` VALUES ('25', 'Basil Lemonade', 'lemonade dengan tambahan kemangi yang menyegarkan', '16000', '6', '');
INSERT INTO `menu` VALUES ('26', '1 Set Yakiniku Grill', '200 gram daging yakiniku siap untuk di grill', '200000', '4', '');
INSERT INTO `menu` VALUES ('27', '1 Set Yakitori Grill', '200 gram daging ayam yaki siap untuk di grill', '200000', '4', '');
INSERT INTO `menu` VALUES ('28', 'Rib Ramen Soup', 'Ramen dengan topping daging Rib', '30000', '2', '');
INSERT INTO `menu` VALUES ('29', 'Shoyu Ramen', 'Ramen hangat dengan kecap shoyu', '35000', '2', '');
INSERT INTO `menu` VALUES ('30', 'Veggie Ramen', 'Ramen dengan gaya ala barat', '40000', '2', '');

-- ----------------------------
-- Table structure for `promo`
-- ----------------------------
DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `id_promo` int(10) NOT NULL,
  `thumbnail_promo` varchar(50) NOT NULL,
  `nama_promo` varchar(50) NOT NULL,
  `mulai_promo` date NOT NULL,
  `akhir_promo` date NOT NULL,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of promo
-- ----------------------------
INSERT INTO `promo` VALUES ('1', '', 'Mizukiya Grand Opening', '2023-06-19', '2023-06-22');
INSERT INTO `promo` VALUES ('2', '', 'Mizukiya Natsu Matsuri', '2023-06-28', '2023-06-30');

-- ----------------------------
-- Table structure for `reservasi`
-- ----------------------------
DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `id_reservasi` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `jumlah_orang` int(10) NOT NULL,
  PRIMARY KEY (`id_reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of reservasi
-- ----------------------------
INSERT INTO `reservasi` VALUES ('1', 'Adri', 'adrisapta@gmail.com', '087812228432', '2023-06-19', '16:00', '1');
INSERT INTO `reservasi` VALUES ('2', 'Tio', 'Osaraku@gmail.com', '0821114345', '2023-06-19', '20:00', '2');
