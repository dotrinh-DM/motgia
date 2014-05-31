-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2014 at 10:10 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motgia`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=589 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(584, 1401434390, '::1', 'eQ1991WH'),
(585, 1401440698, '::1', 'SYiYATn6'),
(586, 1401463265, '127.0.0.1', 'X0eMqw7R'),
(587, 1401508905, '::1', 'ci8sp82v'),
(588, 1401508925, '::1', 'bncrCL11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoriesID`, `name`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Trẻ em'),
(4, 'quần áo'),
(5, 'giày dép');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2ed8c0330c9d64cced5809534efb02d8', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1401514821, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";a:4:{s:6:"userID";s:8:"UID00003";s:8:"fullname";s:13:"Nguyễn Tân";s:5:"email";s:25:"ductan_nguyen92@yahoo.com";s:9:"logged_in";b:1;}}');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `guestID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`guestID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestID`, `fullname`, `mail`, `phone`, `province`, `address`, `create_date`) VALUES
('GUEST001', '', '', 0, '', '', '2014-05-28 13:46:07'),
('GUEST002', '', '', 0, '', '', '2014-05-28 13:46:14'),
('GUEST003', '', '', 0, '', '', '2014-05-28 13:46:17'),
('GUEST004', '', '', 0, '', '', '2014-05-28 13:46:34'),
('GUEST005', 'sdfsdf', 'sfsdf', 0, 'Bà Rịa - Vũng Tàu', 'sdfsdf', '2014-05-28 13:50:51'),
('GUEST006', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', 'truong dinh', '2014-05-28 13:51:42'),
('GUEST007', 'Nguyễn Tân', 'sfdsdf', 0, 'Cần Thơ', 'sdfsdf', '2014-05-28 17:06:54'),
('GUEST008', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', '123', '2014-05-28 21:25:56'),
('GUEST009', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đà Nẵng', 'truong dinh', '2014-05-28 23:10:32'),
('GUEST010', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Thái Bình', 'tien hai', '2014-05-28 23:49:32'),
('GUEST011', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đắk Lắk', 'buon ho', '2014-05-29 00:56:49'),
('GUEST012', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bến Tre', '123', '2014-05-29 01:18:45'),
('GUEST013', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '123', '2014-05-29 01:41:58'),
('GUEST014', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-29 01:55:36'),
('GUEST015', 'Tân Tân Tân', '234dfsdf@sdfsdf.sdf', 1689338965, 'Vĩnh Long', '123456', '2014-05-29 02:01:01'),
('GUEST016', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '213', '2014-05-29 05:05:45'),
('GUEST017', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-30 05:52:23'),
('GUEST018', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', '1234', '2014-05-30 06:05:27'),
('GUEST019', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', 'sdfsdf', '2014-05-30 06:29:11'),
('GUEST020', 'sdfsdf', '234dfsdf@sdfsdf.sdf', 123123, 'TP HCM', 'sdfsdf', '2014-05-30 06:30:56'),
('GUEST021', 'sdfsdf', 'ductan_nguyen92@yahoo.com', 123123, 'Bình Dương', 'sdf', '2014-05-30 06:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelID`, `name`) VALUES
(0, 'chưa kích hoạt'),
(1, 'thành viên'),
(2, 'nhà cung cấp'),
(3, 'quản trị viên'),
(4, 'bị cấm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `receiverID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senderID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `receiverID`, `senderID`, `title`, `content`, `create_date`, `status`) VALUES
('MSS00001', 'UID00003', 'UID00004', 'Xin chào', 'làm quen được không?', '2014-04-09 00:00:00', 1),
('MSS00002', 'UID00003', 'UID00002', 'Việc khẩn', 'nhậu không?', '2014-04-16 00:00:00', 1),
('MSS00004', 'UID00003', 'UID00003', 'Làm quen?', '<p>dfsdfsdfsdf</p>', '2014-04-18 17:15:37', 1),
('MSS00005', 'UID00002', 'UID00003', 'Reply: Việc khẩn', '<p>khong</p>', '2014-04-18 19:18:42', 0),
('MSS00006', 'UID00004', 'UID00003', 'Reply: Làm quen?', '<p>C&oacute; bạn trai rồi</p>', '2014-04-18 22:46:48', 1),
('MSS00007', 'UID00004', 'UID00003', 'Reply: Xin chào', '<p>sdfsdfhgjkl;kjgfdfs</p>', '2014-04-18 22:51:18', 1),
('MSS00008', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', '<p>chia tay de</p>', '2014-04-18 23:13:47', 1),
('MSS00009', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdddddddddddddddddddddddddddd', '<p>tantnanta</p>', '2014-04-20 15:42:09', 0),
('MSS00010', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:27', 1),
('MSS00011', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:32', 1),
('MSS00012', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '<p>fsdfsdfsdfsdfsdf</p>', '2014-05-17 01:52:38', 1),
('MSS00013', 'UID00002', 'UID00003', 'Reply: Việc khẩnfsdfsdf', 'sdfsdfsd', '2014-05-24 16:14:47', 0),
('MSS00014', 'UID00002', 'UID00003', 'Reply: Việc khẩnasdasdasdasd', 'asdasdasdasdasd', '2014-05-24 16:15:15', 0),
('MSS00015', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdfffffffffffffff', 'ffffffffffffffffffffffffffffffffff', '2014-05-24 16:16:01', 0),
('MSS00016', 'UID00002', 'ArrayArray', 'Reply: Việc khẩndfgdfgdfg', 'dfgdfg', '2014-05-24 16:18:07', 0),
('MSS00017', 'UID00003', 'UID00004', 'cin chao thu nghiem', 'chao ban minh la tan dang thu nghiem he thong', '2014-05-24 17:06:16', 1),
('MSS00018', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', 'sdfsdfsdf', '2014-05-27 16:58:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sellerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buyerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `sellerID`, `buyerID`, `create_date`, `note`, `method`, `status`) VALUES
('ORD00001', 'UID00003', 'UID00001', '2014-05-07 16:14:06', ' ', 0, 2),
('ORD00002', 'UID00003', 'UID00002', '2014-05-07 16:15:40', ' ', 0, 0),
('ORD00003', 'UID00003', 'UID00004', '2014-05-07 23:29:22', ' Chuyển vào chủ nhật tuần tới', 0, 0),
('ORD00004', 'UID00003', 'UID00001', '2014-05-07 23:31:46', ' ', 0, 2),
('ORD00005', 'UID00002', 'UID00003', '2014-05-09 06:41:51', ' ', 0, 1),
('ORD00006', 'UID00003', 'UID00001', '2014-05-09 06:42:37', ' ', 0, 2),
('ORD00007', 'UID00003', 'UID00004', '2014-05-11 18:26:57', ' ', 0, 2),
('ORD00008', 'UID00004', 'UID00003', '2014-05-12 16:26:06', ' ', 0, 1),
('ORD00009', 'UID00003', 'UID00001', '2014-05-12 16:28:41', 'lam gi thi lam', 0, 0),
('ORD00011', 'UID00001', 'UID00003', '2014-05-17 10:44:03', ' ', 0, 1),
('ORD00012', 'UID00001', 'UID00003', '2014-05-21 17:19:50', ' ', 0, 1),
('ORD00013', 'UID00001', 'UID00003', '2014-05-21 19:30:48', ' ', 0, 1),
('ORD00014', 'UID00003', 'UID00003', '2014-05-24 17:00:39', ' ', 0, 2),
('ORD00015', 'UID00001', 'UID00004', '2014-05-28 22:56:21', 'chuyen vao chu nha cho tui', 0, 1),
('ORD00016', 'UID00003', 'UID00003', '2014-05-29 01:40:20', '', 1, 0),
('ORD00017', 'UID00002', 'UID00003', '2014-05-29 01:41:31', 'chuyen ngay nha', 1, 1),
('ORD00018', 'UID00001', 'GUEST013', '2014-05-29 01:46:24', '', 1, 1),
('ORD00019', 'UID00003', 'GUEST014', '2014-05-29 01:56:05', 'chuyen den binh thuan cho tao', 1, 1),
('ORD00021', 'UID00003', 'UID00003', '2014-05-30 01:36:40', '', 0, 1),
('ORD00022', 'UID00001', 'UID00003', '2014-05-30 02:02:57', '', 1, 1),
('ORD00023', 'UID00001', 'UID00003', '2014-05-30 02:04:13', '', 1, 1),
('ORD00024', 'UID00001', 'UID00003', '2014-05-30 02:15:13', '', 1, 1),
('ORD00025', 'UID00003', 'UID00003', '2014-05-30 02:23:49', '', 1, 1),
('ORD00026', 'UID00001', 'UID00003', '2014-05-30 03:40:12', '', 1, 1),
('ORD00027', 'UID00003', 'UID00003', '2014-05-30 03:47:32', '', 0, 1),
('ORD00028', 'UID00002', 'UID00003', '2014-05-30 03:47:39', '', 1, 1),
('ORD00029', 'UID00002', 'UID00003', '2014-05-30 03:49:05', '', 1, 1),
('ORD00031', 'UID00001', 'UID00003', '2014-05-30 03:57:27', '', 1, 1),
('ORD00032', 'UID00001', 'UID00003', '2014-05-30 04:02:20', '', 0, 1),
('ORD00033', 'UID00003', 'UID00003', '2014-05-30 05:47:00', '', 1, 1),
('ORD00034', 'UID00003', 'UID00003', '2014-05-30 05:48:34', '', 1, 1),
('ORD00035', 'UID00003', 'UID00003', '2014-05-30 05:48:48', '', 1, 1),
('ORD00036', 'UID00002', 'UID00003', '2014-05-30 06:35:39', '', 1, 1),
('ORD00037', 'UID00001', 'UID00003', '2014-05-30 07:09:33', '', 1, 1),
('ORD00038', 'UID00002', 'UID00003', '2014-05-30 07:11:15', '', 1, 1),
('ORD00039', 'UID00001', 'UID00003', '2014-05-31 01:03:47', '', 1, 1),
('ORD00041', 'UID00001', 'UID00003', '2014-05-31 11:40:24', 'trua ', 0, 1),
('ORD00042', 'UID00001', 'UID00003', '2014-05-31 13:22:43', '', 1, 1),
('ORD00043', 'UID00002', 'UID00003', '2014-05-31 13:36:59', '', 1, 1),
('ORD010', 'UID00001', 'UID00003', '2014-05-13 11:12:50', ' ', 0, 1),
('ORD020', 'UID00003', 'GUEST015', '2014-05-29 02:01:11', '', 1, 0),
('ORD030', 'UID00001', 'UID00003', '2014-05-30 03:51:46', 'chuyen trong dem', 1, 1),
('ORD040', 'UID00002', 'UID00003', '2014-05-31 01:51:30', '12: 51 31/5', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderID`, `productsID`, `quantity`) VALUES
('ORD00012', 'PRO00007', 1),
('ORD00012', 'PRO00016', 1),
('ORD00012', 'PRO00025', 1),
('ORD00012', 'PRO00029', 1),
('ORD00013', 'PRO00016', 2),
('ORD00013', 'PRO00025', 3),
('ORD00014', 'PRO00001', 1),
('ORD00015', 'PRO00007', 1),
('ORD00015', 'PRO00016', 4),
('ORD00016', 'PRO00001', 1),
('ORD00016', 'PRO00002', 1),
('ORD00016', 'PRO00004', 2),
('ORD00017', 'PRO00005', 1),
('ORD00017', 'PRO00013', 1),
('ORD00018', 'PRO00007', 1),
('ORD00018', 'PRO00016', 1),
('ORD00019', 'PRO00001', 1),
('ORD00021', 'PRO00001', 1),
('ORD00022', 'PRO00025', 1),
('ORD00023', 'PRO00025', 2),
('ORD00024', 'PRO00025', 7),
('ORD00025', 'PRO00001', 4),
('ORD00026', 'PRO00007', 1),
('ORD00026', 'PRO00016', 1),
('ORD00026', 'PRO00029', 13),
('ORD00027', 'PRO00001', 2),
('ORD00028', 'PRO00014', 1),
('ORD00029', 'PRO00014', 1),
('ORD00031', 'PRO00007', 1),
('ORD00032', 'PRO00007', 1),
('ORD00033', 'PRO00001', 1),
('ORD00034', 'PRO00001', 1),
('ORD00035', 'PRO00001', 4),
('ORD00036', 'PRO00014', 15),
('ORD00037', 'PRO00007', 1),
('ORD00037', 'PRO00016', 2),
('ORD00037', 'PRO00025', 7),
('ORD00037', 'PRO00029', 1),
('ORD00038', 'PRO00005', 5),
('ORD00038', 'PRO00013', 5),
('ORD00038', 'PRO00014', 2),
('ORD00039', 'PRO00007', 1),
('ORD00041', 'PRO00016', 1),
('ORD00041', 'PRO00025', 1),
('ORD00041', 'PRO00029', 1),
('ORD00042', 'PRO00025', 1),
('ORD00043', 'PRO00013', 1),
('ORD00043', 'PRO00014', 1),
('ORD00043', 'PRO00020', 1),
('ORD020', 'PRO00001', 1),
('ORD030', 'PRO00007', 1),
('ORD030', 'PRO00016', 1),
('ORD030', 'PRO00025', 3),
('ORD030', 'PRO00029', 1),
('ORD040', 'PRO00005', 1),
('ORD040', 'PRO00013', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `soldnumber` int(11) NOT NULL,
  `images` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hightlight` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `condition` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productinfo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `userID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoriesID` int(5) NOT NULL,
  `date_expiration` date NOT NULL COMMENT 'ngày hết hạn',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsID`, `name`, `quantity`, `price`, `soldnumber`, `images`, `intro`, `hightlight`, `condition`, `productinfo`, `create_date`, `userID`, `categoriesID`, `date_expiration`, `status`) VALUES
('PRO00001', 'Sp1', 12, 100000, 0, '["public\\/product_images\\/motgia53770e71c4ad4.jpg","public\\/product_images\\/motgia53770e71c4c2b.jpg","public\\/product_images\\/motgia53770e71c4d33.jpg"]', '<p>sdfsdfsdf</p>', '<p>sdfdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '2014-05-17 15:23:29', 'UID00003', 1, '0000-00-00', 1),
('PRO00002', 'Sp2', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. us, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', 1, '2014-04-02', 1),
('PRO00003', 'Sp3', 3, 100000, 100, '["public\\/product_images\\/motgia53280f85369b2.jpg","public\\/product_images\\/motgia5315f9af7e73a.jpg","public\\/product_images\\/motgia5315f9af7eb66.PNG"]', '<p>dfsdfsdfsdf</p>', '', '', '', '0000-00-00 00:00:00', 'UID00004', 1, '2014-04-02', 0),
('PRO00004', 'Sp4', 3, 100000, 7, '["public\\/product_images\\/motgia53281007a3ecc.JPG","public\\/product_images\\/motgia53167d93e2722.jpg",null]', '<p>f</p>', '', '', '', '0000-00-00 00:00:00', 'UID00003', 1, '2014-04-03', 2),
('PRO00005', 'Sp5', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', 2, '2014-04-21', 1),
('PRO00006', 'Sp6', 3, 100000, 4, '["public\\/product_images\\/motgia532811609eddc.jpg","public\\/product_images\\/motgia532811609efa6.jpg","public\\/product_images\\/motgia532811609f0e3.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', 5, '2014-04-24', 0),
('PRO00007', 'Sp7', 100, 100000, 4, '["public\\/product_images\\/motgia5328137f8d202.jpg","public\\/product_images\\/motgia5328137f8d3a1.jpg","public\\/product_images\\/motgia5328137f8d624.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00001', 4, '2014-04-25', 0),
('PRO00008', 'Sp8', 12, 100000, 10, '["public\\/product_images\\/motgia532813c6737fd.jpg","public\\/product_images\\/motgia532813c673993.jpg","public\\/product_images\\/motgia532813c673ab2.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00003', 7, '2014-04-17', 1),
('PRO00009', 'Sp9', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', 1, '2014-04-02', 1),
('PRO00010', 'Sp10', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', 1, '2014-04-02', 1),
('PRO00011', 'Sp11', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', 2, '2014-04-21', 0),
('PRO00012', 'Sp12', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00013', 'Sp13', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', 2, '2014-04-21', 1),
('PRO00014', 'Sp14', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', 2, '2014-04-21', 1),
('PRO00015', 'Sp15', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00016', 'Sp16', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', 2, '2014-04-21', 0),
('PRO00017', 'Sp17', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 1),
('PRO00018', 'Sp18', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 1),
('PRO00019', 'Sp19', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00020', 'Sp20', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', 2, '2014-04-21', 1),
('PRO00021', 'Sp21', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00022', 'Sp22', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', 2, '2014-04-21', 0),
('PRO00023', 'Sp23', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00024', 'Sp24', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', 2, '2014-04-21', 1),
('PRO00025', 'Sp25', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', 2, '2014-04-21', 0),
('PRO00026', 'Sp26', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 2, '2014-04-21', 0),
('PRO00027', 'Sp27', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', 4, '2014-04-21', 0),
('PRO00028', 'Sp28', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', 2, '2014-04-21', 1),
('PRO00029', 'Sp29', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p>dfdsdfsdf</p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', 2, '2014-04-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE IF NOT EXISTS `seller_info` (
  `id` int(5) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `coin` double NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `levelID` int(5) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `email`, `password`, `birthday`, `gender`, `coin`, `province`, `phone`, `address`, `status`, `create_date`, `levelID`) VALUES
('UID00001', 'Trịnh', 'Thành Đô', 'thanhdo.trinh@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '0000-00-00', 0, 0, 'Bình Định', '841234567867', 'trên trời', 1, '2014-03-16 04:34:20', 0),
('UID00002', 'Hải', 'Lê', 'haile.fithou@yahoo.com', 'UV9qkwFX1usTeuQkjCrLffhyZHFcRn95QIfGBZ/pn4aGouNWZaVkk+CjRj3L1P25OCM4iHjuwWba9JVgOgfotg==', '0000-00-00', 0, 0, '', '0123456789', 'Linh Đàm', 1, '2014-03-19 15:01:31', 0),
('UID00003', 'Nguyễn', 'Tân', 'ductan_nguyen92@yahoo.com', 'VwPYZK88ySydWsCCAR7Q/k70tYNiMR7kqRSV8/yzYIJKVFZY7LEJTDMBRgWdopus0huvWRQcLsAeZJRPjO1oOQ==', '1992-08-26', 0, 0, 'Thái Bình', '01689338965', 'Trương Định Hà Nội', 1, '2014-03-20 00:34:01', 2),
('UID00004', 'Tân', 'Ông xã', 'tantanb2@gmail.com', 'G8YBj0raFMrraVm2AtQHkR4m99lCVfkD80G4gzKemMchraHgQNbakwFj37aDUr6wdC/lEdTC7601TLBKjuCTXQ==', '1992-08-26', 0, 0, 'Thái Nguyên', '12345467890', 'Hoàng Mai - Hà Nội', 0, '2014-05-07 00:31:32', 3),
('UID00005', 'Tân', 'Tân', 'ductan_nguyen28@yahoo.com', 'Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==', '1992-08-26', 0, 0, 'Thái Nguyên', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-29 22:03:23', 0),
('UID00006', 'Đức', 'Tân', 'ductan_nguyen268@yahoo.com', 'S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==', '1992-02-01', 0, 0, 'Bình Thuận', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-30 15:19:50', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
