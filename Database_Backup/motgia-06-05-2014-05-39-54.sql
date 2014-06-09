DROP TABLE IF EXISTS captcha;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB AUTO_INCREMENT=603 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO captcha VALUES("597","1401648510","127.0.0.1","i12VIBDh");
INSERT INTO captcha VALUES("598","1401648570","127.0.0.1","e5OBWen6");
INSERT INTO captcha VALUES("599","1401648604","127.0.0.1","kaNWAH81");
INSERT INTO captcha VALUES("600","1401650452","127.0.0.1","CmLz8ZF1");
INSERT INTO captcha VALUES("601","1401653955","127.0.0.1","KoFnmerc");
INSERT INTO captcha VALUES("602","1401918207","127.0.0.1","aeHzh3VJ");


DROP TABLE IF EXISTS categories;

CREATE TABLE `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO categories VALUES("1","Nam");
INSERT INTO categories VALUES("2","Nữ");
INSERT INTO categories VALUES("3","Trẻ em");
INSERT INTO categories VALUES("4","quần áo");
INSERT INTO categories VALUES("5","giày dép");


DROP TABLE IF EXISTS ci_sessions;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO ci_sessions VALUES("13aba708fd0acd03119df362e0219355","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401917992","a:2:{s:9:\"user_data\";s:0:\"\";s:5:\"admin\";a:4:{s:8:\"fullname\";s:20:\"Trịnh Thành Đô\";s:5:\"email\";s:23:\"thanhdo.trinh@yahoo.com\";s:6:\"userID\";s:8:\"UID00001\";s:9:\"logged_in\";b:1;}}");
INSERT INTO ci_sessions VALUES("4c941db1b77a26c3cc41e4e01ea93683","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919557","");
INSERT INTO ci_sessions VALUES("50861d8a4b2f11b45f05ff28e5ea4df8","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919542","");
INSERT INTO ci_sessions VALUES("55d78e6bb61d315674ff7a86ed25e1ca","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919558","");
INSERT INTO ci_sessions VALUES("7ce7d8d9adbfd731426355084184b07b","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919549","");
INSERT INTO ci_sessions VALUES("85bc2222a2bff9294e0a98ffc77df17f","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919547","");
INSERT INTO ci_sessions VALUES("878834f55ca797c4383b1101142305de","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919558","");
INSERT INTO ci_sessions VALUES("894dc257e23e61170f6e7d710df43dc6","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401920889","a:3:{s:9:\"user_data\";s:0:\"\";s:5:\"admin\";a:4:{s:8:\"fullname\";s:20:\"Trịnh Thành Đô\";s:5:\"email\";s:23:\"thanhdo.trinh@yahoo.com\";s:6:\"userID\";s:8:\"UID00001\";s:9:\"logged_in\";b:1;}s:4:\"user\";a:4:{s:6:\"userID\";s:8:\"UID00004\";s:8:\"fullname\";s:13:\"Tân Ông xã\";s:5:\"email\";s:18:\"tantanb2@gmail.com\";s:9:\"logged_in\";b:1;}}");
INSERT INTO ci_sessions VALUES("907a559fcda8cf2c4e4a174fbde3b883","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919558","");
INSERT INTO ci_sessions VALUES("a18c8ff1a7d6be66ad58e182ceee2090","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36","1401939571","a:2:{s:9:\"user_data\";s:0:\"\";s:5:\"admin\";a:4:{s:8:\"fullname\";s:20:\"Trịnh Thành Đô\";s:5:\"email\";s:23:\"thanhdo.trinh@yahoo.com\";s:6:\"userID\";s:8:\"UID00001\";s:9:\"logged_in\";b:1;}}");
INSERT INTO ci_sessions VALUES("b4f8e27c7f458f13c326e4a601c88e26","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36","1401939127","");
INSERT INTO ci_sessions VALUES("c036d084dafa9a8fb5de94e42e398186","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401922537","a:2:{s:9:\"user_data\";s:0:\"\";s:5:\"admin\";a:4:{s:8:\"fullname\";s:20:\"Trịnh Thành Đô\";s:5:\"email\";s:23:\"thanhdo.trinh@yahoo.com\";s:6:\"userID\";s:8:\"UID00001\";s:9:\"logged_in\";b:1;}}");
INSERT INTO ci_sessions VALUES("f3ecfd5f4fe97019fcd3e6500ad96682","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401919558","");
INSERT INTO ci_sessions VALUES("f95c2baeda4e23c08086e828fd68f862","127.0.0.1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0","1401921192","a:2:{s:9:\"user_data\";s:0:\"\";s:5:\"admin\";a:4:{s:8:\"fullname\";s:20:\"Trịnh Thành Đô\";s:5:\"email\";s:23:\"thanhdo.trinh@yahoo.com\";s:6:\"userID\";s:8:\"UID00001\";s:9:\"logged_in\";b:1;}}");


DROP TABLE IF EXISTS guest;

CREATE TABLE `guest` (
  `guestID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`guestID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

INSERT INTO guest VALUES("GUEST001","","","0","","","2014-05-28 13:46:07");
INSERT INTO guest VALUES("GUEST002","","","0","","","2014-05-28 13:46:14");
INSERT INTO guest VALUES("GUEST003","","","0","","","2014-05-28 13:46:17");
INSERT INTO guest VALUES("GUEST004","","","0","","","2014-05-28 13:46:34");
INSERT INTO guest VALUES("GUEST005","sdfsdf","sfsdf","0","Bà Rịa - Vũng Tàu","sdfsdf","2014-05-28 13:50:51");
INSERT INTO guest VALUES("GUEST006","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","TP HCM","truong dinh","2014-05-28 13:51:42");
INSERT INTO guest VALUES("GUEST007","Nguyễn Tân","sfdsdf","0","Cần Thơ","sdfsdf","2014-05-28 17:06:54");
INSERT INTO guest VALUES("GUEST008","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bình Dương","123","2014-05-28 21:25:56");
INSERT INTO guest VALUES("GUEST009","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Đà Nẵng","truong dinh","2014-05-28 23:10:32");
INSERT INTO guest VALUES("GUEST010","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Thái Bình","tien hai","2014-05-28 23:49:32");
INSERT INTO guest VALUES("GUEST011","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Đắk Lắk","buon ho","2014-05-29 00:56:49");
INSERT INTO guest VALUES("GUEST012","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bến Tre","123","2014-05-29 01:18:45");
INSERT INTO guest VALUES("GUEST013","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Cao Bằng","123","2014-05-29 01:41:58");
INSERT INTO guest VALUES("GUEST014","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bình Thuận","123","2014-05-29 01:55:36");
INSERT INTO guest VALUES("GUEST015","Tân Tân Tân","234dfsdf@sdfsdf.sdf","1689338965","Vĩnh Long","123456","2014-05-29 02:01:01");
INSERT INTO guest VALUES("GUEST016","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Cao Bằng","213","2014-05-29 05:05:45");
INSERT INTO guest VALUES("GUEST017","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bình Thuận","123","2014-05-30 05:52:23");
INSERT INTO guest VALUES("GUEST018","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","TP HCM","1234","2014-05-30 06:05:27");
INSERT INTO guest VALUES("GUEST019","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bình Dương","sdfsdf","2014-05-30 06:29:11");
INSERT INTO guest VALUES("GUEST020","sdfsdf","234dfsdf@sdfsdf.sdf","123123","TP HCM","sdfsdf","2014-05-30 06:30:56");
INSERT INTO guest VALUES("GUEST021","sdfsdf","ductan_nguyen92@yahoo.com","123123","Bình Dương","sdf","2014-05-30 06:33:00");
INSERT INTO guest VALUES("GUEST022","Tantan","thanhdo.trinh@gmail.com","978787687","TP HCM","ssdasdasd","2014-06-01 04:57:20");
INSERT INTO guest VALUES("GUEST023","123","3s@sdfsdf.sdfsfd","2312312","Cần Thơ","sdfsdf","2014-06-01 05:00:11");


DROP TABLE IF EXISTS level;

CREATE TABLE `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO level VALUES("1","thành viên");
INSERT INTO level VALUES("2","nhà cung cấp");
INSERT INTO level VALUES("3","quản trị viên");
INSERT INTO level VALUES("4","bị cấm");
INSERT INTO level VALUES("5","chưa kích hoạt");


DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `messageID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `receiverID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senderID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO message VALUES("MSS00001","UID00003","UID00004","Xin chào","làm quen được không?","2014-04-09 00:00:00","1");
INSERT INTO message VALUES("MSS00002","UID00003","UID00002","Việc khẩn","nhậu không?","2014-04-16 00:00:00","1");
INSERT INTO message VALUES("MSS00004","UID00003","UID00003","Làm quen?","<p>dfsdfsdfsdf</p>","2014-04-18 17:15:37","1");
INSERT INTO message VALUES("MSS00005","UID00002","UID00003","Reply: Việc khẩn","<p>khong</p>","2014-04-18 19:18:42","0");
INSERT INTO message VALUES("MSS00006","UID00004","UID00003","Reply: Làm quen?","<p>C&oacute; bạn trai rồi</p>","2014-04-18 22:46:48","1");
INSERT INTO message VALUES("MSS00007","UID00004","UID00003","Reply: Xin chào","<p>sdfsdfhgjkl;kjgfdfs</p>","2014-04-18 22:51:18","1");
INSERT INTO message VALUES("MSS00008","UID00003","UID00004","Reply: Reply: Làm quen?","<p>chia tay de</p>","2014-04-18 23:13:47","1");
INSERT INTO message VALUES("MSS00009","UID00002","UID00003","Reply: Việc khẩnsdddddddddddddddddddddddddddd","<p>tantnanta</p>","2014-04-20 15:42:09","0");
INSERT INTO message VALUES("MSS00010","UID00004","UID00003","Reply: Reply: Reply: Làm quen?","","2014-05-17 01:52:27","1");
INSERT INTO message VALUES("MSS00011","UID00004","UID00003","Reply: Reply: Reply: Làm quen?","","2014-05-17 01:52:32","1");
INSERT INTO message VALUES("MSS00012","UID00004","UID00003","Reply: Reply: Reply: Làm quen?","<p>fsdfsdfsdfsdfsdf</p>","2014-05-17 01:52:38","1");
INSERT INTO message VALUES("MSS00013","UID00002","UID00003","Reply: Việc khẩnfsdfsdf","sdfsdfsd","2014-05-24 16:14:47","0");
INSERT INTO message VALUES("MSS00014","UID00002","UID00003","Reply: Việc khẩnasdasdasdasd","asdasdasdasdasd","2014-05-24 16:15:15","0");
INSERT INTO message VALUES("MSS00015","UID00002","UID00003","Reply: Việc khẩnsdfffffffffffffff","ffffffffffffffffffffffffffffffffff","2014-05-24 16:16:01","0");
INSERT INTO message VALUES("MSS00016","UID00002","ArrayArray","Reply: Việc khẩndfgdfgdfg","dfgdfg","2014-05-24 16:18:07","0");
INSERT INTO message VALUES("MSS00017","UID00003","UID00004","cin chao thu nghiem","chao ban minh la tan dang thu nghiem he thong","2014-05-24 17:06:16","1");
INSERT INTO message VALUES("MSS00018","UID00003","UID00004","Reply: Reply: Làm quen?","sdfsdfsdf","2014-05-27 16:58:38","1");


