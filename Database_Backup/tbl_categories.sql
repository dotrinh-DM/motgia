/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : motgia

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2014-06-14 23:07:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_categories
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categories`;
CREATE TABLE `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_categories
-- ----------------------------
INSERT INTO `tbl_categories` VALUES ('1', 'Sản phẩm nổi bật', '0', '1');
INSERT INTO `tbl_categories` VALUES ('2', 'sales', '1', '4');
INSERT INTO `tbl_categories` VALUES ('3', 'Smart Phones', '0', '10');
INSERT INTO `tbl_categories` VALUES ('4', 'Main Stream', '3', '8');
INSERT INTO `tbl_categories` VALUES ('55', 'Android', '4', '1');
INSERT INTO `tbl_categories` VALUES ('6', 'iOS', '4', '2');
INSERT INTO `tbl_categories` VALUES ('7', 'Others', '4', '3');
INSERT INTO `tbl_categories` VALUES ('8', 'Luxury', '3', '6');
INSERT INTO `tbl_categories` VALUES ('10', 'Phụ kiện', '94', '9');
INSERT INTO `tbl_categories` VALUES ('51', 'Sales', '3', '7');
INSERT INTO `tbl_categories` VALUES ('57', 'Month 4', '51', '1');
INSERT INTO `tbl_categories` VALUES ('58', 'Month 5', '51', '2');
INSERT INTO `tbl_categories` VALUES ('59', 'Phụ Kiện', '94', '0');
INSERT INTO `tbl_categories` VALUES ('61', 'Month 4', '2', '0');
INSERT INTO `tbl_categories` VALUES ('62', 'Month 5', '2', '0');
INSERT INTO `tbl_categories` VALUES ('63', 'Top nhãn hiệu', '1', '0');
INSERT INTO `tbl_categories` VALUES ('64', 'Apple', '63', '0');
INSERT INTO `tbl_categories` VALUES ('65', 'Samsung', '63', '0');
INSERT INTO `tbl_categories` VALUES ('66', 'Blackberry', '63', '0');
INSERT INTO `tbl_categories` VALUES ('67', 'Brand', '3', '0');
INSERT INTO `tbl_categories` VALUES ('68', 'Month 3', '51', '0');
INSERT INTO `tbl_categories` VALUES ('69', 'Vertu', '8', '0');
INSERT INTO `tbl_categories` VALUES ('70', 'Mobiado', '8', '0');
INSERT INTO `tbl_categories` VALUES ('71', 'Lamboghili', '8', '0');
INSERT INTO `tbl_categories` VALUES ('72', 'Apple', '67', '0');
INSERT INTO `tbl_categories` VALUES ('73', 'Blackberry', '67', '0');
INSERT INTO `tbl_categories` VALUES ('74', 'Motorola', '67', '0');
INSERT INTO `tbl_categories` VALUES ('75', 'Lắc tay', '94', '0');
INSERT INTO `tbl_categories` VALUES ('76', 'Dây chuyền', '94', '0');
INSERT INTO `tbl_categories` VALUES ('83', 'Ví Da Nam', '59', '0');
INSERT INTO `tbl_categories` VALUES ('85', 'Thắt Lưng', '59', '0');
INSERT INTO `tbl_categories` VALUES ('87', 'Quần Nữ', '94', '0');
INSERT INTO `tbl_categories` VALUES ('88', 'Quần short', '94', '0');
INSERT INTO `tbl_categories` VALUES ('89', 'Quần Jeans', '94', '0');
INSERT INTO `tbl_categories` VALUES ('90', 'Quần Sip', '94', '0');
INSERT INTO `tbl_categories` VALUES ('91', 'Quần Kaki', '94', '0');
INSERT INTO `tbl_categories` VALUES ('92', 'Đồ gia dụng', '0', '0');
INSERT INTO `tbl_categories` VALUES ('93', 'Rao vặt', '0', '0');
INSERT INTO `tbl_categories` VALUES ('94', 'Thời Trang', '0', '20');
