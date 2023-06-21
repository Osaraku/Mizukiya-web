/*
Navicat MySQL Data Transfer

Source Server         : koneksi01
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_mizukiya

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 20:21:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_nama_kategori_unique` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Sushi', '2023-06-21 11:07:21', '2023-06-21 11:07:21');
INSERT INTO `categories` VALUES ('2', 'Ramen', '2023-06-21 11:07:21', '2023-06-21 11:07:21');
INSERT INTO `categories` VALUES ('3', 'Udon', '2023-06-21 11:07:21', '2023-06-21 11:07:21');
INSERT INTO `categories` VALUES ('4', 'Donburi', '2023-06-21 11:07:21', '2023-06-21 11:07:21');
INSERT INTO `categories` VALUES ('5', 'Yakiniku', '2023-06-21 11:07:21', '2023-06-21 11:07:21');
INSERT INTO `categories` VALUES ('6', 'Minuman', '2023-06-21 11:07:21', '2023-06-21 11:07:21');

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `kontaks`
-- ----------------------------
DROP TABLE IF EXISTS `kontaks`;
CREATE TABLE `kontaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kontaks_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kontaks
-- ----------------------------

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_kategori` bigint(20) unsigned NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', 'Tamago Sushi', 'Sushi isi telur', '1', '15000', 'menu-images/5WVc1Gm44EHXEUMduNPkCCXpmrBmIaMNVEAsuqyP.jpg', '2023-06-21 11:07:21', '2023-06-21 11:25:32');
INSERT INTO `menus` VALUES ('2', 'Chicken Miso Ramen', 'Ramen dengan topping ayam kuah miso', '2', '39000', 'menu-images/rUnUehMk1Jgis0AJSlnlDrdJ450sJEmpersyo5aZ.jpg', '2023-06-21 11:19:09', '2023-06-21 11:25:06');
INSERT INTO `menus` VALUES ('3', 'Beef Curry Udon', 'Udon dengan topping beef kuah kare jepang', '3', '58000', 'menu-images/nMnFHdTQqJ5kLBaOegvtoX9exXig6zuSLaE2m29k.jpg', '2023-06-21 11:24:36', '2023-06-21 11:24:36');
INSERT INTO `menus` VALUES ('4', '1 Set Grill Wagyu', '200 gram paket set daging wagyu a5', '5', '500000', 'menu-images/Cji3NBpmskWpEmCydW64kTASgWnDtl5EmkVg9RGk.jpg', '2023-06-21 11:27:00', '2023-06-21 11:27:00');
INSERT INTO `menus` VALUES ('5', 'Blackpaper Tori Don', 'Donburi isi daging ayam saus blakcpaper', '4', '30000', 'menu-images/pCESSGd7MnaGy4u1VqlI8t5iJrsCVTvxERCdmfYX.jpg', '2023-06-21 11:27:51', '2023-06-21 11:27:51');
INSERT INTO `menus` VALUES ('6', 'Vanilla Milkshake', 'Milkshake segar dengan rasa vanilla', '6', '9000', 'menu-images/7YqFAvOsOAlUk7n6cLHgdHg47ReYkQcqUpP6Nw2m.jpg', '2023-06-21 11:28:46', '2023-06-21 11:28:46');
INSERT INTO `menus` VALUES ('7', 'California Roll Sushi', 'Sushi Roll Edisi Musim Panas', '1', '20000', 'menu-images/WKynWM3V4xuPHsY6uM5eIDWG45v315t5qkw5A9cV.jpg', '2023-06-21 11:29:39', '2023-06-21 11:29:39');
INSERT INTO `menus` VALUES ('8', 'Makizushi', 'Sushi dibalut dengan potongan ikan salmon', '1', '15000', 'menu-images/o7KxyDHNo1GEDRLwagqJOSl1Pv6ButUUi3kzQjaf.jpg', '2023-06-21 11:30:35', '2023-06-21 11:30:35');
INSERT INTO `menus` VALUES ('9', 'Vegan Sushi', 'Sushi dengan gaya elegan dan mewah', '1', '23000', 'menu-images/qesVX8EoHCJhMnVX6XDARaPpCu2Dnh1QAqlOJu35.jpg', '2023-06-21 11:31:35', '2023-06-21 11:31:35');
INSERT INTO `menus` VALUES ('10', 'Fried Sushi', 'Sushi goreng dengan toping daging sapi dan ikan salmon', '1', '27000', 'menu-images/DbK9o0OBbY4OWwZLCB0X8dKCRbHmXRdipaPgbvf2.jpg', '2023-06-21 11:32:29', '2023-06-21 11:32:29');
INSERT INTO `menus` VALUES ('11', 'Sesame Sushi Rolls', 'Sushi yang menyegarkan dengan toping sesame', '1', '25000', 'menu-images/iBNWeH9BUY8Opnc0Lyij8240o7K6zGPg8H3fsEDV.jpg', '2023-06-21 11:33:26', '2023-06-21 11:33:26');
INSERT INTO `menus` VALUES ('12', 'Udon Soup', 'Sup Udon Hangat', '3', '45000', 'menu-images/NurTNN34yf026kfDvzqc6QQc3KLFdkNlC9dseUnt.jpg', '2023-06-21 11:34:08', '2023-06-21 11:35:19');
INSERT INTO `menus` VALUES ('13', 'Chicken Udon', 'Udon dengan toping daging ayam', '3', '49000', 'menu-images/j1Jl3YzBig0rZOSN0qoyYdcdPbnCP3i94ob78Il8.jpg', '2023-06-21 11:34:57', '2023-06-21 11:34:57');
INSERT INTO `menus` VALUES ('14', 'Yaki udon', 'Udon dengan toping daging sapi panggang', '3', '54000', 'menu-images/PmUH7pRigB8UtQMhvYe7uCmUwyzibtGa6bvQYsVP.jpg', '2023-06-21 11:36:19', '2023-06-21 11:36:19');
INSERT INTO `menus` VALUES ('15', 'Mushroom Ramen', 'Ramen dengan toping jamur shitake', '2', '40000', 'menu-images/94omGsgwGb6KdkBgyNJpHxQpUCKVh8i08UHcJsAC.jpg', '2023-06-21 11:36:56', '2023-06-21 11:36:56');
INSERT INTO `menus` VALUES ('16', 'Kake Udon', 'Udon hangat disajikan dengan sup kake dashi', '3', '57000', 'menu-images/37tkhmfPnzRmoZn3p6qofp2v6PmpqkMMxKNK7wXx.jpg', '2023-06-21 11:39:01', '2023-06-21 11:39:01');
INSERT INTO `menus` VALUES ('17', 'Yakiniku Don', 'Donburi dengan topping daging sapi panggang', '4', '25000', 'menu-images/rWJuEA5BEAVqSJyIA2VqEJzoaH30wS1nTKTPJQ9w.jpg', '2023-06-21 11:39:49', '2023-06-21 11:39:49');
INSERT INTO `menus` VALUES ('18', 'Red Wine Teriyaki Steak Don', 'Donburi dengan topping daging teriyaki', '4', '30000', 'menu-images/Hs9z1T3bhGs0f98ZvHcgoj07nE4bxsJqP7zWYZvn.jpg', '2023-06-21 11:40:36', '2023-06-21 11:40:36');
INSERT INTO `menus` VALUES ('19', 'Salmon Teriyaki Don', 'Donburi dengan topping ikan salmon teriyaki', '4', '27000', 'menu-images/7mksZYtHctrJ1au8HORqJmyoXwniMVmDmnIQzRPp.jpg', '2023-06-21 11:41:26', '2023-06-21 11:41:26');
INSERT INTO `menus` VALUES ('20', 'Unagi Don', 'Donburi dengan topping daging belut', '4', '39000', 'menu-images/KYWXzDCc831PtZw2sjbPa7HIfMj9nFEXEHv5gzCF.jpg', '2023-06-21 11:42:16', '2023-06-21 11:42:16');
INSERT INTO `menus` VALUES ('21', 'Iced Tea', 'es teh segar dan nikmat', '6', '8000', 'menu-images/zqgyzaJwN2uxY3ZiSN5Z1Fr3bJ95QuHSxuH8keW6.jpg', '2023-06-21 11:43:15', '2023-06-21 11:43:15');
INSERT INTO `menus` VALUES ('22', 'Cherry Limeade', 'cherry lime menyejukkan', '6', '16000', 'menu-images/Bm7GDTrC6yMQfZusdBxiGUSmrqV3pOq47KeFxna9.jpg', '2023-06-21 11:43:46', '2023-06-21 11:43:46');
INSERT INTO `menus` VALUES ('23', 'Raspberry Watermelon Lemonade', 'Raspberry watermelon lemonade cocok saat musim panas', '6', '16000', 'menu-images/mOZPkNTuGVQHcUjT5LPxHSEezfkEIq4Ap5cATvi5.jpg', '2023-06-21 11:44:38', '2023-06-21 11:44:38');
INSERT INTO `menus` VALUES ('24', 'Non-Alcoholic Singaria', 'sangria non alkohol nikmat dan elegan', '6', '20000', 'menu-images/DwkVM9EFejO6s0bsotU3d5hpQ7mUdMzthwcYyHza.jpg', '2023-06-21 11:45:20', '2023-06-21 11:45:20');
INSERT INTO `menus` VALUES ('25', 'Basil Lemonade', 'lemonade dengan tambahan kemangi yang menyegarkan', '6', '16000', 'menu-images/yDzPUYG1emGRJVf8x1YtyIxKbiElRT6eYdZrw26V.jpg', '2023-06-21 11:47:02', '2023-06-21 11:47:02');
INSERT INTO `menus` VALUES ('26', '1 Set Yakiniku Grill', '200 gram daging yakiniku siap untuk di grill', '5', '200000', 'menu-images/9yK3pL7taij6DFPueNVEKQteGZqCLJQ8nyQVapoj.jpg', '2023-06-21 11:47:49', '2023-06-21 11:47:49');
INSERT INTO `menus` VALUES ('27', '1 Set Yakitori Grill', '200 gram daging ayam yaki siap untuk di grill', '5', '200000', 'menu-images/wMnqazNSm8Kq8oGtcH66rTr9KyayJqdzRdIuRzeX.jpg', '2023-06-21 11:48:27', '2023-06-21 11:48:27');
INSERT INTO `menus` VALUES ('28', 'Rib Ramen Soup', 'Ramen dengan topping daging Rib', '2', '30000', 'menu-images/w1owosWPydy5A97QdHpJ6l4UQcmk6oioMqDSh4kc.jpg', '2023-06-21 11:49:15', '2023-06-21 11:49:15');
INSERT INTO `menus` VALUES ('29', 'Shoyu Ramen', 'Ramen hangat dengan kecap shoyu', '2', '35000', 'menu-images/FT85S8lbxxwwuyZLVnqNgQv7t3PUe9M72rSDol4l.jpg', '2023-06-21 11:49:54', '2023-06-21 11:49:54');
INSERT INTO `menus` VALUES ('30', 'Veggie Ramen', 'Ramen dengan nuansa gaya ala budaya barat', '2', '40000', 'menu-images/jujQaMp1SZYh7VUPXZzoXHyQrDad8eDT7uGY8y6O.jpg', '2023-06-21 11:51:10', '2023-06-21 11:51:10');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2023_06_19_061100_create_promos_table', '1');
INSERT INTO `migrations` VALUES ('6', '2023_06_19_091821_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('7', '2023_06_19_102608_create_menus_table', '1');
INSERT INTO `migrations` VALUES ('8', '2023_06_20_092206_create_reservasis_table', '1');
INSERT INTO `migrations` VALUES ('9', '2023_06_20_142953_create_kontaks_table', '1');
INSERT INTO `migrations` VALUES ('10', '2023_06_20_160223_create_staff_table', '1');
INSERT INTO `migrations` VALUES ('11', '2023_06_20_160254_create_posisis_table', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `posisis`
-- ----------------------------
DROP TABLE IF EXISTS `posisis`;
CREATE TABLE `posisis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posisis
-- ----------------------------

-- ----------------------------
-- Table structure for `promos`
-- ----------------------------
DROP TABLE IF EXISTS `promos`;
CREATE TABLE `promos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `awal_promo` date NOT NULL,
  `akhir_promo` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of promos
-- ----------------------------
INSERT INTO `promos` VALUES ('1', 'Promo Merdeka', 'BUY 1 GET 1 FREE - Pembelian Kawaii Package Dapatkan Chicken Katsu Curry Rice.', '2023-08-17', '2023-08-18', 'promo-images/nFLVFD7FTQUL3DQiyoFCtCd8GfQSpfCCGpNYml6r.jpg', '2023-06-21 11:07:21', '2023-06-21 13:19:01');
INSERT INTO `promos` VALUES ('2', 'Happy Hour', 'Special Himawari Package, pembelian 1 paket seharga 139.000 Rupiah', '2023-06-18', '2023-06-23', 'promo-images/gjYfbuRqnSXnzHAqxamuFqpLYuGopglG64seP9pK.jpg', '2023-06-21 13:04:41', '2023-06-21 13:05:30');
INSERT INTO `promos` VALUES ('3', 'All You Can Eat & Drink', 'Free 6pcs Oyster untuk setiap pembelian 1 Sakura Package', '2023-06-25', '2023-06-28', 'promo-images/snLvITf7phq5QP1lO9stikRAqvinezmDvQOewk0x.jpg', '2023-06-21 13:10:42', '2023-06-21 13:10:42');
INSERT INTO `promos` VALUES ('4', 'Nikmatnya Duk Duk', 'Diskon Untuk Pembelian Duk Duk 1 dan Duk Duk 2', '2024-03-10', '2024-04-07', 'promo-images/jSuPQ7loZTupfd1wwWEV1r5ZXzeVypGFgi48380D.jpg', '2023-06-21 13:12:19', '2023-06-21 13:20:13');
INSERT INTO `promos` VALUES ('5', 'Promo Cashback', 'Belanja di Mizuyaki Restoran dapat 50% Cashback (S&K berlaku)', '2023-07-18', '2023-07-23', 'promo-images/FVaJmU5QRyTEaBpDQAwCLtFoODvuTbR6DjQEvMVI.jpg', '2023-06-21 13:14:15', '2023-06-21 13:14:15');
INSERT INTO `promos` VALUES ('6', 'Pay 2 Get 3  All You Can Eat', 'Gratis 1 Himawari Package setiap pembelian 2 Himawari Package', '2023-07-25', '2023-07-31', 'promo-images/yRbZVCYKaRN23mupjCgFS0OZewbK3GYGNziLqs1f.jpg', '2023-06-21 13:16:13', '2023-06-21 13:16:13');
INSERT INTO `promos` VALUES ('7', 'Kawaii Hotpot & Grill', 'Paket untuk 4 orang hanya RP.293.000,00', '2023-08-03', '2023-08-07', 'promo-images/2vF9ggQ9kVyXM9rIBf0p7QQOKoJbEH1DAPf2MGBo.jpg', '2023-06-21 13:17:41', '2023-06-21 13:17:41');

-- ----------------------------
-- Table structure for `reservasis`
-- ----------------------------
DROP TABLE IF EXISTS `reservasis`;
CREATE TABLE `reservasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reservasis_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reservasis
-- ----------------------------

-- ----------------------------
-- Table structure for `staff`
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of staff
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@gmail.com', null, '$2y$10$QQuCRpLF90Jc0AewPsN8Z.A1x1/EjAojQ8gxiIiscV7EonNUYhL2K', '1', null, '2023-06-21 11:07:21', '2023-06-21 11:07:21');