DROP TABLE IF EXISTS order_detail;

CREATE TABLE `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO order_detail VALUES("ORD00012","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00012","PRO00016","1");
INSERT INTO order_detail VALUES("ORD00012","PRO00025","1");
INSERT INTO order_detail VALUES("ORD00012","PRO00029","1");
INSERT INTO order_detail VALUES("ORD00013","PRO00016","2");
INSERT INTO order_detail VALUES("ORD00013","PRO00025","3");
INSERT INTO order_detail VALUES("ORD00014","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00015","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00015","PRO00016","4");
INSERT INTO order_detail VALUES("ORD00016","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00016","PRO00002","1");
INSERT INTO order_detail VALUES("ORD00016","PRO00004","2");
INSERT INTO order_detail VALUES("ORD00017","PRO00005","1");
INSERT INTO order_detail VALUES("ORD00017","PRO00013","1");
INSERT INTO order_detail VALUES("ORD00018","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00018","PRO00016","1");
INSERT INTO order_detail VALUES("ORD00019","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00021","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00022","PRO00025","1");
INSERT INTO order_detail VALUES("ORD00023","PRO00025","2");
INSERT INTO order_detail VALUES("ORD00024","PRO00025","7");
INSERT INTO order_detail VALUES("ORD00025","PRO00001","4");
INSERT INTO order_detail VALUES("ORD00026","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00026","PRO00016","1");
INSERT INTO order_detail VALUES("ORD00026","PRO00029","13");
INSERT INTO order_detail VALUES("ORD00027","PRO00001","2");
INSERT INTO order_detail VALUES("ORD00028","PRO00014","1");
INSERT INTO order_detail VALUES("ORD00029","PRO00014","1");
INSERT INTO order_detail VALUES("ORD00031","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00032","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00033","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00034","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00035","PRO00001","4");
INSERT INTO order_detail VALUES("ORD00036","PRO00014","15");
INSERT INTO order_detail VALUES("ORD00037","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00037","PRO00016","2");
INSERT INTO order_detail VALUES("ORD00037","PRO00025","7");
INSERT INTO order_detail VALUES("ORD00037","PRO00029","1");
INSERT INTO order_detail VALUES("ORD00038","PRO00005","5");
INSERT INTO order_detail VALUES("ORD00038","PRO00013","5");
INSERT INTO order_detail VALUES("ORD00038","PRO00014","2");
INSERT INTO order_detail VALUES("ORD00039","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00041","PRO00016","1");
INSERT INTO order_detail VALUES("ORD00041","PRO00025","1");
INSERT INTO order_detail VALUES("ORD00041","PRO00029","1");
INSERT INTO order_detail VALUES("ORD00042","PRO00025","1");
INSERT INTO order_detail VALUES("ORD00043","PRO00013","1");
INSERT INTO order_detail VALUES("ORD00043","PRO00014","1");
INSERT INTO order_detail VALUES("ORD00043","PRO00020","1");
INSERT INTO order_detail VALUES("ORD00044","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00044","PRO00006","1");
INSERT INTO order_detail VALUES("ORD020","PRO00001","1");
INSERT INTO order_detail VALUES("ORD030","PRO00007","1");
INSERT INTO order_detail VALUES("ORD030","PRO00016","1");
INSERT INTO order_detail VALUES("ORD030","PRO00025","3");
INSERT INTO order_detail VALUES("ORD030","PRO00029","1");
INSERT INTO order_detail VALUES("ORD040","PRO00005","1");
INSERT INTO order_detail VALUES("ORD040","PRO00013","1");


DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
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
  `date_expiration` date NOT NULL COMMENT 'ngày hết hạn',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO products VALUES("PRO00001","Sơ mi nam - nâu","12","100000","0","[\"public\\/product_images\\/motgia53770e71c4ad4.jpg\",\"public\\/product_images\\/motgia53770e71c4c2b.jpg\",\"public\\/product_images\\/motgia53770e71c4d33.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>sdfdf</p>","<p>sdfsdf</p>","<p>sdfsdf</p>","2014-05-17 15:23:29","UID00003","0000-00-00","1");
INSERT INTO products VALUES("PRO00002","Áo thun màu vàng nhạt","3","100000","0","[\"public\\/product_images\\/motgia53280fe0e1e00.png\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. us, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","UID00003","2014-04-02","1");
INSERT INTO products VALUES("PRO00003","Quần Jeans nam","3","100000","100","[\"public\\/product_images\\/motgia53280f85369b2.jpg\",\"public\\/product_images\\/motgia5315f9af7e73a.jpg\",\"public\\/product_images\\/motgia5315f9af7eb66.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","","","","0000-00-00 00:00:00","UID00004","2014-04-02","0");
INSERT INTO products VALUES("PRO00004","Áo ba lỗ nam - xanh","3","100000","7","[\"public\\/product_images\\/motgia53281007a3ecc.JPG\",\"public\\/product_images\\/motgia53167d93e2722.jpg\",null]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","","","","0000-00-00 00:00:00","UID00003","2014-04-03","2");
INSERT INTO products VALUES("PRO00005","Sơ mi trắng nam","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00002","2014-04-21","1");
INSERT INTO products VALUES("PRO00006","iPhone 5s - white","3","100000","4","[\"public\\/product_images\\/motgia532811609eddc.jpg\",\"public\\/product_images\\/motgia532811609efa6.jpg\",\"public\\/product_images\\/motgia532811609f0e3.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","UID00003","2014-04-24","0");
INSERT INTO products VALUES("PRO00007","Váy Hồng đáng yêu","100","100000","4","[\"public\\/product_images\\/motgia5328137f8d202.jpg\",\"public\\/product_images\\/motgia5328137f8d3a1.jpg\",\"public\\/product_images\\/motgia5328137f8d624.jpg\"]","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","0000-00-00 00:00:00","UID00001","2014-04-25","0");
INSERT INTO products VALUES("PRO00008","Máy tính bảng Samsung","12","100000","10","[\"public\\/product_images\\/motgia532813c6737fd.jpg\",\"public\\/product_images\\/motgia532813c673993.jpg\",\"public\\/product_images\\/motgia532813c673ab2.jpg\"]","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","0000-00-00 00:00:00","UID00003","2014-04-17","1");
INSERT INTO products VALUES("PRO00009","Áo thun TEES","3","100000","0","[\"public\\/product_images\\/motgia538b7f8e31f42.png\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","UID00003","2014-04-02","1");
INSERT INTO products VALUES("PRO00010","Án Pull 100% cotton","3","100000","0","[\"public\\/product_images\\/motgia538b7e50c8bd5.jpg\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","UID00003","2014-04-02","1");
INSERT INTO products VALUES("PRO00011","Pull Nam","3","100000","6","[\"public\\/product_images\\/motgia538b7f6174762.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00004","2014-04-21","0");
INSERT INTO products VALUES("PRO00012","Máy ảnh sony","3","100000","6","[\"public\\/product_images\\/MAY-ANH-SONY-DSC-W730-6.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00013","Sp13","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00002","2014-04-21","1");
INSERT INTO products VALUES("PRO00014","Sp14","3","100000","6","[\"public\\/product_images\\/aothun.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00002","2014-04-21","1");
INSERT INTO products VALUES("PRO00015","Sp15","3","100000","6","[\"public\\/product_images\\/samsung.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00016","Sp16","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00001","2014-04-21","0");
INSERT INTO products VALUES("PRO00017","Sp17","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","1");
INSERT INTO products VALUES("PRO00018","Sp18","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","1");
INSERT INTO products VALUES("PRO00019","Sp19","3","100000","6","[\"public\\/product_images\\/motgia538b7f6174762.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00020","Sp20","3","100000","6","[\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00002","2014-04-21","1");
INSERT INTO products VALUES("PRO00021","Sp21","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00022","Sp22","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00004","2014-04-21","0");
INSERT INTO products VALUES("PRO00023","Sp23","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00024","Sp24","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00004","2014-04-21","1");
INSERT INTO products VALUES("PRO00025","Sp25","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00001","2014-04-21","0");
INSERT INTO products VALUES("PRO00026","Sp26","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","UID00003","2014-04-21","0");
INSERT INTO products VALUES("PRO00038","Smartosc","222","3","0","[\"public\\/product_images\\/img0538f7639f2017.jpg\",\"public\\/product_images\\/img1538f763a013ab.jpg\",\"public\\/product_images\\/img2538f763a02a77.jpg\"]","fvcvbc","fvbcvbc","gcvbcv","bcvbcvb","2014-06-04 12:05:42","UID00001","0000-00-00","1");


DROP TABLE IF EXISTS seller_info;

CREATE TABLE `seller_info` (
  `id` int(5) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS tbl_categories;

CREATE TABLE `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

