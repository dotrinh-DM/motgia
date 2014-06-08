
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2014 at 09:43 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5864550_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_status`
--

CREATE TABLE `bill_status` (
  `statusID` int(10) NOT NULL AUTO_INCREMENT,
  `action_date` datetime NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bill_status`
--

INSERT INTO `bill_status` VALUES(3, '2014-06-06 17:06:33', 'UID00003');
INSERT INTO `bill_status` VALUES(4, '2014-06-06 17:12:04', 'UID00003');
INSERT INTO `bill_status` VALUES(6, '2014-06-06 16:21:42', 'UID00003');
INSERT INTO `bill_status` VALUES(7, '2014-06-06 16:22:17', 'UID00003');
INSERT INTO `bill_status` VALUES(8, '2014-06-06 18:05:42', 'UID00003');
INSERT INTO `bill_status` VALUES(9, '2014-06-06 17:11:34', 'UID00003');
INSERT INTO `bill_status` VALUES(10, '2014-06-07 15:25:07', 'UID00004');
INSERT INTO `bill_status` VALUES(11, '2014-06-07 15:35:50', 'UID00004');
INSERT INTO `bill_status` VALUES(12, '2014-06-07 15:37:20', 'UID00004');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=633 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` VALUES(629, 1402170896, '::1', 'jscFp7sn');
INSERT INTO `captcha` VALUES(630, 1402170965, '::1', 'sryZxggE');
INSERT INTO `captcha` VALUES(631, 1402171019, '::1', 'zEBrnD57');
INSERT INTO `captcha` VALUES(632, 1402184017, '1.55.57.236', 'AJqwZqa6');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES(1, 'Nam');
INSERT INTO `categories` VALUES(2, 'Nữ');
INSERT INTO `categories` VALUES(3, 'Trẻ em');
INSERT INTO `categories` VALUES(4, 'quần áo');
INSERT INTO `categories` VALUES(5, 'giày dép');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` VALUES('d184e0ab2aeb93a21c0289a24cd6d92d', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188407, '');
INSERT INTO `ci_sessions` VALUES('f43dff0b5830f1cf1b42c8ebb61ced10', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188594, '');
INSERT INTO `ci_sessions` VALUES('4c90b5c9de9b582caa619f3bcca638fa', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188596, '');
INSERT INTO `ci_sessions` VALUES('446bce89f59e4db927d81df91c6bc4de', '1.55.57.236', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1402188002, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";a:4:{s:6:"userID";s:8:"UID00004";s:8:"fullname";s:13:"Tân Ông xã";s:5:"email";s:18:"tantanb2@gmail.com";s:9:"logged_in";b:1;}}');
INSERT INTO `ci_sessions` VALUES('afc3e297918179c43e80040489342de7', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184064, '');
INSERT INTO `ci_sessions` VALUES('2eaef0a62fd98084da7cf338af116029', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184084, '');
INSERT INTO `ci_sessions` VALUES('a06d09cc9b412fb4e01093d61aff6496', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184152, '');
INSERT INTO `ci_sessions` VALUES('b29b54a1ebe4632d4cc7fc202a243d22', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184154, '');
INSERT INTO `ci_sessions` VALUES('0a2fe437526257a577a4c1673f03db11', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184206, '');
INSERT INTO `ci_sessions` VALUES('6a9f5de120067adcad1c0b3578e8a53a', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184207, '');
INSERT INTO `ci_sessions` VALUES('2c197685ed6c11d7a12b7493a7464de4', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184209, '');
INSERT INTO `ci_sessions` VALUES('a20b1579f74484d408a5ac939bff490b', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402184210, '');
INSERT INTO `ci_sessions` VALUES('0d3edf4f2df2ebbe8b9f080d07b65d1c', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186334, '');
INSERT INTO `ci_sessions` VALUES('9123eb6d241b26326d643309206dcf8a', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186521, '');
INSERT INTO `ci_sessions` VALUES('09c313f7623d8da739645d11af997671', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186615, '');
INSERT INTO `ci_sessions` VALUES('cbbca3d6c24f7e0919675ad45312cd86', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186758, '');
INSERT INTO `ci_sessions` VALUES('a6152b65d335cdc9c5225be6c75de986', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186847, '');
INSERT INTO `ci_sessions` VALUES('9429c18afd87121113f85954d492a422', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186857, '');
INSERT INTO `ci_sessions` VALUES('190798c39f5f11b8f39e4493c06cd365', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186915, '');
INSERT INTO `ci_sessions` VALUES('6bbef33cffc3d1574e5b22eacaa7ad21', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186940, '');
INSERT INTO `ci_sessions` VALUES('a25e28f40beb4517da857240e12ff450', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186942, '');
INSERT INTO `ci_sessions` VALUES('39055797d39f70418ae374f13cfc35a2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186948, '');
INSERT INTO `ci_sessions` VALUES('d97ee8f51525f8a8c4b44d531ef0dac8', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186951, '');
INSERT INTO `ci_sessions` VALUES('dbf3889c716a36dc7eee1c9e7e384bdd', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402186960, '');
INSERT INTO `ci_sessions` VALUES('728fe5065a48e713602b8076aefcc7e8', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187147, '');
INSERT INTO `ci_sessions` VALUES('c9a525b51d8eeb2fca1f52c5c7eb6b6f', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187148, '');
INSERT INTO `ci_sessions` VALUES('4f10a59ef3709744bf469c7eb9354f73', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187167, '');
INSERT INTO `ci_sessions` VALUES('adce9c68dbb610b355fa3bcbaa4b306c', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187168, '');
INSERT INTO `ci_sessions` VALUES('53967c926cd9711f3e88521387e6244c', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187170, '');
INSERT INTO `ci_sessions` VALUES('2d267132d790b5c0c3756857450b8b22', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187268, '');
INSERT INTO `ci_sessions` VALUES('55e93eea33e3838ad1313dafc1ecb90a', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187270, '');
INSERT INTO `ci_sessions` VALUES('1bb04d4de28d8ed82b7f84384e964ff5', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187305, '');
INSERT INTO `ci_sessions` VALUES('83694bea4e27300e70be1567ec1914f1', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187307, '');
INSERT INTO `ci_sessions` VALUES('a4795fdd6f1c6f51ca365de71d2e6f98', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187320, '');
INSERT INTO `ci_sessions` VALUES('503c982f80c6ff2e67d0f06e84a10691', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187931, '');
INSERT INTO `ci_sessions` VALUES('295846d89107bbfeacae22eb36b3268b', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187934, '');
INSERT INTO `ci_sessions` VALUES('36a9f7e8250b5c24aec9970d2408b241', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187936, '');
INSERT INTO `ci_sessions` VALUES('c7002e3c0284bdbfd3045f7100427538', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187973, '');
INSERT INTO `ci_sessions` VALUES('922f36f7d84296dbd3d63c17aaaff7a2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187975, '');
INSERT INTO `ci_sessions` VALUES('147461027ab014b76e97afe8b9786bac', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187978, '');
INSERT INTO `ci_sessions` VALUES('5c262dbc45a16202c9666c270e2e7f9b', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187979, '');
INSERT INTO `ci_sessions` VALUES('1d66a2b8cfbd5906e39d89feac0b6c23', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187980, '');
INSERT INTO `ci_sessions` VALUES('29722ca95a24f8d90d6232dc07c1eb36', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402187981, '');
INSERT INTO `ci_sessions` VALUES('ca2458b129c4ff241be06afd18cca49d', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188012, '');
INSERT INTO `ci_sessions` VALUES('00f2372412af879323c5a64d2910fe64', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188026, '');
INSERT INTO `ci_sessions` VALUES('8f00ecb19a430f6481c755791d34b507', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188033, '');
INSERT INTO `ci_sessions` VALUES('d31a0fc28922126cc57724f5940decdb', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188036, '');
INSERT INTO `ci_sessions` VALUES('909aa99472d0df541f04dc2c787d6006', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188038, '');
INSERT INTO `ci_sessions` VALUES('df34c4fa59fbc979529d1117995d3527', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188256, '');
INSERT INTO `ci_sessions` VALUES('ca97eef4b4da246107c7b65778b994c7', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188259, '');
INSERT INTO `ci_sessions` VALUES('6d5ead445377be42be1c4769dc5bf2d1', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188405, '');
INSERT INTO `ci_sessions` VALUES('960b09ef8a152a7a1c4284c20995e68a', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188625, '');
INSERT INTO `ci_sessions` VALUES('4966a30d6b3909f1b9ad53cdee1674f2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188626, '');
INSERT INTO `ci_sessions` VALUES('eeb155fbf5bc382a5dcb5bfe9df2445e', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188722, '');
INSERT INTO `ci_sessions` VALUES('7194f27c73208841fb61e7c730dba949', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188725, '');
INSERT INTO `ci_sessions` VALUES('25a08e7d7af30413ec6a3f1311368625', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188790, '');
INSERT INTO `ci_sessions` VALUES('a2130ae78c686601c7aeffa2bbea1e35', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188792, '');
INSERT INTO `ci_sessions` VALUES('64b12dce83f468c32de5dcfd905e43d0', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188829, '');
INSERT INTO `ci_sessions` VALUES('d98ff2c978d773c9fe508ca4285a8f0d', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188907, '');
INSERT INTO `ci_sessions` VALUES('3fbe23b9ceff78eaf2e60457fb2b1a97', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188909, '');
INSERT INTO `ci_sessions` VALUES('dd84cad8c17092b68ac0e26b3a1ce11f', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402188939, '');
INSERT INTO `ci_sessions` VALUES('4eeeda22938549fcbd6b6d63fcdc028d', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189020, '');
INSERT INTO `ci_sessions` VALUES('60654f10fc21572ee2524ea82906d676', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189050, '');
INSERT INTO `ci_sessions` VALUES('a8f00c7e4c16342207fac49b2ef75c79', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189090, '');
INSERT INTO `ci_sessions` VALUES('a2dbc1b59bb1727b0574adef8f5269bf', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189108, '');
INSERT INTO `ci_sessions` VALUES('de4d92bbc60343a48b2792a7d4df0ff2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189223, '');
INSERT INTO `ci_sessions` VALUES('bfc6fa1541f6d736b266b440e5cf29a4', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189239, '');
INSERT INTO `ci_sessions` VALUES('83a9aacb52c11e577e5de60013a7ed59', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189363, '');
INSERT INTO `ci_sessions` VALUES('7f2339f21ea2593b69fe0c9d396b0877', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189490, '');
INSERT INTO `ci_sessions` VALUES('a8e47b0b8c7e017cd17968b329965215', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189624, '');
INSERT INTO `ci_sessions` VALUES('6ede9ab7e2d7a4f68af2677e78cba913', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189658, '');
INSERT INTO `ci_sessions` VALUES('eaceb9988bb413c6de2f1ea6bf4309b0', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189663, '');
INSERT INTO `ci_sessions` VALUES('a55f8a09770dbbe6bebb90999fc9fefc', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189681, '');
INSERT INTO `ci_sessions` VALUES('18bc5a62410015b0acc586b92916638f', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189686, '');
INSERT INTO `ci_sessions` VALUES('d2d947f274506a4a53b4804082c6c048', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189696, '');
INSERT INTO `ci_sessions` VALUES('ed11144813e37253d248dac68dcfd263', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189698, '');
INSERT INTO `ci_sessions` VALUES('9258cb9a17165a02966473b215e379e3', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189711, '');
INSERT INTO `ci_sessions` VALUES('113d307c2f9b714dbd86fe65a6308ee0', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189720, '');
INSERT INTO `ci_sessions` VALUES('c7cc2b958bcc638ab83cee6e70d0d517', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189815, '');
INSERT INTO `ci_sessions` VALUES('007dc609c8f4273324113d07154906c2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189817, '');
INSERT INTO `ci_sessions` VALUES('5dedbd4d5fb6de4a64f509bccc5efc6b', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189819, '');
INSERT INTO `ci_sessions` VALUES('c856477ab44230913568a44270b0b1a4', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189820, '');
INSERT INTO `ci_sessions` VALUES('ebe941c3c1111cd9673c9bb2d1a84fb8', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189822, '');
INSERT INTO `ci_sessions` VALUES('774b28a59ba2b157d206758f086aa900', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189823, '');
INSERT INTO `ci_sessions` VALUES('de8b2f867b219fa42200cf3f9cead4dd', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189838, '');
INSERT INTO `ci_sessions` VALUES('b81f5c4fab4730bf657948c5a678dae2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189992, '');
INSERT INTO `ci_sessions` VALUES('62fded3331dbea37cd4d016b7b3008bd', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189994, '');
INSERT INTO `ci_sessions` VALUES('5b74c0a9b04e1e83fdc11a14a79ffdfc', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189998, '');
INSERT INTO `ci_sessions` VALUES('90d2a23462253ebf326a0b4ffedfe9b7', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402189999, '');
INSERT INTO `ci_sessions` VALUES('17df14e426e3b45f057771cba91be0e3', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190000, '');
INSERT INTO `ci_sessions` VALUES('33319290132448476d0218236582e4ed', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190013, '');
INSERT INTO `ci_sessions` VALUES('8b5787df473db43b06539597dec02f4f', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190014, '');
INSERT INTO `ci_sessions` VALUES('dd464238c7b07e87f7c279e884272b6f', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190017, '');
INSERT INTO `ci_sessions` VALUES('f1980b3a476b2ec605666b6465d72fa3', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190086, '');
INSERT INTO `ci_sessions` VALUES('6d092def2ede86716c8ec6225a4c65cc', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190095, '');
INSERT INTO `ci_sessions` VALUES('2fc3aa60a74ff7ffa5fdaa1f59b7f603', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190113, '');
INSERT INTO `ci_sessions` VALUES('b03f23df716a5160762b829c3dd7daed', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190140, '');
INSERT INTO `ci_sessions` VALUES('482a2de2836dcbfc3608e70d494f2ac9', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190181, '');
INSERT INTO `ci_sessions` VALUES('6307ca2e7c7fe324a47c4588c0993cca', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190200, '');
INSERT INTO `ci_sessions` VALUES('15a35871a454c4cc4ad15ab7f68dc106', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190228, '');
INSERT INTO `ci_sessions` VALUES('2475b2ed694f6de9fa352216840697d1', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190261, '');
INSERT INTO `ci_sessions` VALUES('1600b2cbd5fd6eb76c91b4297f9fa624', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190262, '');
INSERT INTO `ci_sessions` VALUES('f8d31198529029368986cebfc5e25be8', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190264, '');
INSERT INTO `ci_sessions` VALUES('d7ff7cd9955367eb73d8cf909f5b0306', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190266, '');
INSERT INTO `ci_sessions` VALUES('a9a2ea9e3cff9cffc873536f4539e70b', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190283, '');
INSERT INTO `ci_sessions` VALUES('e597da4251f65d6b83dd05b0e83f1221', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190371, '');
INSERT INTO `ci_sessions` VALUES('926b7a182924075c0416c9c2a5340f3a', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190430, '');
INSERT INTO `ci_sessions` VALUES('1686b309143d861d8436360bea81dedd', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190431, '');
INSERT INTO `ci_sessions` VALUES('e1f9d1bdb445ab744bb57bbe76558bd2', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190436, '');
INSERT INTO `ci_sessions` VALUES('d3710e4e9ed2ef8691b0247ca62ef2b5', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190439, '');
INSERT INTO `ci_sessions` VALUES('2c7fd9872ffe6f6d65700734e0abdc94', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190465, '');
INSERT INTO `ci_sessions` VALUES('93866fcc9365820f8eb053a77f15f682', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190545, '');
INSERT INTO `ci_sessions` VALUES('9f87d6ef8b569b16e663a6416201f2e7', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190547, '');
INSERT INTO `ci_sessions` VALUES('471b513787a4b8cea4d553354d2de54c', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190584, '');
INSERT INTO `ci_sessions` VALUES('24cf9cc3eb540abf223a7af04f83f5af', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190646, '');
INSERT INTO `ci_sessions` VALUES('cea9fec93a02599fedda00b6bebcd461', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402190674, '');
INSERT INTO `ci_sessions` VALUES('009c56683463c33b65a01bd6433c4e72', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402191019, '');
INSERT INTO `ci_sessions` VALUES('69ac7b37f5ca576f30e3775289296cc6', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402191074, '');
INSERT INTO `ci_sessions` VALUES('d5eb366ced6670833a1ad0c7262ede74', '210.211.127.171', 'Jakarta Commons-HttpClient/3.1', 1402191099, '');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guestID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`guestID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` VALUES('GUEST001', '', '', 0, '', '', '2014-05-28 13:46:07');
INSERT INTO `guest` VALUES('GUEST002', '', '', 0, '', '', '2014-05-28 13:46:14');
INSERT INTO `guest` VALUES('GUEST003', '', '', 0, '', '', '2014-05-28 13:46:17');
INSERT INTO `guest` VALUES('GUEST004', '', '', 0, '', '', '2014-05-28 13:46:34');
INSERT INTO `guest` VALUES('GUEST005', 'sdfsdf', 'sfsdf', 0, 'Bà Rịa - Vũng Tàu', 'sdfsdf', '2014-05-28 13:50:51');
INSERT INTO `guest` VALUES('GUEST006', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', 'truong dinh', '2014-05-28 13:51:42');
INSERT INTO `guest` VALUES('GUEST007', 'Nguyễn Tân', 'sfdsdf', 0, 'Cần Thơ', 'sdfsdf', '2014-05-28 17:06:54');
INSERT INTO `guest` VALUES('GUEST008', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', '123', '2014-05-28 21:25:56');
INSERT INTO `guest` VALUES('GUEST009', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đà Nẵng', 'truong dinh', '2014-05-28 23:10:32');
INSERT INTO `guest` VALUES('GUEST010', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Thái Bình', 'tien hai', '2014-05-28 23:49:32');
INSERT INTO `guest` VALUES('GUEST011', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đắk Lắk', 'buon ho', '2014-05-29 00:56:49');
INSERT INTO `guest` VALUES('GUEST012', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bến Tre', '123', '2014-05-29 01:18:45');
INSERT INTO `guest` VALUES('GUEST013', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '123', '2014-05-29 01:41:58');
INSERT INTO `guest` VALUES('GUEST014', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-29 01:55:36');
INSERT INTO `guest` VALUES('GUEST015', 'Tân Tân Tân', '234dfsdf@sdfsdf.sdf', 1689338965, 'Vĩnh Long', '123456', '2014-05-29 02:01:01');
INSERT INTO `guest` VALUES('GUEST016', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '213', '2014-05-29 05:05:45');
INSERT INTO `guest` VALUES('GUEST017', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-30 05:52:23');
INSERT INTO `guest` VALUES('GUEST018', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', '1234', '2014-05-30 06:05:27');
INSERT INTO `guest` VALUES('GUEST019', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', 'sdfsdf', '2014-05-30 06:29:11');
INSERT INTO `guest` VALUES('GUEST020', 'sdfsdf', '234dfsdf@sdfsdf.sdf', 123123, 'TP HCM', 'sdfsdf', '2014-05-30 06:30:56');
INSERT INTO `guest` VALUES('GUEST021', 'sdfsdf', 'ductan_nguyen92@yahoo.com', 123123, 'Bình Dương', 'sdf', '2014-05-30 06:33:00');
INSERT INTO `guest` VALUES('GUEST022', 'Tantan', 'thanhdo.trinh@gmail.com', 978787687, 'TP HCM', 'ssdasdasd', '2014-06-01 04:57:20');
INSERT INTO `guest` VALUES('GUEST023', '123', '3s@sdfsdf.sdfsfd', 2312312, 'Cần Thơ', 'sdfsdf', '2014-06-01 05:00:11');
INSERT INTO `guest` VALUES('GUEST024', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 0, 'Đà Nẵng', 'sdf', '2014-06-06 03:13:35');
INSERT INTO `guest` VALUES('GUEST025', 'Tân Ông xã', 'sdf@sdfsdf.sdfsdf', 123123, 'Đà Nẵng', 'sdfsdf', '2014-06-06 03:15:56');
INSERT INTO `guest` VALUES('GUEST026', 'Nguyễn Tân', 'sfdsdf@sdfsdf.sdfsdfsdf', 1689338965, 'Cao Bằng', 'c', '2014-06-06 16:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` VALUES(0, 'chưa kích hoạt');
INSERT INTO `level` VALUES(1, 'thành viên');
INSERT INTO `level` VALUES(2, 'nhà cung cấp');
INSERT INTO `level` VALUES(3, 'quản trị viên');
INSERT INTO `level` VALUES(4, 'bị cấm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `receiverID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senderID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` VALUES('MSS00001', 'UID00003', 'UID00004', 'Xin chào', 'làm quen được không?', '2014-04-09 00:00:00', 1);
INSERT INTO `message` VALUES('MSS00002', 'UID00003', 'UID00002', 'Việc khẩn', 'nhậu không?', '2014-04-16 00:00:00', 1);
INSERT INTO `message` VALUES('MSS00004', 'UID00003', 'UID00003', 'Làm quen?', '<p>dfsdfsdfsdf</p>', '2014-04-18 17:15:37', 1);
INSERT INTO `message` VALUES('MSS00005', 'UID00002', 'UID00003', 'Reply: Việc khẩn', '<p>khong</p>', '2014-04-18 19:18:42', 0);
INSERT INTO `message` VALUES('MSS00006', 'UID00004', 'UID00003', 'Reply: Làm quen?', '<p>C&oacute; bạn trai rồi</p>', '2014-04-18 22:46:48', 1);
INSERT INTO `message` VALUES('MSS00007', 'UID00004', 'UID00003', 'Reply: Xin chào', '<p>sdfsdfhgjkl;kjgfdfs</p>', '2014-04-18 22:51:18', 1);
INSERT INTO `message` VALUES('MSS00008', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', '<p>chia tay de</p>', '2014-04-18 23:13:47', 1);
INSERT INTO `message` VALUES('MSS00009', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdddddddddddddddddddddddddddd', '<p>tantnanta</p>', '2014-04-20 15:42:09', 0);
INSERT INTO `message` VALUES('MSS00010', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:27', 1);
INSERT INTO `message` VALUES('MSS00011', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:32', 1);
INSERT INTO `message` VALUES('MSS00012', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '<p>fsdfsdfsdfsdfsdf</p>', '2014-05-17 01:52:38', 1);
INSERT INTO `message` VALUES('MSS00013', 'UID00002', 'UID00003', 'Reply: Việc khẩnfsdfsdf', 'sdfsdfsd', '2014-05-24 16:14:47', 0);
INSERT INTO `message` VALUES('MSS00014', 'UID00002', 'UID00003', 'Reply: Việc khẩnasdasdasdasd', 'asdasdasdasdasd', '2014-05-24 16:15:15', 0);
INSERT INTO `message` VALUES('MSS00015', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdfffffffffffffff', 'ffffffffffffffffffffffffffffffffff', '2014-05-24 16:16:01', 0);
INSERT INTO `message` VALUES('MSS00016', 'UID00002', 'ArrayArray', 'Reply: Việc khẩndfgdfgdfg', 'dfgdfg', '2014-05-24 16:18:07', 0);
INSERT INTO `message` VALUES('MSS00017', 'UID00003', 'UID00004', 'cin chao thu nghiem', 'chao ban minh la tan dang thu nghiem he thong', '2014-05-24 17:06:16', 1);
INSERT INTO `message` VALUES('MSS00018', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', 'sdfsdfsdf', '2014-05-27 16:58:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` VALUES('ORD00001', 'PRO00006', 1);
INSERT INTO `order_detail` VALUES('ORD00001', 'PRO00008', 1);
INSERT INTO `order_detail` VALUES('ORD00002', 'PRO00007', 1);
INSERT INTO `order_detail` VALUES('ORD00003', 'PRO00007', 2);
INSERT INTO `order_detail` VALUES('ORD00004', 'PRO00005', 1);
INSERT INTO `order_detail` VALUES('ORD00005', 'PRO00003', 1);
INSERT INTO `order_detail` VALUES('ORD00006', 'PRO00002', 2);
INSERT INTO `order_detail` VALUES('ORD00006', 'PRO00004', 1);
INSERT INTO `order_detail` VALUES('ORD00006', 'PRO00006', 3);
INSERT INTO `order_detail` VALUES('ORD00006', 'PRO00008', 1);
INSERT INTO `order_detail` VALUES('ORD00007', 'PRO00017', 2);
INSERT INTO `order_detail` VALUES('ORD00007', 'PRO00018', 1);
INSERT INTO `order_detail` VALUES('ORD00008', 'PRO00016', 1);
INSERT INTO `order_detail` VALUES('ORD00009', 'PRO00014', 1);
INSERT INTO `order_detail` VALUES('ORD00009', 'PRO00020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` VALUES('PRO00001', 'Sơ mi nam - nâu', 12, 100000, 0, '["public\\/product_images\\/motgia53770e71c4ad4.jpg","public\\/product_images\\/motgia53770e71c4c2b.jpg","public\\/product_images\\/motgia53770e71c4d33.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>sdfdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '2014-05-17 15:23:29', 'UID00003', '0000-00-00', 2);
INSERT INTO `products` VALUES('PRO00002', 'Áo thun màu vàng nhạt', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. us, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1);
INSERT INTO `products` VALUES('PRO00003', 'Quần Jeans nam', 3, 100000, 100, '["public\\/product_images\\/motgia53280f85369b2.jpg","public\\/product_images\\/motgia5315f9af7e73a.jpg","public\\/product_images\\/motgia5315f9af7eb66.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'UID00004', '2014-04-02', 1);
INSERT INTO `products` VALUES('PRO00004', 'Áo ba lỗ nam - xanh', 3, 100000, 7, '["public\\/product_images\\/motgia53281007a3ecc.JPG","public\\/product_images\\/motgia53167d93e2722.jpg",null]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'UID00003', '2014-04-03', 2);
INSERT INTO `products` VALUES('PRO00005', 'Sơ mi trắng nam', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00006', 'iPhone 5s - white', 3, 100000, 4, '["public\\/product_images\\/motgia532811609eddc.jpg","public\\/product_images\\/motgia532811609efa6.jpg","public\\/product_images\\/motgia532811609f0e3.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-24', 0);
INSERT INTO `products` VALUES('PRO00007', 'Váy Hồng đáng yêu', 100, 100000, 4, '["public\\/product_images\\/motgia5328137f8d202.jpg","public\\/product_images\\/motgia5328137f8d3a1.jpg","public\\/product_images\\/motgia5328137f8d624.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-25', 0);
INSERT INTO `products` VALUES('PRO00008', 'Máy tính bảng Samsung', 12, 100000, 10, '["public\\/product_images\\/motgia532813c6737fd.jpg","public\\/product_images\\/motgia532813c673993.jpg","public\\/product_images\\/motgia532813c673ab2.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-17', 1);
INSERT INTO `products` VALUES('PRO00009', 'Áo thun TEES', 3, 100000, 0, '["public\\/product_images\\/motgia538b7f8e31f42.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1);
INSERT INTO `products` VALUES('PRO00010', 'Án Pull 100% cotton', 3, 100000, 0, '["public\\/product_images\\/motgia538b7e50c8bd5.jpg","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1);
INSERT INTO `products` VALUES('PRO00011', 'Pull Nam', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00012', 'Máy ảnh sony', 3, 100000, 6, '["public\\/product_images\\/MAY-ANH-SONY-DSC-W730-6.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00013', 'Sp13', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00014', 'Sp14', 3, 100000, 6, '["public\\/product_images\\/aothun.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00015', 'Sp15', 3, 100000, 6, '["public\\/product_images\\/samsung.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00016', 'Sp16', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00017', 'Sp17', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00018', 'Sp18', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00019', 'Sp19', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00020', 'Sp20', 3, 100000, 6, '["public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00021', 'Sp21', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00022', 'Sp22', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00023', 'Sp23', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00024', 'Sp24', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 1);
INSERT INTO `products` VALUES('PRO00025', 'Sp25', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00026', 'Sp26', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0);
INSERT INTO `products` VALUES('PRO00038', 'Smartosc', 222, 3, 0, '["public\\/product_images\\/img0538f7639f2017.jpg","public\\/product_images\\/img1538f763a013ab.jpg","public\\/product_images\\/img2538f763a02a77.jpg"]', 'fvcvbc', 'fvbcvbc', 'gcvbcv', 'bcvbcvb', '2014-06-04 12:05:42', 'UID00001', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `id` int(5) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seller_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shopID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `create_date` date NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`shopID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` VALUES('SHO00001', 'Trách nhiệm hữu hạn mười một thành viên', 'Định Công', 'Hà Nội', 'motgia.tk', 123456789, '2014-06-08', 'UID00004');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` VALUES('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN');
INSERT INTO `sms` VALUES('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` VALUES(1, 'Featured Phones', 0, 1);
INSERT INTO `tbl_categories` VALUES(2, 'sales', 1, 4);
INSERT INTO `tbl_categories` VALUES(3, 'Smart Phones', 0, 10);
INSERT INTO `tbl_categories` VALUES(4, 'Main Stream', 3, 8);
INSERT INTO `tbl_categories` VALUES(55, 'Android', 4, 1);
INSERT INTO `tbl_categories` VALUES(6, 'iOS', 4, 2);
INSERT INTO `tbl_categories` VALUES(7, 'Others', 4, 3);
INSERT INTO `tbl_categories` VALUES(8, 'Luxury', 3, 6);
INSERT INTO `tbl_categories` VALUES(10, 'Accessories', 0, 9);
INSERT INTO `tbl_categories` VALUES(51, 'Sales', 3, 7);
INSERT INTO `tbl_categories` VALUES(57, 'Month 4', 51, 1);
INSERT INTO `tbl_categories` VALUES(58, 'Month 5', 51, 2);
INSERT INTO `tbl_categories` VALUES(59, 'Pin', 10, 0);
INSERT INTO `tbl_categories` VALUES(60, 'Skin', 10, 0);
INSERT INTO `tbl_categories` VALUES(61, 'Month 4', 2, 0);
INSERT INTO `tbl_categories` VALUES(62, 'Month 5', 2, 0);
INSERT INTO `tbl_categories` VALUES(63, 'Top Brand', 1, 0);
INSERT INTO `tbl_categories` VALUES(64, 'Apple', 63, 0);
INSERT INTO `tbl_categories` VALUES(65, 'Samsung', 63, 0);
INSERT INTO `tbl_categories` VALUES(66, 'Blackberry', 63, 0);
INSERT INTO `tbl_categories` VALUES(67, 'Brand', 3, 0);
INSERT INTO `tbl_categories` VALUES(68, 'Month 3', 51, 0);
INSERT INTO `tbl_categories` VALUES(69, 'Vertu', 8, 0);
INSERT INTO `tbl_categories` VALUES(70, 'Mobiado', 8, 0);
INSERT INTO `tbl_categories` VALUES(71, 'Lamboghili', 8, 0);
INSERT INTO `tbl_categories` VALUES(72, 'Apple', 67, 0);
INSERT INTO `tbl_categories` VALUES(73, 'Blackberry', 67, 0);
INSERT INTO `tbl_categories` VALUES(74, 'Motorola', 67, 0);
INSERT INTO `tbl_categories` VALUES(75, 'Apple', 60, 0);
INSERT INTO `tbl_categories` VALUES(76, 'Blackberry', 60, 0);
INSERT INTO `tbl_categories` VALUES(77, 'iOS xxx', 6, 2);
INSERT INTO `tbl_categories` VALUES(78, 'iOS yyy', 6, 1);
INSERT INTO `tbl_categories` VALUES(79, 'iOS zzz', 6, 0);
INSERT INTO `tbl_categories` VALUES(81, '', 0, 0);
INSERT INTO `tbl_categories` VALUES(82, 'tantan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_productID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsID` varchar(15) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`category_productID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` VALUES(79, 'PRO00036', 3);
INSERT INTO `tbl_category_product` VALUES(80, 'PRO00036', 4);
INSERT INTO `tbl_category_product` VALUES(93, 'PRO00038 ', 75);
INSERT INTO `tbl_category_product` VALUES(94, 'PRO00038 ', 76);
INSERT INTO `tbl_category_product` VALUES(95, 'PRO00038 ', 69);
INSERT INTO `tbl_category_product` VALUES(96, 'PRO00038 ', 68);
INSERT INTO `tbl_category_product` VALUES(97, 'PRO00038 ', 59);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sellerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buyerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` tinyint(1) NOT NULL COMMENT '0: tai nha; 1:truc tuyen',
  `status` tinyint(1) NOT NULL COMMENT '0: huy; 1: dang cho xac nhan; 2: da xac nhan; 3: da thanh toan',
  `statusID` int(10) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` VALUES('ORD00001', 'UID00003', 'GUEST025', '2014-06-06 03:19:06', 'sdfsdfsf', 0, 2, 3);
INSERT INTO `tbl_order` VALUES('ORD00002', 'UID00003', 'UID00002', '2014-06-06 03:31:26', 'hết cmn hàng', 1, 2, 4);
INSERT INTO `tbl_order` VALUES('ORD00003', 'UID00001', 'UID00003', '2014-06-06 16:21:42', 'chuyen den truong dinh', 0, 2, 6);
INSERT INTO `tbl_order` VALUES('ORD00004', 'UID00002', 'UID00003', '2014-06-06 16:22:17', 'ko thich nua', 0, 2, 7);
INSERT INTO `tbl_order` VALUES('ORD00005', 'UID00004', 'UID00003', '2014-06-06 16:22:28', 'hhehehehehee\n', 0, 2, 8);
INSERT INTO `tbl_order` VALUES('ORD00006', 'UID00003', 'UID00003', '2014-06-06 16:22:40', 'sdfsdf', 0, 2, 9);
INSERT INTO `tbl_order` VALUES('ORD00007', 'UID00003', 'UID00004', '2014-06-07 15:25:07', '', 1, 1, 10);
INSERT INTO `tbl_order` VALUES('ORD00008', 'UID00001', 'UID00004', '2014-06-07 15:35:50', '', 1, 1, 11);
INSERT INTO `tbl_order` VALUES('ORD00009', 'UID00002', 'UID00004', '2014-06-07 15:37:20', '', 1, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(15) NOT NULL AUTO_INCREMENT,
  `syntax` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'cú pháp tin nhắn',
  `phone` int(15) NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`transactionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` VALUES(9, '8085 DV MOTGIA UID00003', 123, 'UID00003', 150000, '2014-06-08 09:31:39');
INSERT INTO `transaction` VALUES(8, '8085 DV MOTGIA UID00003', 123, 'UID00003', 150000, '2014-06-08 09:31:14');
INSERT INTO `transaction` VALUES(7, '8085 DV MOTGIA UID00003', 123, 'UID00003', 150000, '2014-06-08 09:30:19');
INSERT INTO `transaction` VALUES(6, '8085 DV MOTGIA UID00003', 123, 'UID00003', 150000, '2014-06-08 09:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES('UID00001', 'Trịnh', 'Thành Đô', 'thanhdo.trinh@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '0000-00-00', 0, 0, 'Bình Định', '841234567867', 'trên trời', 1, '2014-03-16 04:34:20', 3);
INSERT INTO `user` VALUES('UID00002', 'Hải', 'Lê', 'haile.fithou@yahoo.com', 'UV9qkwFX1usTeuQkjCrLffhyZHFcRn95QIfGBZ/pn4aGouNWZaVkk+CjRj3L1P25OCM4iHjuwWba9JVgOgfotg==', '0000-00-00', 0, 0, '', '0123456789', 'Linh Đàm', 1, '2014-03-19 15:01:31', 0);
INSERT INTO `user` VALUES('UID00003', 'Nguyễn', 'Tân Tân', 'ductan_nguyen92@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '2015-06-11', 0, 75000, 'Thái Bình', '01689338965', 'Trương Định Hà Nội', 1, '2014-03-20 00:34:01', 2);
INSERT INTO `user` VALUES('UID00004', 'Tân', 'Ông xã', 'tantanb2@gmail.com', 'EoviPDsgOMcAxFnFxLbdVHfi/tF8HOqUuiSt7Y2QCy3qZh3K4ExwYNeYyHTZSA8wUnGSpvGYokin9fplU9N0nw==', '1992-08-26', 0, 0, 'Thái Bình', '023456789', 'trương định hà lội', 1, '2014-05-07 00:31:32', 2);
INSERT INTO `user` VALUES('UID00005', 'Tân', 'Tân', 'ductan_nguyen28@yahoo.com', 'Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==', '1992-08-26', 0, 0, 'Thái Nguyên', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-29 22:03:23', 0);
INSERT INTO `user` VALUES('UID00006', 'Đức', 'Tân', 'ductan_nguyen268@yahoo.com', 'S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==', '1992-02-01', 0, 0, 'Bình Thuận', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-30 15:19:50', 1);
INSERT INTO `user` VALUES('UID00009', 'trinh', 'sdfsdf', 'thanhdo.trinh@gmail.com', 'jRABb3xRkJ0bgt6Dj6ZD/YRnuCofWi0hCABt8luu+66s+hsh8ZwZCd6UKJSVyyLpIB8gxaxHGJC8+K8aImIjCg==', '2014-06-27', 1, 0, 'Hà Nội', '09877', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:00:27', 1);
INSERT INTO `user` VALUES('UID00011', 'trinh', 'do', '3s@sdfsdf.sdfsfd', 'Ad6AoxFxGj/JzK2szXMORkyPuKnnNBpuyGZ+JYv26V9lR0t+mca/dtdscZFGDWmTENcfhDieJsntDDEUCVEQqg==', '2014-06-29', 1, 0, 'Bình Phước', '00997983423', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:04:23', 1);
INSERT INTO `user` VALUES('UID00012', 'trinh', 'sdfsdf', 'thanhdo.trinh@gmail.com', '3VO+TMRrhJTc9IsRSPAnpLUJVWpI1QF4qdP54PNZwLTm1x0nduDHMR8xqDAdNm1Z3BJCxaBguo66eKhI9NJAUw==', '2014-06-28', 1, 0, 'Bình Thuận', '0978787687', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:05:47', 1);
INSERT INTO `user` VALUES('UID00013', 'trinh', 'sdfsdf', '3s@sdfsdf.sdfsfd', 'LuuS5ifXaZx3M7bW3x5vlLFmLhKuvoWIHsbaJr70Vh0v+CJZtFvTLOz0jqPUXOYyS1OL4ZNLBJByIFySW8xK9A==', '2014-06-06', 1, 0, 'Hải Phòng', '00997983423', '45345345345', 0, '2014-06-01 12:08:58', 3);
