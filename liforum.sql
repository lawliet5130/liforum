/*
 Navicat MySQL Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : liforum

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 12/10/2018 18:02:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for branches
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of branches
-- ----------------------------
INSERT INTO `branches` VALUES (1, 'Biology', '2018-10-03 14:51:45', '2018-10-03 14:51:45');
INSERT INTO `branches` VALUES (2, 'Biotech', '2018-10-03 14:51:59', '2018-10-03 14:51:59');
INSERT INTO `branches` VALUES (3, 'Genetics', '2018-10-03 14:52:14', '2018-10-03 14:52:14');
INSERT INTO `branches` VALUES (4, 'Immunology', '2018-10-03 14:52:34', '2018-10-03 14:52:34');
INSERT INTO `branches` VALUES (5, 'Surgery', '2018-10-03 14:52:47', '2018-10-03 14:52:47');
INSERT INTO `branches` VALUES (6, 'Gene therapy', '2018-10-03 14:53:13', '2018-10-03 14:53:13');
INSERT INTO `branches` VALUES (7, 'Microbiology', '2018-10-03 14:53:27', '2018-10-03 14:53:27');
INSERT INTO `branches` VALUES (8, 'Bioinformatics', '2018-10-03 14:53:43', '2018-10-03 14:53:43');
INSERT INTO `branches` VALUES (9, 'Cell biology', '2018-10-03 14:54:08', '2018-10-03 14:54:08');
INSERT INTO `branches` VALUES (10, 'Molecular biology', '2018-10-03 14:54:25', '2018-10-03 14:54:25');
INSERT INTO `branches` VALUES (11, 'Neuroscience', '2018-10-03 14:54:37', '2018-10-03 14:54:37');
INSERT INTO `branches` VALUES (12, 'Pharmacology', '2018-10-03 14:54:50', '2018-10-03 14:54:50');
INSERT INTO `branches` VALUES (13, 'Environmental', '2018-10-03 14:55:57', '2018-10-03 14:55:57');
INSERT INTO `branches` VALUES (15, 'Health', '2018-10-03 14:56:24', '2018-10-03 14:56:24');
INSERT INTO `branches` VALUES (16, 'Gerontology', '2018-10-03 14:56:37', '2018-10-03 14:56:37');
INSERT INTO `branches` VALUES (17, 'Biodemography', '2018-10-03 14:56:50', '2018-10-03 14:56:50');

-- ----------------------------
-- Table structure for data_rows
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `data_rows_data_type_id_foreign`(`data_type_id`) USING BTREE,
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 93 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES (1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2);
INSERT INTO `data_rows` VALUES (3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '', 3);
INSERT INTO `data_rows` VALUES (4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '', 4);
INSERT INTO `data_rows` VALUES (5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '', 5);
INSERT INTO `data_rows` VALUES (6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '', 6);
INSERT INTO `data_rows` VALUES (7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 7);
INSERT INTO `data_rows` VALUES (8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '', 8);
INSERT INTO `data_rows` VALUES (9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10);
INSERT INTO `data_rows` VALUES (10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11);
INSERT INTO `data_rows` VALUES (11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, '', 12);
INSERT INTO `data_rows` VALUES (12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '', 12);
INSERT INTO `data_rows` VALUES (13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2);
INSERT INTO `data_rows` VALUES (15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3);
INSERT INTO `data_rows` VALUES (16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4);
INSERT INTO `data_rows` VALUES (17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2);
INSERT INTO `data_rows` VALUES (19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3);
INSERT INTO `data_rows` VALUES (20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4);
INSERT INTO `data_rows` VALUES (21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5);
INSERT INTO `data_rows` VALUES (22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, '', 9);
INSERT INTO `data_rows` VALUES (23, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (24, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (25, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (26, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (27, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 2);
INSERT INTO `data_rows` VALUES (28, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (29, 6, 'surname', 'text', 'Surname', 1, 1, 1, 1, 1, 1, NULL, 5);
INSERT INTO `data_rows` VALUES (30, 6, 'branch_id', 'text', 'Branch', 1, 1, 1, 1, 1, 1, NULL, 6);
INSERT INTO `data_rows` VALUES (31, 6, 'login', 'text', 'Login', 1, 0, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (32, 6, 'password', 'text', 'Password', 1, 0, 0, 0, 0, 0, NULL, 9);
INSERT INTO `data_rows` VALUES (33, 6, 'remember_token', 'password', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 10);
INSERT INTO `data_rows` VALUES (34, 6, 'about', 'text_area', 'About', 0, 0, 1, 1, 1, 1, NULL, 11);
INSERT INTO `data_rows` VALUES (35, 6, 'country_code', 'text', 'Country', 1, 1, 1, 1, 1, 1, NULL, 12);
INSERT INTO `data_rows` VALUES (36, 6, 'gender', 'select_dropdown', 'Gender', 1, 1, 1, 1, 1, 1, '{\"default\":\"0\",\"options\":{\"0\":\"Not set\",\"1\":\"Male\",\"2\":\"Female\"}}', 14);
INSERT INTO `data_rows` VALUES (37, 6, 'image', 'image', 'Profile Image', 0, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (38, 6, 'website', 'text', 'Website', 0, 0, 1, 1, 1, 1, NULL, 15);
INSERT INTO `data_rows` VALUES (39, 6, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, NULL, 16);
INSERT INTO `data_rows` VALUES (40, 6, 'linkedin', 'text', 'Linked-in', 0, 0, 1, 1, 1, 1, NULL, 17);
INSERT INTO `data_rows` VALUES (41, 6, 'phone', 'text', 'Cell Phone', 0, 0, 1, 1, 1, 1, NULL, 18);
INSERT INTO `data_rows` VALUES (42, 6, 'knownas', 'text', 'Known as', 0, 0, 1, 1, 1, 1, NULL, 19);
INSERT INTO `data_rows` VALUES (43, 6, 'acc_status', 'select_dropdown', 'Acc Status', 1, 0, 0, 0, 0, 0, '{\"default\":\"0\",\"options\":{\"0\":\"Created\",\"1\":\"Active\"}}', 1);
INSERT INTO `data_rows` VALUES (44, 6, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, NULL, 20);
INSERT INTO `data_rows` VALUES (45, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 22);
INSERT INTO `data_rows` VALUES (46, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 23);
INSERT INTO `data_rows` VALUES (48, 6, 'scientist_account_hasone_branch_relationship_1', 'relationship', 'Branch', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Branch\",\"table\":\"branches\",\"type\":\"belongsTo\",\"column\":\"branch_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"branches\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7);
INSERT INTO `data_rows` VALUES (59, 6, 'login_link', 'text', 'Login Link', 0, 1, 0, 0, 0, 0, NULL, 21);
INSERT INTO `data_rows` VALUES (70, 11, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, NULL, 1);
INSERT INTO `data_rows` VALUES (71, 11, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (72, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (73, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (77, 14, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (78, 14, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (79, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (80, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (81, 14, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (82, 6, 'scientist_account_belongsto_ncountry_relationship', 'relationship', 'Country', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Country\",\"table\":\"ncountries\",\"type\":\"belongsTo\",\"column\":\"country_code\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"branches\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13);
INSERT INTO `data_rows` VALUES (83, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (84, 15, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (85, 15, 'branch_id', 'number', 'Branch', 1, 1, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (86, 15, 'text', 'text_area', 'Text', 1, 0, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (87, 15, 'link', 'text', 'Link', 1, 0, 1, 1, 1, 1, NULL, 6);
INSERT INTO `data_rows` VALUES (88, 15, 'scientist_id', 'screlation', 'Scientist', 1, 1, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (89, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 9);
INSERT INTO `data_rows` VALUES (90, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 10);
INSERT INTO `data_rows` VALUES (91, 15, 'work_belongsto_scientist_account_relationship', 'relationship', 'Scientist', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\ScientistAccount\",\"table\":\"scientist_accounts\",\"type\":\"belongsTo\",\"column\":\"scientist_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"branches\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7);
INSERT INTO `data_rows` VALUES (92, 15, 'work_belongsto_branch_relationship', 'relationship', 'Branch', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Branch\",\"table\":\"branches\",\"type\":\"belongsTo\",\"column\":\"branch_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"branches\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5);

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `model_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `policy_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `controller` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `data_types_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `data_types_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2018-10-03 08:03:08', '2018-10-03 08:03:08');
INSERT INTO `data_types` VALUES (2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-10-03 08:03:08', '2018-10-03 08:03:08');
INSERT INTO `data_types` VALUES (3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-10-03 08:03:08', '2018-10-03 08:03:08');
INSERT INTO `data_types` VALUES (4, 'branches', 'branches', 'Branches', 'Branches', 'voyager-handle', 'App\\Branch', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-03 14:50:58', '2018-10-03 14:57:15');
INSERT INTO `data_types` VALUES (6, 'scientist_accounts', 'scientist-accounts', 'Scientist Accounts', 'Scientist Accounts', 'voyager-people', 'App\\ScientistAccount', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-04 08:43:06', '2018-10-09 08:05:00');
INSERT INTO `data_types` VALUES (11, 'countries', 'countries', 'Countries', 'Countries', 'voyager-world', 'App\\Country', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-04 14:27:37', '2018-10-04 14:28:18');
INSERT INTO `data_types` VALUES (14, 'ncountries', 'ncountries', 'Countries', 'Countries', 'voyager-world', 'App\\Country', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-05 06:41:57', '2018-10-05 07:15:32');
INSERT INTO `data_types` VALUES (15, 'works', 'works', 'Work', 'Works', 'voyager-book', 'App\\Work', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-11 11:12:12', '2018-10-11 11:59:55');

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `route` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_items_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES (1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-10-03 08:03:09', '2018-10-03 08:03:09', 'voyager.dashboard', NULL);
INSERT INTO `menu_items` VALUES (2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2018-10-03 08:03:09', '2018-10-03 08:03:09', 'voyager.media.index', NULL);
INSERT INTO `menu_items` VALUES (3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-10-03 08:03:09', '2018-10-03 08:03:09', 'voyager.users.index', NULL);
INSERT INTO `menu_items` VALUES (4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-10-03 08:03:09', '2018-10-03 08:03:09', 'voyager.roles.index', NULL);
INSERT INTO `menu_items` VALUES (5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2018-10-03 08:03:09', '2018-10-03 08:03:09', NULL, NULL);
INSERT INTO `menu_items` VALUES (6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2018-10-03 08:03:10', '2018-10-03 08:03:10', 'voyager.menus.index', NULL);
INSERT INTO `menu_items` VALUES (7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2018-10-03 08:03:10', '2018-10-03 08:03:10', 'voyager.database.index', NULL);
INSERT INTO `menu_items` VALUES (8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2018-10-03 08:03:10', '2018-10-03 08:03:10', 'voyager.compass.index', NULL);
INSERT INTO `menu_items` VALUES (9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2018-10-03 08:03:10', '2018-10-03 08:03:10', 'voyager.bread.index', NULL);
INSERT INTO `menu_items` VALUES (10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2018-10-03 08:03:10', '2018-10-03 08:03:10', 'voyager.settings.index', NULL);
INSERT INTO `menu_items` VALUES (11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2018-10-03 08:03:12', '2018-10-03 08:03:12', 'voyager.hooks', NULL);
INSERT INTO `menu_items` VALUES (12, 1, 'Branches', '', '_self', 'voyager-handle', NULL, NULL, 15, '2018-10-03 14:50:58', '2018-10-03 14:50:58', 'voyager.branches.index', NULL);
INSERT INTO `menu_items` VALUES (13, 1, 'Scientist Accounts', '', '_self', 'voyager-people', NULL, NULL, 16, '2018-10-04 08:43:06', '2018-10-04 08:43:06', 'voyager.scientist-accounts.index', NULL);
INSERT INTO `menu_items` VALUES (16, 1, 'Countries', '', '_self', 'voyager-world', NULL, NULL, 19, '2018-10-05 06:41:57', '2018-10-05 06:41:57', 'voyager.ncountries.index', NULL);
INSERT INTO `menu_items` VALUES (17, 1, 'Works', '', '_self', 'voyager-book', NULL, NULL, 20, '2018-10-11 11:12:12', '2018-10-11 11:12:12', 'voyager.works.index', NULL);

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menus_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'admin', '2018-10-03 08:03:09', '2018-10-03 08:03:09');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_01_000000_add_voyager_user_fields', 1);
INSERT INTO `migrations` VALUES (4, '2016_01_01_000000_create_data_types_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_05_19_173453_create_menu_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_10_21_190000_create_roles_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_10_21_190000_create_settings_table', 1);
INSERT INTO `migrations` VALUES (8, '2016_11_30_135954_create_permission_table', 1);
INSERT INTO `migrations` VALUES (9, '2016_11_30_141208_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (10, '2016_12_26_201236_data_types__add__server_side', 1);
INSERT INTO `migrations` VALUES (11, '2017_01_13_000000_add_route_to_menu_items_table', 1);
INSERT INTO `migrations` VALUES (12, '2017_01_14_005015_create_translations_table', 1);
INSERT INTO `migrations` VALUES (13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1);
INSERT INTO `migrations` VALUES (14, '2017_03_06_000000_add_controller_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (15, '2017_04_21_000000_add_order_to_data_rows_table', 1);
INSERT INTO `migrations` VALUES (16, '2017_07_05_210000_add_policyname_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_08_05_000000_add_group_to_settings_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_11_26_013050_add_user_role_relationship', 1);
INSERT INTO `migrations` VALUES (19, '2017_11_26_015000_create_user_roles_table', 1);
INSERT INTO `migrations` VALUES (20, '2018_03_11_000000_add_user_settings', 1);
INSERT INTO `migrations` VALUES (21, '2018_03_14_000000_add_details_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (22, '2018_03_16_000000_make_settings_value_nullable', 1);

-- ----------------------------
-- Table structure for ncountries
-- ----------------------------
DROP TABLE IF EXISTS `ncountries`;
CREATE TABLE `ncountries`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(52) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 240 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ncountries
-- ----------------------------
INSERT INTO `ncountries` VALUES (1, 'ABW', 'Aruba', NULL, NULL);
INSERT INTO `ncountries` VALUES (2, 'AFG', 'Afghanistan', NULL, NULL);
INSERT INTO `ncountries` VALUES (3, 'AGO', 'Angola', NULL, NULL);
INSERT INTO `ncountries` VALUES (4, 'AIA', 'Anguilla', NULL, NULL);
INSERT INTO `ncountries` VALUES (5, 'ALB', 'Albania', NULL, NULL);
INSERT INTO `ncountries` VALUES (6, 'AND', 'Andorra', NULL, NULL);
INSERT INTO `ncountries` VALUES (7, 'ANT', 'Netherlands Antilles', NULL, NULL);
INSERT INTO `ncountries` VALUES (8, 'ARE', 'United Arab Emirates', NULL, NULL);
INSERT INTO `ncountries` VALUES (9, 'ARG', 'Argentina', NULL, NULL);
INSERT INTO `ncountries` VALUES (10, 'ARM', 'Armenia', NULL, NULL);
INSERT INTO `ncountries` VALUES (11, 'ASM', 'American Samoa', NULL, NULL);
INSERT INTO `ncountries` VALUES (12, 'ATA', 'Antarctica', NULL, NULL);
INSERT INTO `ncountries` VALUES (13, 'ATF', 'French Southern territories', NULL, NULL);
INSERT INTO `ncountries` VALUES (14, 'ATG', 'Antigua and Barbuda', NULL, NULL);
INSERT INTO `ncountries` VALUES (15, 'AUS', 'Australia', NULL, NULL);
INSERT INTO `ncountries` VALUES (16, 'AUT', 'Austria', NULL, NULL);
INSERT INTO `ncountries` VALUES (17, 'AZE', 'Azerbaijan', NULL, NULL);
INSERT INTO `ncountries` VALUES (18, 'BDI', 'Burundi', NULL, NULL);
INSERT INTO `ncountries` VALUES (19, 'BEL', 'Belgium', NULL, NULL);
INSERT INTO `ncountries` VALUES (20, 'BEN', 'Benin', NULL, NULL);
INSERT INTO `ncountries` VALUES (21, 'BFA', 'Burkina Faso', NULL, NULL);
INSERT INTO `ncountries` VALUES (22, 'BGD', 'Bangladesh', NULL, NULL);
INSERT INTO `ncountries` VALUES (23, 'BGR', 'Bulgaria', NULL, NULL);
INSERT INTO `ncountries` VALUES (24, 'BHR', 'Bahrain', NULL, NULL);
INSERT INTO `ncountries` VALUES (25, 'BHS', 'Bahamas', NULL, NULL);
INSERT INTO `ncountries` VALUES (26, 'BIH', 'Bosnia and Herzegovina', NULL, NULL);
INSERT INTO `ncountries` VALUES (27, 'BLR', 'Belarus', NULL, NULL);
INSERT INTO `ncountries` VALUES (28, 'BLZ', 'Belize', NULL, NULL);
INSERT INTO `ncountries` VALUES (29, 'BMU', 'Bermuda', NULL, NULL);
INSERT INTO `ncountries` VALUES (30, 'BOL', 'Bolivia', NULL, NULL);
INSERT INTO `ncountries` VALUES (31, 'BRA', 'Brazil', NULL, NULL);
INSERT INTO `ncountries` VALUES (32, 'BRB', 'Barbados', NULL, NULL);
INSERT INTO `ncountries` VALUES (33, 'BRN', 'Brunei', NULL, NULL);
INSERT INTO `ncountries` VALUES (34, 'BTN', 'Bhutan', NULL, NULL);
INSERT INTO `ncountries` VALUES (35, 'BVT', 'Bouvet Island', NULL, NULL);
INSERT INTO `ncountries` VALUES (36, 'BWA', 'Botswana', NULL, NULL);
INSERT INTO `ncountries` VALUES (37, 'CAF', 'Central African Republic', NULL, NULL);
INSERT INTO `ncountries` VALUES (38, 'CAN', 'Canada', NULL, NULL);
INSERT INTO `ncountries` VALUES (39, 'CCK', 'Cocos (Keeling) Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (40, 'CHE', 'Switzerland', NULL, NULL);
INSERT INTO `ncountries` VALUES (41, 'CHL', 'Chile', NULL, NULL);
INSERT INTO `ncountries` VALUES (42, 'CHN', 'China', NULL, NULL);
INSERT INTO `ncountries` VALUES (43, 'CIV', 'Côte d’Ivoire', NULL, NULL);
INSERT INTO `ncountries` VALUES (44, 'CMR', 'Cameroon', NULL, NULL);
INSERT INTO `ncountries` VALUES (45, 'COD', 'Congo, The Democratic Republic of the', NULL, NULL);
INSERT INTO `ncountries` VALUES (46, 'COG', 'Congo', NULL, NULL);
INSERT INTO `ncountries` VALUES (47, 'COK', 'Cook Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (48, 'COL', 'Colombia', NULL, NULL);
INSERT INTO `ncountries` VALUES (49, 'COM', 'Comoros', NULL, NULL);
INSERT INTO `ncountries` VALUES (50, 'CPV', 'Cape Verde', NULL, NULL);
INSERT INTO `ncountries` VALUES (51, 'CRI', 'Costa Rica', NULL, NULL);
INSERT INTO `ncountries` VALUES (52, 'CUB', 'Cuba', NULL, NULL);
INSERT INTO `ncountries` VALUES (53, 'CXR', 'Christmas Island', NULL, NULL);
INSERT INTO `ncountries` VALUES (54, 'CYM', 'Cayman Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (55, 'CYP', 'Cyprus', NULL, NULL);
INSERT INTO `ncountries` VALUES (56, 'CZE', 'Czech Republic', NULL, NULL);
INSERT INTO `ncountries` VALUES (57, 'DEU', 'Germany', NULL, NULL);
INSERT INTO `ncountries` VALUES (58, 'DJI', 'Djibouti', NULL, NULL);
INSERT INTO `ncountries` VALUES (59, 'DMA', 'Dominica', NULL, NULL);
INSERT INTO `ncountries` VALUES (60, 'DNK', 'Denmark', NULL, NULL);
INSERT INTO `ncountries` VALUES (61, 'DOM', 'Dominican Republic', NULL, NULL);
INSERT INTO `ncountries` VALUES (62, 'DZA', 'Algeria', NULL, NULL);
INSERT INTO `ncountries` VALUES (63, 'ECU', 'Ecuador', NULL, NULL);
INSERT INTO `ncountries` VALUES (64, 'EGY', 'Egypt', NULL, NULL);
INSERT INTO `ncountries` VALUES (65, 'ERI', 'Eritrea', NULL, NULL);
INSERT INTO `ncountries` VALUES (66, 'ESH', 'Western Sahara', NULL, NULL);
INSERT INTO `ncountries` VALUES (67, 'ESP', 'Spain', NULL, NULL);
INSERT INTO `ncountries` VALUES (68, 'EST', 'Estonia', NULL, NULL);
INSERT INTO `ncountries` VALUES (69, 'ETH', 'Ethiopia', NULL, NULL);
INSERT INTO `ncountries` VALUES (70, 'FIN', 'Finland', NULL, NULL);
INSERT INTO `ncountries` VALUES (71, 'FJI', 'Fiji Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (72, 'FLK', 'Falkland Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (73, 'FRA', 'France', NULL, NULL);
INSERT INTO `ncountries` VALUES (74, 'FRO', 'Faroe Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (75, 'FSM', 'Micronesia, Federated States of', NULL, NULL);
INSERT INTO `ncountries` VALUES (76, 'GAB', 'Gabon', NULL, NULL);
INSERT INTO `ncountries` VALUES (77, 'GBR', 'United Kingdom', NULL, NULL);
INSERT INTO `ncountries` VALUES (78, 'GEO', 'Georgia', NULL, NULL);
INSERT INTO `ncountries` VALUES (79, 'GHA', 'Ghana', NULL, NULL);
INSERT INTO `ncountries` VALUES (80, 'GIB', 'Gibraltar', NULL, NULL);
INSERT INTO `ncountries` VALUES (81, 'GIN', 'Guinea', NULL, NULL);
INSERT INTO `ncountries` VALUES (82, 'GLP', 'Guadeloupe', NULL, NULL);
INSERT INTO `ncountries` VALUES (83, 'GMB', 'Gambia', NULL, NULL);
INSERT INTO `ncountries` VALUES (84, 'GNB', 'Guinea-Bissau', NULL, NULL);
INSERT INTO `ncountries` VALUES (85, 'GNQ', 'Equatorial Guinea', NULL, NULL);
INSERT INTO `ncountries` VALUES (86, 'GRC', 'Greece', NULL, NULL);
INSERT INTO `ncountries` VALUES (87, 'GRD', 'Grenada', NULL, NULL);
INSERT INTO `ncountries` VALUES (88, 'GRL', 'Greenland', NULL, NULL);
INSERT INTO `ncountries` VALUES (89, 'GTM', 'Guatemala', NULL, NULL);
INSERT INTO `ncountries` VALUES (90, 'GUF', 'French Guiana', NULL, NULL);
INSERT INTO `ncountries` VALUES (91, 'GUM', 'Guam', NULL, NULL);
INSERT INTO `ncountries` VALUES (92, 'GUY', 'Guyana', NULL, NULL);
INSERT INTO `ncountries` VALUES (93, 'HKG', 'Hong Kong', NULL, NULL);
INSERT INTO `ncountries` VALUES (94, 'HMD', 'Heard Island and McDonald Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (95, 'HND', 'Honduras', NULL, NULL);
INSERT INTO `ncountries` VALUES (96, 'HRV', 'Croatia', NULL, NULL);
INSERT INTO `ncountries` VALUES (97, 'HTI', 'Haiti', NULL, NULL);
INSERT INTO `ncountries` VALUES (98, 'HUN', 'Hungary', NULL, NULL);
INSERT INTO `ncountries` VALUES (99, 'IDN', 'Indonesia', NULL, NULL);
INSERT INTO `ncountries` VALUES (100, 'IND', 'India', NULL, NULL);
INSERT INTO `ncountries` VALUES (101, 'IOT', 'British Indian Ocean Territory', NULL, NULL);
INSERT INTO `ncountries` VALUES (102, 'IRL', 'Ireland', NULL, NULL);
INSERT INTO `ncountries` VALUES (103, 'IRN', 'Iran', NULL, NULL);
INSERT INTO `ncountries` VALUES (104, 'IRQ', 'Iraq', NULL, NULL);
INSERT INTO `ncountries` VALUES (105, 'ISL', 'Iceland', NULL, NULL);
INSERT INTO `ncountries` VALUES (106, 'ISR', 'Israel', NULL, NULL);
INSERT INTO `ncountries` VALUES (107, 'ITA', 'Italy', NULL, NULL);
INSERT INTO `ncountries` VALUES (108, 'JAM', 'Jamaica', NULL, NULL);
INSERT INTO `ncountries` VALUES (109, 'JOR', 'Jordan', NULL, NULL);
INSERT INTO `ncountries` VALUES (110, 'JPN', 'Japan', NULL, NULL);
INSERT INTO `ncountries` VALUES (111, 'KAZ', 'Kazakstan', NULL, NULL);
INSERT INTO `ncountries` VALUES (112, 'KEN', 'Kenya', NULL, NULL);
INSERT INTO `ncountries` VALUES (113, 'KGZ', 'Kyrgyzstan', NULL, NULL);
INSERT INTO `ncountries` VALUES (114, 'KHM', 'Cambodia', NULL, NULL);
INSERT INTO `ncountries` VALUES (115, 'KIR', 'Kiribati', NULL, NULL);
INSERT INTO `ncountries` VALUES (116, 'KNA', 'Saint Kitts and Nevis', NULL, NULL);
INSERT INTO `ncountries` VALUES (117, 'KOR', 'South Korea', NULL, NULL);
INSERT INTO `ncountries` VALUES (118, 'KWT', 'Kuwait', NULL, NULL);
INSERT INTO `ncountries` VALUES (119, 'LAO', 'Laos', NULL, NULL);
INSERT INTO `ncountries` VALUES (120, 'LBN', 'Lebanon', NULL, NULL);
INSERT INTO `ncountries` VALUES (121, 'LBR', 'Liberia', NULL, NULL);
INSERT INTO `ncountries` VALUES (122, 'LBY', 'Libyan Arab Jamahiriya', NULL, NULL);
INSERT INTO `ncountries` VALUES (123, 'LCA', 'Saint Lucia', NULL, NULL);
INSERT INTO `ncountries` VALUES (124, 'LIE', 'Liechtenstein', NULL, NULL);
INSERT INTO `ncountries` VALUES (125, 'LKA', 'Sri Lanka', NULL, NULL);
INSERT INTO `ncountries` VALUES (126, 'LSO', 'Lesotho', NULL, NULL);
INSERT INTO `ncountries` VALUES (127, 'LTU', 'Lithuania', NULL, NULL);
INSERT INTO `ncountries` VALUES (128, 'LUX', 'Luxembourg', NULL, NULL);
INSERT INTO `ncountries` VALUES (129, 'LVA', 'Latvia', NULL, NULL);
INSERT INTO `ncountries` VALUES (130, 'MAC', 'Macao', NULL, NULL);
INSERT INTO `ncountries` VALUES (131, 'MAR', 'Morocco', NULL, NULL);
INSERT INTO `ncountries` VALUES (132, 'MCO', 'Monaco', NULL, NULL);
INSERT INTO `ncountries` VALUES (133, 'MDA', 'Moldova', NULL, NULL);
INSERT INTO `ncountries` VALUES (134, 'MDG', 'Madagascar', NULL, NULL);
INSERT INTO `ncountries` VALUES (135, 'MDV', 'Maldives', NULL, NULL);
INSERT INTO `ncountries` VALUES (136, 'MEX', 'Mexico', NULL, NULL);
INSERT INTO `ncountries` VALUES (137, 'MHL', 'Marshall Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (138, 'MKD', 'Macedonia', NULL, NULL);
INSERT INTO `ncountries` VALUES (139, 'MLI', 'Mali', NULL, NULL);
INSERT INTO `ncountries` VALUES (140, 'MLT', 'Malta', NULL, NULL);
INSERT INTO `ncountries` VALUES (141, 'MMR', 'Myanmar', NULL, NULL);
INSERT INTO `ncountries` VALUES (142, 'MNG', 'Mongolia', NULL, NULL);
INSERT INTO `ncountries` VALUES (143, 'MNP', 'Northern Mariana Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (144, 'MOZ', 'Mozambique', NULL, NULL);
INSERT INTO `ncountries` VALUES (145, 'MRT', 'Mauritania', NULL, NULL);
INSERT INTO `ncountries` VALUES (146, 'MSR', 'Montserrat', NULL, NULL);
INSERT INTO `ncountries` VALUES (147, 'MTQ', 'Martinique', NULL, NULL);
INSERT INTO `ncountries` VALUES (148, 'MUS', 'Mauritius', NULL, NULL);
INSERT INTO `ncountries` VALUES (149, 'MWI', 'Malawi', NULL, NULL);
INSERT INTO `ncountries` VALUES (150, 'MYS', 'Malaysia', NULL, NULL);
INSERT INTO `ncountries` VALUES (151, 'MYT', 'Mayotte', NULL, NULL);
INSERT INTO `ncountries` VALUES (152, 'NAM', 'Namibia', NULL, NULL);
INSERT INTO `ncountries` VALUES (153, 'NCL', 'New Caledonia', NULL, NULL);
INSERT INTO `ncountries` VALUES (154, 'NER', 'Niger', NULL, NULL);
INSERT INTO `ncountries` VALUES (155, 'NFK', 'Norfolk Island', NULL, NULL);
INSERT INTO `ncountries` VALUES (156, 'NGA', 'Nigeria', NULL, NULL);
INSERT INTO `ncountries` VALUES (157, 'NIC', 'Nicaragua', NULL, NULL);
INSERT INTO `ncountries` VALUES (158, 'NIU', 'Niue', NULL, NULL);
INSERT INTO `ncountries` VALUES (159, 'NLD', 'Netherlands', NULL, NULL);
INSERT INTO `ncountries` VALUES (160, 'NOR', 'Norway', NULL, NULL);
INSERT INTO `ncountries` VALUES (161, 'NPL', 'Nepal', NULL, NULL);
INSERT INTO `ncountries` VALUES (162, 'NRU', 'Nauru', NULL, NULL);
INSERT INTO `ncountries` VALUES (163, 'NZL', 'New Zealand', NULL, NULL);
INSERT INTO `ncountries` VALUES (164, 'OMN', 'Oman', NULL, NULL);
INSERT INTO `ncountries` VALUES (165, 'PAK', 'Pakistan', NULL, NULL);
INSERT INTO `ncountries` VALUES (166, 'PAN', 'Panama', NULL, NULL);
INSERT INTO `ncountries` VALUES (167, 'PCN', 'Pitcairn', NULL, NULL);
INSERT INTO `ncountries` VALUES (168, 'PER', 'Peru', NULL, NULL);
INSERT INTO `ncountries` VALUES (169, 'PHL', 'Philippines', NULL, NULL);
INSERT INTO `ncountries` VALUES (170, 'PLW', 'Palau', NULL, NULL);
INSERT INTO `ncountries` VALUES (171, 'PNG', 'Papua New Guinea', NULL, NULL);
INSERT INTO `ncountries` VALUES (172, 'POL', 'Poland', NULL, NULL);
INSERT INTO `ncountries` VALUES (173, 'PRI', 'Puerto Rico', NULL, NULL);
INSERT INTO `ncountries` VALUES (174, 'PRK', 'North Korea', NULL, NULL);
INSERT INTO `ncountries` VALUES (175, 'PRT', 'Portugal', NULL, NULL);
INSERT INTO `ncountries` VALUES (176, 'PRY', 'Paraguay', NULL, NULL);
INSERT INTO `ncountries` VALUES (177, 'PSE', 'Palestine', NULL, NULL);
INSERT INTO `ncountries` VALUES (178, 'PYF', 'French Polynesia', NULL, NULL);
INSERT INTO `ncountries` VALUES (179, 'QAT', 'Qatar', NULL, NULL);
INSERT INTO `ncountries` VALUES (180, 'REU', 'Réunion', NULL, NULL);
INSERT INTO `ncountries` VALUES (181, 'ROM', 'Romania', NULL, NULL);
INSERT INTO `ncountries` VALUES (182, 'RUS', 'Russian Federation', NULL, NULL);
INSERT INTO `ncountries` VALUES (183, 'RWA', 'Rwanda', NULL, NULL);
INSERT INTO `ncountries` VALUES (184, 'SAU', 'Saudi Arabia', NULL, NULL);
INSERT INTO `ncountries` VALUES (185, 'SDN', 'Sudan', NULL, NULL);
INSERT INTO `ncountries` VALUES (186, 'SEN', 'Senegal', NULL, NULL);
INSERT INTO `ncountries` VALUES (187, 'SGP', 'Singapore', NULL, NULL);
INSERT INTO `ncountries` VALUES (188, 'SGS', 'South Georgia and the South Sandwich Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (189, 'SHN', 'Saint Helena', NULL, NULL);
INSERT INTO `ncountries` VALUES (190, 'SJM', 'Svalbard and Jan Mayen', NULL, NULL);
INSERT INTO `ncountries` VALUES (191, 'SLB', 'Solomon Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (192, 'SLE', 'Sierra Leone', NULL, NULL);
INSERT INTO `ncountries` VALUES (193, 'SLV', 'El Salvador', NULL, NULL);
INSERT INTO `ncountries` VALUES (194, 'SMR', 'San Marino', NULL, NULL);
INSERT INTO `ncountries` VALUES (195, 'SOM', 'Somalia', NULL, NULL);
INSERT INTO `ncountries` VALUES (196, 'SPM', 'Saint Pierre and Miquelon', NULL, NULL);
INSERT INTO `ncountries` VALUES (197, 'STP', 'Sao Tome and Principe', NULL, NULL);
INSERT INTO `ncountries` VALUES (198, 'SUR', 'Suriname', NULL, NULL);
INSERT INTO `ncountries` VALUES (199, 'SVK', 'Slovakia', NULL, NULL);
INSERT INTO `ncountries` VALUES (200, 'SVN', 'Slovenia', NULL, NULL);
INSERT INTO `ncountries` VALUES (201, 'SWE', 'Sweden', NULL, NULL);
INSERT INTO `ncountries` VALUES (202, 'SWZ', 'Swaziland', NULL, NULL);
INSERT INTO `ncountries` VALUES (203, 'SYC', 'Seychelles', NULL, NULL);
INSERT INTO `ncountries` VALUES (204, 'SYR', 'Syria', NULL, NULL);
INSERT INTO `ncountries` VALUES (205, 'TCA', 'Turks and Caicos Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (206, 'TCD', 'Chad', NULL, NULL);
INSERT INTO `ncountries` VALUES (207, 'TGO', 'Togo', NULL, NULL);
INSERT INTO `ncountries` VALUES (208, 'THA', 'Thailand', NULL, NULL);
INSERT INTO `ncountries` VALUES (209, 'TJK', 'Tajikistan', NULL, NULL);
INSERT INTO `ncountries` VALUES (210, 'TKL', 'Tokelau', NULL, NULL);
INSERT INTO `ncountries` VALUES (211, 'TKM', 'Turkmenistan', NULL, NULL);
INSERT INTO `ncountries` VALUES (212, 'TMP', 'East Timor', NULL, NULL);
INSERT INTO `ncountries` VALUES (213, 'TON', 'Tonga', NULL, NULL);
INSERT INTO `ncountries` VALUES (214, 'TTO', 'Trinidad and Tobago', NULL, NULL);
INSERT INTO `ncountries` VALUES (215, 'TUN', 'Tunisia', NULL, NULL);
INSERT INTO `ncountries` VALUES (216, 'TUR', 'Turkey', NULL, NULL);
INSERT INTO `ncountries` VALUES (217, 'TUV', 'Tuvalu', NULL, NULL);
INSERT INTO `ncountries` VALUES (218, 'TWN', 'Taiwan', NULL, NULL);
INSERT INTO `ncountries` VALUES (219, 'TZA', 'Tanzania', NULL, NULL);
INSERT INTO `ncountries` VALUES (220, 'UGA', 'Uganda', NULL, NULL);
INSERT INTO `ncountries` VALUES (221, 'UKR', 'Ukraine', NULL, NULL);
INSERT INTO `ncountries` VALUES (222, 'UMI', 'United States Minor Outlying Islands', NULL, NULL);
INSERT INTO `ncountries` VALUES (223, 'URY', 'Uruguay', NULL, NULL);
INSERT INTO `ncountries` VALUES (224, 'USA', 'United States', NULL, NULL);
INSERT INTO `ncountries` VALUES (225, 'UZB', 'Uzbekistan', NULL, NULL);
INSERT INTO `ncountries` VALUES (226, 'VAT', 'Holy See (Vatican City State)', NULL, NULL);
INSERT INTO `ncountries` VALUES (227, 'VCT', 'Saint Vincent and the Grenadines', NULL, NULL);
INSERT INTO `ncountries` VALUES (228, 'VEN', 'Venezuela', NULL, NULL);
INSERT INTO `ncountries` VALUES (229, 'VGB', 'Virgin Islands, British', NULL, NULL);
INSERT INTO `ncountries` VALUES (230, 'VIR', 'Virgin Islands, U.S.', NULL, NULL);
INSERT INTO `ncountries` VALUES (231, 'VNM', 'Vietnam', NULL, NULL);
INSERT INTO `ncountries` VALUES (232, 'VUT', 'Vanuatu', NULL, NULL);
INSERT INTO `ncountries` VALUES (233, 'WLF', 'Wallis and Futuna', NULL, NULL);
INSERT INTO `ncountries` VALUES (234, 'WSM', 'Samoa', NULL, NULL);
INSERT INTO `ncountries` VALUES (235, 'YEM', 'Yemen', NULL, NULL);
INSERT INTO `ncountries` VALUES (236, 'YUG', 'Yugoslavia', NULL, NULL);
INSERT INTO `ncountries` VALUES (237, 'ZAF', 'South Africa', NULL, NULL);
INSERT INTO `ncountries` VALUES (238, 'ZMB', 'Zambia', NULL, NULL);
INSERT INTO `ncountries` VALUES (239, 'ZWE', 'Zimbabwe', NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 1);
INSERT INTO `permission_role` VALUES (2, 1);
INSERT INTO `permission_role` VALUES (3, 1);
INSERT INTO `permission_role` VALUES (4, 1);
INSERT INTO `permission_role` VALUES (5, 1);
INSERT INTO `permission_role` VALUES (6, 1);
INSERT INTO `permission_role` VALUES (7, 1);
INSERT INTO `permission_role` VALUES (8, 1);
INSERT INTO `permission_role` VALUES (9, 1);
INSERT INTO `permission_role` VALUES (10, 1);
INSERT INTO `permission_role` VALUES (11, 1);
INSERT INTO `permission_role` VALUES (12, 1);
INSERT INTO `permission_role` VALUES (13, 1);
INSERT INTO `permission_role` VALUES (14, 1);
INSERT INTO `permission_role` VALUES (15, 1);
INSERT INTO `permission_role` VALUES (16, 1);
INSERT INTO `permission_role` VALUES (17, 1);
INSERT INTO `permission_role` VALUES (18, 1);
INSERT INTO `permission_role` VALUES (19, 1);
INSERT INTO `permission_role` VALUES (20, 1);
INSERT INTO `permission_role` VALUES (21, 1);
INSERT INTO `permission_role` VALUES (22, 1);
INSERT INTO `permission_role` VALUES (23, 1);
INSERT INTO `permission_role` VALUES (24, 1);
INSERT INTO `permission_role` VALUES (25, 1);
INSERT INTO `permission_role` VALUES (26, 1);
INSERT INTO `permission_role` VALUES (27, 1);
INSERT INTO `permission_role` VALUES (28, 1);
INSERT INTO `permission_role` VALUES (29, 1);
INSERT INTO `permission_role` VALUES (30, 1);
INSERT INTO `permission_role` VALUES (31, 1);
INSERT INTO `permission_role` VALUES (32, 1);
INSERT INTO `permission_role` VALUES (33, 1);
INSERT INTO `permission_role` VALUES (34, 1);
INSERT INTO `permission_role` VALUES (35, 1);
INSERT INTO `permission_role` VALUES (36, 1);
INSERT INTO `permission_role` VALUES (57, 1);
INSERT INTO `permission_role` VALUES (58, 1);
INSERT INTO `permission_role` VALUES (59, 1);
INSERT INTO `permission_role` VALUES (60, 1);
INSERT INTO `permission_role` VALUES (61, 1);
INSERT INTO `permission_role` VALUES (67, 1);
INSERT INTO `permission_role` VALUES (68, 1);
INSERT INTO `permission_role` VALUES (69, 1);
INSERT INTO `permission_role` VALUES (70, 1);
INSERT INTO `permission_role` VALUES (71, 1);
INSERT INTO `permission_role` VALUES (72, 1);
INSERT INTO `permission_role` VALUES (73, 1);
INSERT INTO `permission_role` VALUES (74, 1);
INSERT INTO `permission_role` VALUES (75, 1);
INSERT INTO `permission_role` VALUES (76, 1);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permissions_key_index`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'browse_admin', NULL, '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (2, 'browse_bread', NULL, '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (3, 'browse_database', NULL, '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (4, 'browse_media', NULL, '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (5, 'browse_compass', NULL, '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (6, 'browse_menus', 'menus', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (7, 'read_menus', 'menus', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (8, 'edit_menus', 'menus', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (9, 'add_menus', 'menus', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (10, 'delete_menus', 'menus', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (11, 'browse_roles', 'roles', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (12, 'read_roles', 'roles', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (13, 'edit_roles', 'roles', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (14, 'add_roles', 'roles', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (15, 'delete_roles', 'roles', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (16, 'browse_users', 'users', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `permissions` VALUES (17, 'read_users', 'users', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (18, 'edit_users', 'users', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (19, 'add_users', 'users', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (20, 'delete_users', 'users', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (21, 'browse_settings', 'settings', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (22, 'read_settings', 'settings', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (23, 'edit_settings', 'settings', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (24, 'add_settings', 'settings', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (25, 'delete_settings', 'settings', '2018-10-03 08:03:11', '2018-10-03 08:03:11');
INSERT INTO `permissions` VALUES (26, 'browse_hooks', NULL, '2018-10-03 08:03:12', '2018-10-03 08:03:12');
INSERT INTO `permissions` VALUES (27, 'browse_branches', 'branches', '2018-10-03 14:50:58', '2018-10-03 14:50:58');
INSERT INTO `permissions` VALUES (28, 'read_branches', 'branches', '2018-10-03 14:50:58', '2018-10-03 14:50:58');
INSERT INTO `permissions` VALUES (29, 'edit_branches', 'branches', '2018-10-03 14:50:58', '2018-10-03 14:50:58');
INSERT INTO `permissions` VALUES (30, 'add_branches', 'branches', '2018-10-03 14:50:58', '2018-10-03 14:50:58');
INSERT INTO `permissions` VALUES (31, 'delete_branches', 'branches', '2018-10-03 14:50:58', '2018-10-03 14:50:58');
INSERT INTO `permissions` VALUES (32, 'browse_scientist_accounts', 'scientist_accounts', '2018-10-04 08:43:06', '2018-10-04 08:43:06');
INSERT INTO `permissions` VALUES (33, 'read_scientist_accounts', 'scientist_accounts', '2018-10-04 08:43:06', '2018-10-04 08:43:06');
INSERT INTO `permissions` VALUES (34, 'edit_scientist_accounts', 'scientist_accounts', '2018-10-04 08:43:06', '2018-10-04 08:43:06');
INSERT INTO `permissions` VALUES (35, 'add_scientist_accounts', 'scientist_accounts', '2018-10-04 08:43:06', '2018-10-04 08:43:06');
INSERT INTO `permissions` VALUES (36, 'delete_scientist_accounts', 'scientist_accounts', '2018-10-04 08:43:06', '2018-10-04 08:43:06');
INSERT INTO `permissions` VALUES (57, 'browse_countries', 'countries', '2018-10-04 14:27:37', '2018-10-04 14:27:37');
INSERT INTO `permissions` VALUES (58, 'read_countries', 'countries', '2018-10-04 14:27:37', '2018-10-04 14:27:37');
INSERT INTO `permissions` VALUES (59, 'edit_countries', 'countries', '2018-10-04 14:27:37', '2018-10-04 14:27:37');
INSERT INTO `permissions` VALUES (60, 'add_countries', 'countries', '2018-10-04 14:27:37', '2018-10-04 14:27:37');
INSERT INTO `permissions` VALUES (61, 'delete_countries', 'countries', '2018-10-04 14:27:37', '2018-10-04 14:27:37');
INSERT INTO `permissions` VALUES (67, 'browse_ncountries', 'ncountries', '2018-10-05 06:41:57', '2018-10-05 06:41:57');
INSERT INTO `permissions` VALUES (68, 'read_ncountries', 'ncountries', '2018-10-05 06:41:57', '2018-10-05 06:41:57');
INSERT INTO `permissions` VALUES (69, 'edit_ncountries', 'ncountries', '2018-10-05 06:41:57', '2018-10-05 06:41:57');
INSERT INTO `permissions` VALUES (70, 'add_ncountries', 'ncountries', '2018-10-05 06:41:57', '2018-10-05 06:41:57');
INSERT INTO `permissions` VALUES (71, 'delete_ncountries', 'ncountries', '2018-10-05 06:41:57', '2018-10-05 06:41:57');
INSERT INTO `permissions` VALUES (72, 'browse_works', 'works', '2018-10-11 11:12:12', '2018-10-11 11:12:12');
INSERT INTO `permissions` VALUES (73, 'read_works', 'works', '2018-10-11 11:12:12', '2018-10-11 11:12:12');
INSERT INTO `permissions` VALUES (74, 'edit_works', 'works', '2018-10-11 11:12:12', '2018-10-11 11:12:12');
INSERT INTO `permissions` VALUES (75, 'add_works', 'works', '2018-10-11 11:12:12', '2018-10-11 11:12:12');
INSERT INTO `permissions` VALUES (76, 'delete_works', 'works', '2018-10-11 11:12:12', '2018-10-11 11:12:12');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Administrator', '2018-10-03 08:03:10', '2018-10-03 08:03:10');
INSERT INTO `roles` VALUES (2, 'user', 'Normal User', '2018-10-03 08:03:10', '2018-10-03 08:03:10');

-- ----------------------------
-- Table structure for scientist_accounts
-- ----------------------------
DROP TABLE IF EXISTS `scientist_accounts`;
CREATE TABLE `scientist_accounts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(11) NOT NULL,
  `login` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'missing',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `country_code` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `knownas` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `acc_status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `login_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `scientist_accounts_login_unique`(`login`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of scientist_accounts
-- ----------------------------
INSERT INTO `scientist_accounts` VALUES (14, 'Hitoshi', 'Mayuri', 3, 'hm@gmail.com', '$2y$10$2.I1GoIuKTXWkmt4ymNE3ulyjvVo2NYlm6/t2RZZq4QGPIY1UA6bO', 'm4Y2zsWvFSCZWL5rxOL2lqlL5WEUawtsit0vTi0DIxfkfZ27IqVLaUTtlvrd', 'test', '110', 1, 'scientist-accounts\\October2018\\RbkhJrjDrPlLR7fxYQNr.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-10-09 09:17:48', '2018-10-09 09:18:59', NULL);
INSERT INTO `scientist_accounts` VALUES (15, 'test', 'test', 1, 'test@test.test', '$2y$10$vSCi597b7lUTQwZtdkCSiuW9i48ZKG5y5kIyKYo3vvz6Y53RUUWO6', 'ny0L8X8vQ1ZGXMc4Hfw4OHLqquGifaO1OjPO9mwgOMy6HiBWxv1kog2CVeR5', 'test', '2', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-10-09 11:38:30', '2018-10-09 11:41:52', NULL);
INSERT INTO `scientist_accounts` VALUES (16, 'testt', 'testt', 2, 'testt@test.test', '$2y$10$dlYTw0rZBsmLq7hUCMUznerPfmc3A8brLSOAWiKnrvv8bTRu4YOuW', 'Iyks6GsCt16VDryYSkAdFhQTtiByvhV6qglx4tegPpUh0JPXlSjmNBTcm0GB', 'testt', '2', 2, NULL, NULL, NULL, NULL, NULL, 'testt', 1, NULL, '2018-10-09 12:04:33', '2018-10-09 12:04:58', NULL);

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `settings_key_unique`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site');
INSERT INTO `settings` VALUES (2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site');
INSERT INTO `settings` VALUES (3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site');
INSERT INTO `settings` VALUES (4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site');
INSERT INTO `settings` VALUES (5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin');
INSERT INTO `settings` VALUES (6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin');
INSERT INTO `settings` VALUES (8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin');
INSERT INTO `settings` VALUES (9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin');
INSERT INTO `settings` VALUES (10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_table_name_column_name_foreign_key_locale_unique`(`table_name`, `column_name`, `foreign_key`, `locale`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles`  (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE,
  INDEX `user_roles_user_id_index`(`user_id`) USING BTREE,
  INDEX `user_roles_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'users/default.png',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Captain', 'admin@lawliet.com', 'users/default.png', '$2y$10$vIAOqxHQyGCsVMnKIufb2utv0iA7cyrzUjFHf5Ar2Nv4.9Zme6/iK', 'RIL84N5JAp6h6YrwR70e9tjAIC1hqqCSB0WOoSPt5kLjQsLJvQU7dLkevWu5', NULL, '2018-10-03 08:05:48', '2018-10-03 08:05:48');

-- ----------------------------
-- Table structure for works
-- ----------------------------
DROP TABLE IF EXISTS `works`;
CREATE TABLE `works`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(11) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientist_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of works
-- ----------------------------
INSERT INTO `works` VALUES (1, 'SIRT2 induces the checkpoint kinase BubR1 to increase lifespan.', 3, 'Overexpression of SIRT2 or treatment of mice with the NAD(+) precursor nicotinamide mononucleotide (NMN) increases BubR1 abundance in vivo. Overexpression of SIRT2 in BubR1(H/H) animals increases median lifespan, with a greater effect in male mice. Together, these data indicate that further exploration of the potential of SIRT2 and NAD(+) to delay diseases of aging in mammals is warranted.', 'https://www.ncbi.nlm.nih.gov/pubmed/24825348', 14, '2018-10-11 11:17:19', '2018-10-11 11:17:19');
INSERT INTO `works` VALUES (2, 'When stem cells grow old: phenotypes and mechanisms of stem cell aging.', 9, 'Recent advances in our understanding of why adult stem cells age and how this aging impacts diseases and lifespan. With this increased understanding, it is feasible to design and test interventions that delay stem cell aging and improve both health and lifespan.', 'https://www.ncbi.nlm.nih.gov/pubmed/26732838', 14, '2018-10-11 11:59:39', '2018-10-11 11:59:39');
INSERT INTO `works` VALUES (3, 'test', 9, 'test', 'test', 14, '2018-10-11 15:27:09', '2018-10-11 15:27:12');
INSERT INTO `works` VALUES (4, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:23', '2018-10-11 15:28:42');
INSERT INTO `works` VALUES (5, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:25', '2018-10-11 15:28:43');
INSERT INTO `works` VALUES (6, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:27', '2018-10-11 15:28:44');
INSERT INTO `works` VALUES (7, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:29', '2018-10-11 15:28:45');
INSERT INTO `works` VALUES (8, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:31', '2018-10-11 15:28:46');
INSERT INTO `works` VALUES (9, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:33', '2018-10-11 15:28:47');
INSERT INTO `works` VALUES (10, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:34', '2018-10-11 15:28:50');
INSERT INTO `works` VALUES (11, 'test', 9, 'test', 'test', 14, '2018-10-11 15:28:35', '2018-10-11 15:28:48');

SET FOREIGN_KEY_CHECKS = 1;