INSERT INTO tbl_categories VALUES("1","Featured Phones","0","1");
INSERT INTO tbl_categories VALUES("2","sales","1","4");
INSERT INTO tbl_categories VALUES("3","Smart Phones","0","10");
INSERT INTO tbl_categories VALUES("4","Main Stream","3","8");
INSERT INTO tbl_categories VALUES("55","Android","4","1");
INSERT INTO tbl_categories VALUES("6","iOS","4","2");
INSERT INTO tbl_categories VALUES("7","Others","4","3");
INSERT INTO tbl_categories VALUES("8","Luxury","3","6");
INSERT INTO tbl_categories VALUES("10","Accessories","0","9");
INSERT INTO tbl_categories VALUES("51","Sales","3","7");
INSERT INTO tbl_categories VALUES("57","Month 4","51","1");
INSERT INTO tbl_categories VALUES("58","Month 5","51","2");
INSERT INTO tbl_categories VALUES("59","Pin","10","0");
INSERT INTO tbl_categories VALUES("60","Skin","10","0");
INSERT INTO tbl_categories VALUES("61","Month 4","2","0");
INSERT INTO tbl_categories VALUES("62","Month 5","2","0");
INSERT INTO tbl_categories VALUES("63","Top Brand","1","0");
INSERT INTO tbl_categories VALUES("64","Apple","63","0");
INSERT INTO tbl_categories VALUES("65","Samsung","63","0");
INSERT INTO tbl_categories VALUES("66","Blackberry","63","0");
INSERT INTO tbl_categories VALUES("67","Brand","3","0");
INSERT INTO tbl_categories VALUES("68","Month 3","51","0");
INSERT INTO tbl_categories VALUES("69","Vertu","8","0");
INSERT INTO tbl_categories VALUES("70","Mobiado","8","0");
INSERT INTO tbl_categories VALUES("71","Lamboghili","8","0");
INSERT INTO tbl_categories VALUES("72","Apple","67","0");
INSERT INTO tbl_categories VALUES("73","Blackberry","67","0");
INSERT INTO tbl_categories VALUES("74","Motorola","67","0");
INSERT INTO tbl_categories VALUES("75","Apple","60","0");
INSERT INTO tbl_categories VALUES("76","Blackberry","60","0");
INSERT INTO tbl_categories VALUES("77","iOS xxx","6","2");
INSERT INTO tbl_categories VALUES("78","iOS yyy","6","1");
INSERT INTO tbl_categories VALUES("79","iOS zzz","6","0");


DROP TABLE IF EXISTS tbl_category_product;

CREATE TABLE `tbl_category_product` (
  `category_productID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsID` varchar(15) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`category_productID`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

INSERT INTO tbl_category_product VALUES("79","PRO00036","3");
INSERT INTO tbl_category_product VALUES("80","PRO00036","4");
INSERT INTO tbl_category_product VALUES("93","PRO00038 ","75");
INSERT INTO tbl_category_product VALUES("94","PRO00038 ","76");
INSERT INTO tbl_category_product VALUES("95","PRO00038 ","69");
INSERT INTO tbl_category_product VALUES("96","PRO00038 ","68");
INSERT INTO tbl_category_product VALUES("97","PRO00038 ","59");


DROP TABLE IF EXISTS tbl_order;

CREATE TABLE `tbl_order` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sellerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buyerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO tbl_order VALUES("ORD00001","UID00003","UID00001","2014-05-07 16:14:06"," ","0","2");
INSERT INTO tbl_order VALUES("ORD00002","UID00003","UID00002","2014-05-07 16:15:40"," ","0","0");
INSERT INTO tbl_order VALUES("ORD00003","UID00003","UID00004","2014-05-07 23:29:22"," Chuyển vào chủ nhật tuần tới","0","0");
INSERT INTO tbl_order VALUES("ORD00004","UID00003","UID00001","2014-05-07 23:31:46"," ","0","2");
INSERT INTO tbl_order VALUES("ORD00005","UID00002","UID00003","2014-05-09 06:41:51"," ","0","1");
INSERT INTO tbl_order VALUES("ORD00006","UID00003","UID00001","2014-05-09 06:42:37"," ","0","2");
INSERT INTO tbl_order VALUES("ORD00007","UID00003","UID00004","2014-05-11 18:26:57"," ","0","2");
INSERT INTO tbl_order VALUES("ORD00008","UID00004","UID00003","2014-05-12 16:26:06"," ","0","1");
INSERT INTO tbl_order VALUES("ORD00009","UID00003","UID00001","2014-05-12 16:28:41","lam gi thi lam","0","0");
INSERT INTO tbl_order VALUES("ORD00011","UID00001","UID00003","2014-05-17 10:44:03"," ","0","1");
INSERT INTO tbl_order VALUES("ORD00012","UID00001","UID00003","2014-05-21 17:19:50"," ","0","1");
INSERT INTO tbl_order VALUES("ORD00013","UID00001","UID00003","2014-05-21 19:30:48"," ","0","1");
INSERT INTO tbl_order VALUES("ORD00014","UID00003","UID00003","2014-05-24 17:00:39"," ","0","2");
INSERT INTO tbl_order VALUES("ORD00015","UID00001","UID00004","2014-05-28 22:56:21","chuyen vao chu nha cho tui","0","1");
INSERT INTO tbl_order VALUES("ORD00016","UID00003","UID00003","2014-05-29 01:40:20","","1","0");
INSERT INTO tbl_order VALUES("ORD00017","UID00002","UID00003","2014-05-29 01:41:31","chuyen ngay nha","1","1");
INSERT INTO tbl_order VALUES("ORD00018","UID00001","GUEST013","2014-05-29 01:46:24","","1","1");
INSERT INTO tbl_order VALUES("ORD00019","UID00003","GUEST014","2014-05-29 01:56:05","chuyen den binh thuan cho tao","1","1");
INSERT INTO tbl_order VALUES("ORD00021","UID00003","UID00003","2014-05-30 01:36:40","","0","1");
INSERT INTO tbl_order VALUES("ORD00022","UID00001","UID00003","2014-05-30 02:02:57","","1","1");
INSERT INTO tbl_order VALUES("ORD00023","UID00001","UID00003","2014-05-30 02:04:13","","1","1");
INSERT INTO tbl_order VALUES("ORD00024","UID00001","UID00003","2014-05-30 02:15:13","","1","1");
INSERT INTO tbl_order VALUES("ORD00025","UID00003","UID00003","2014-05-30 02:23:49","","1","1");
INSERT INTO tbl_order VALUES("ORD00026","UID00001","UID00003","2014-05-30 03:40:12","","1","1");
INSERT INTO tbl_order VALUES("ORD00027","UID00003","UID00003","2014-05-30 03:47:32","","0","1");
INSERT INTO tbl_order VALUES("ORD00028","UID00002","UID00003","2014-05-30 03:47:39","","1","1");
INSERT INTO tbl_order VALUES("ORD00029","UID00002","UID00003","2014-05-30 03:49:05","","1","1");
INSERT INTO tbl_order VALUES("ORD00031","UID00001","UID00003","2014-05-30 03:57:27","","1","1");
INSERT INTO tbl_order VALUES("ORD00032","UID00001","UID00003","2014-05-30 04:02:20","","0","1");
INSERT INTO tbl_order VALUES("ORD00033","UID00003","UID00003","2014-05-30 05:47:00","","1","1");
INSERT INTO tbl_order VALUES("ORD00034","UID00003","UID00003","2014-05-30 05:48:34","","1","1");
INSERT INTO tbl_order VALUES("ORD00035","UID00003","UID00003","2014-05-30 05:48:48","","1","1");
INSERT INTO tbl_order VALUES("ORD00036","UID00002","UID00003","2014-05-30 06:35:39","","1","1");
INSERT INTO tbl_order VALUES("ORD00037","UID00001","UID00003","2014-05-30 07:09:33","","1","1");
INSERT INTO tbl_order VALUES("ORD00038","UID00002","UID00003","2014-05-30 07:11:15","","1","1");
INSERT INTO tbl_order VALUES("ORD00039","UID00001","UID00003","2014-05-31 01:03:47","","1","1");
INSERT INTO tbl_order VALUES("ORD00041","UID00001","UID00003","2014-05-31 11:40:24","trua ","0","1");
INSERT INTO tbl_order VALUES("ORD00042","UID00001","UID00003","2014-05-31 13:22:43","","1","1");
INSERT INTO tbl_order VALUES("ORD00043","UID00002","UID00003","2014-05-31 13:36:59","","1","1");
INSERT INTO tbl_order VALUES("ORD00044","UID00003","UID00003","2014-06-02 04:28:26","","0","1");
INSERT INTO tbl_order VALUES("ORD010","UID00001","UID00003","2014-05-13 11:12:50"," ","0","1");
INSERT INTO tbl_order VALUES("ORD020","UID00003","GUEST015","2014-05-29 02:01:11","","1","0");
INSERT INTO tbl_order VALUES("ORD030","UID00001","UID00003","2014-05-30 03:51:46","chuyen trong dem","1","1");
INSERT INTO tbl_order VALUES("ORD040","UID00002","UID00003","2014-05-31 01:51:30","12: 51 31/5","1","1");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
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

INSERT INTO user VALUES("UID00001","Trịnh","Thành Đô","thanhdo.trinh@yahoo.com","dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==","0000-00-00","0","0","Bình Định","841234567867","trên trời","1","2014-03-16 04:34:20","3");
INSERT INTO user VALUES("UID00002","Hải","Lê","haile.fithou@yahoo.com","UV9qkwFX1usTeuQkjCrLffhyZHFcRn95QIfGBZ/pn4aGouNWZaVkk+CjRj3L1P25OCM4iHjuwWba9JVgOgfotg==","0000-00-00","0","0","","0123456789","Linh Đàm","1","2014-03-19 15:01:31","0");
INSERT INTO user VALUES("UID00003","Nguyễn","Tân","ductan_nguyen92@yahoo.com","dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==","1992-08-26","0","0","Thái Bình","01689338965","Trương Định Hà Nội","1","2014-03-20 00:34:01","2");
INSERT INTO user VALUES("UID00004","Tân","Ông xã","tantanb2@gmail.com","G8YBj0raFMrraVm2AtQHkR4m99lCVfkD80G4gzKemMchraHgQNbakwFj37aDUr6wdC/lEdTC7601TLBKjuCTXQ==","1992-08-26","0","0","Thái Nguyên","12345467890","Hoàng Mai - Hà Nội","0","2014-05-07 00:31:32","3");
INSERT INTO user VALUES("UID00005","Tân","Tân","ductan_nguyen28@yahoo.com","Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==","1992-08-26","0","0","Thái Nguyên","01689338965","Hoàng Mai - Hà Nội","1","2014-05-29 22:03:23","0");
INSERT INTO user VALUES("UID00006","Đức","Tân","ductan_nguyen268@yahoo.com","S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==","1992-02-01","0","0","Bình Thuận","01689338965","Hoàng Mai - Hà Nội","1","2014-05-30 15:19:50","1");
INSERT INTO user VALUES("UID00009","trinh","sdfsdf","thanhdo.trinh@gmail.com","jRABb3xRkJ0bgt6Dj6ZD/YRnuCofWi0hCABt8luu+66s+hsh8ZwZCd6UKJSVyyLpIB8gxaxHGJC8+K8aImIjCg==","2014-06-27","1","0","Hà Nội","09877","định công - hoàng mai - hà nội","0","2014-06-01 12:00:27","1");
INSERT INTO user VALUES("UID00011","trinh","do","3s@sdfsdf.sdfsfd","Ad6AoxFxGj/JzK2szXMORkyPuKnnNBpuyGZ+JYv26V9lR0t+mca/dtdscZFGDWmTENcfhDieJsntDDEUCVEQqg==","2014-06-29","1","0","Bình Phước","00997983423","định công - hoàng mai - hà nội","0","2014-06-01 12:04:23","1");
INSERT INTO user VALUES("UID00012","trinh","sdfsdf","thanhdo.trinh@gmail.com","3VO+TMRrhJTc9IsRSPAnpLUJVWpI1QF4qdP54PNZwLTm1x0nduDHMR8xqDAdNm1Z3BJCxaBguo66eKhI9NJAUw==","2014-06-28","1","0","Bình Thuận","0978787687","định công - hoàng mai - hà nội","0","2014-06-01 12:05:47","1");
INSERT INTO user VALUES("UID00013","trinh","sdfsdf","3s@sdfsdf.sdfsfd","LuuS5ifXaZx3M7bW3x5vlLFmLhKuvoWIHsbaJr70Vh0v+CJZtFvTLOz0jqPUXOYyS1OL4ZNLBJByIFySW8xK9A==","2014-06-06","1","0","Hải Phòng","00997983423","45345345345","0","2014-06-01 12:08:58","3");


