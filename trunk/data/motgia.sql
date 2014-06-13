-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2014 at 06:51 PM
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
-- Table structure for table `bill_status`
--

CREATE TABLE IF NOT EXISTS `bill_status` (
  `statusID` int(10) NOT NULL AUTO_INCREMENT,
  `action_date` datetime NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `bill_status`
--

INSERT INTO `bill_status` (`statusID`, `action_date`, `userID`) VALUES
(3, '2014-06-06 17:06:33', 'UID00003'),
(4, '2014-06-06 17:12:04', 'UID00003'),
(6, '2014-06-06 16:21:42', 'UID00003'),
(7, '2014-06-06 16:22:17', 'UID00003'),
(8, '2014-06-06 18:05:42', 'UID00003'),
(9, '2014-06-06 17:11:34', 'UID00003'),
(10, '2014-06-09 00:57:29', 'UID00003'),
(11, '2014-06-07 15:35:50', 'UID00004'),
(12, '2014-06-07 15:37:20', 'UID00004'),
(13, '2014-06-09 00:59:28', 'UID00003'),
(14, '2014-06-11 23:47:57', 'UID00004'),
(21, '2014-06-12 00:18:54', 'UID00004'),
(22, '2014-06-12 00:19:34', 'UID00004'),
(23, '2014-06-12 00:19:57', 'UID00004'),
(24, '2014-06-12 00:20:05', 'UID00004'),
(25, '2014-06-12 00:20:27', 'UID00004'),
(26, '2014-06-12 00:20:46', 'UID00004'),
(27, '2014-06-12 00:21:08', 'UID00004'),
(28, '2014-06-12 00:21:24', 'UID00004'),
(29, '2014-06-12 01:05:32', 'UID00004'),
(30, '2014-06-12 01:06:02', 'UID00004'),
(31, '2014-06-12 01:08:48', 'UID00004'),
(32, '2014-06-12 01:09:17', 'UID00004'),
(33, '2014-06-12 01:09:46', 'UID00004'),
(34, '2014-06-12 01:10:46', 'UID00004'),
(35, '2014-06-12 01:10:49', 'UID00004'),
(36, '2014-06-12 01:15:10', 'UID00004'),
(37, '2014-06-12 01:15:30', 'UID00004'),
(38, '2014-06-12 01:15:34', 'UID00004'),
(39, '2014-06-12 01:27:25', 'UID00004'),
(40, '2014-06-12 01:15:40', 'UID00004'),
(41, '2014-06-12 01:16:12', 'UID00004'),
(42, '2014-06-12 01:16:15', 'UID00004'),
(43, '2014-06-12 01:49:15', ''),
(44, '2014-06-12 01:24:58', 'UID00004'),
(45, '2014-06-12 01:16:37', 'UID00004'),
(46, '2014-06-12 01:16:40', 'UID00004'),
(47, '2014-06-12 01:17:15', 'UID00004'),
(48, '2014-06-12 01:17:18', 'UID00004'),
(49, '2014-06-12 01:03:58', 'UID00003'),
(50, '2014-06-12 15:48:05', 'UID00004'),
(51, '2014-06-12 16:52:36', 'UID00004'),
(52, '2014-06-12 16:53:06', 'UID00004'),
(53, '2014-06-12 16:53:28', 'UID00004'),
(54, '2014-06-12 21:16:52', 'UID00004');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=867 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(685, 1402470077, '::1', 'scEo46um'),
(684, 1402470071, '::1', 'HjFey7nG'),
(683, 1402470036, '::1', 'F65vuVnd'),
(682, 1402470026, '::1', 'Yb7RIh6i'),
(681, 1402469997, '::1', 'i35dtUvv'),
(680, 1402469957, '::1', '1KEjNPoG'),
(679, 1402469886, '::1', 'gxbK30dS'),
(678, 1402469848, '::1', 'DYsuwEfc'),
(677, 1402469794, '::1', 'TYsvhtAy'),
(676, 1402467362, '::1', 'cYvEtypj'),
(675, 1402466346, '::1', 'LG6SZTjZ'),
(674, 1402337052, '::1', '7NnEwHEX'),
(673, 1402336916, '::1', 'mOA7DH2P'),
(672, 1402336808, '::1', 'queBoUwQ'),
(671, 1402335298, '::1', 'Cvj1zBzB'),
(670, 1402335210, '::1', 'NH0yjmTQ'),
(669, 1402335153, '::1', 'SKXhPBzv'),
(668, 1402334940, '::1', 'HNmybDNv'),
(667, 1402246616, '::1', 'iUvypC2k'),
(666, 1402220532, '::1', '0diikvaD'),
(665, 1402220532, '::1', 'X1uHI3Yz'),
(664, 1402220519, '::1', 'T86691AM'),
(663, 1402220519, '::1', 'SUz8l6iv'),
(662, 1402220479, '::1', '1iGLSHNe'),
(661, 1402220472, '::1', 'gWBLjSu4'),
(660, 1402220471, '::1', '4n7k6oqx'),
(659, 1402220391, '::1', 'yx8nUH25'),
(658, 1402218425, '::1', 'UWbbdpYJ'),
(686, 1402470305, '::1', '9cCOve82'),
(687, 1402470361, '::1', 'jLeIc1V2'),
(688, 1402470401, '::1', '5pS7sHtz'),
(689, 1402470437, '::1', 'OS6FpjlH'),
(690, 1402470572, '::1', 'xJgpNSlq'),
(691, 1402470610, '::1', 'sTDNNQAt'),
(692, 1402470647, '::1', 'lVrjl6n5'),
(693, 1402470656, '::1', 'NnkDuGpp'),
(694, 1402470680, '::1', 'O2mvjFYH'),
(695, 1402470682, '::1', '4hauVK7B'),
(696, 1402470686, '::1', '41FKDoQ5'),
(697, 1402470770, '::1', 'w5wrjAnB'),
(698, 1402470817, '::1', 'JeuiAXV3'),
(699, 1402470886, '::1', 'j6eAoThH'),
(700, 1402470887, '::1', 'kMCQ31b0'),
(701, 1402470896, '::1', 'CpiwVT8x'),
(702, 1402470920, '::1', '6T8legGi'),
(703, 1402470934, '::1', '0DpjqXvd'),
(704, 1402471065, '::1', '4biMjGx2'),
(705, 1402471107, '::1', 'bmL6cFkO'),
(706, 1402471145, '::1', 'QQgFEhkQ'),
(707, 1402471165, '::1', '0kxoZUnN'),
(708, 1402471173, '::1', 'gAFVT7aV'),
(709, 1402471192, '::1', 'TjKkqR7C'),
(710, 1402471224, '::1', 'o8ESFv4y'),
(711, 1402471291, '::1', 'MWOa62I8'),
(712, 1402471438, '::1', 'uGgtDfD1'),
(713, 1402471465, '::1', 'hmsDncNh'),
(714, 1402471598, '::1', '7c3wQkDT'),
(715, 1402471717, '::1', 'cak35Zvg'),
(716, 1402471785, '::1', 'Up7E9kJh'),
(717, 1402471798, '::1', 'KNL1Zzer'),
(718, 1402471837, '::1', 'LF5VE98w'),
(719, 1402471854, '::1', 'Izmm2JoF'),
(720, 1402471860, '::1', 'HdjCt1Bz'),
(721, 1402471869, '::1', 'kd4OhMd9'),
(722, 1402471870, '::1', 'VdTkYX7n'),
(723, 1402471926, '::1', 'OD7bzoTe'),
(724, 1402471961, '::1', 'xFq1SC2X'),
(725, 1402472058, '::1', 'HcPon45e'),
(726, 1402472099, '::1', 'i1SGjRkD'),
(727, 1402472123, '::1', 'aA4pN6Yc'),
(728, 1402472134, '::1', 'oHM5mm86'),
(729, 1402472191, '::1', '4DzFtdND'),
(730, 1402472299, '::1', 'g1Ye66T2'),
(731, 1402472314, '::1', 'tEEQneJH'),
(732, 1402472351, '::1', 'ajh9eX3v'),
(733, 1402472488, '::1', 'fKA5oB8W'),
(734, 1402472538, '::1', 'uK991RVt'),
(735, 1402472579, '::1', 'RtlYxbCv'),
(736, 1402472630, '::1', 'KenixSif'),
(737, 1402472652, '::1', 'c6S4lJYf'),
(738, 1402472672, '::1', 'p0GIM9qW'),
(739, 1402472716, '::1', 'ZW1I1tlN'),
(740, 1402473138, '::1', '49qmHqnv'),
(741, 1402473180, '::1', 'MbfLNyUj'),
(742, 1402473228, '::1', '1pPvdIU4'),
(743, 1402473261, '::1', 'BGrrBupN'),
(744, 1402473357, '::1', 'BOVNMeIJ'),
(745, 1402473358, '::1', 'qvhiIcLP'),
(746, 1402473911, '::1', 'z3vBCfCH'),
(747, 1402473943, '::1', 'o2ZgaaIe'),
(748, 1402474075, '::1', 'XdU62mHh'),
(749, 1402474094, '::1', 'aiTlrijP'),
(750, 1402474153, '::1', 'NsIE3RpB'),
(751, 1402474180, '::1', 'k7bSDeOv'),
(752, 1402474229, '::1', 'teSYQ3Q7'),
(753, 1402474239, '::1', 'SOAh1ODo'),
(754, 1402474336, '::1', 'GV77AgJ9'),
(755, 1402474506, '::1', 'oidNAYcr'),
(756, 1402474630, '::1', 'tqbN6n6n'),
(757, 1402474645, '::1', '0bwOcsjx'),
(758, 1402474683, '::1', 'x05ytfYP'),
(759, 1402474758, '::1', '2FksNGNN'),
(760, 1402474833, '::1', 'OAOjXaex'),
(761, 1402474876, '::1', 'AzmHTwZB'),
(762, 1402474933, '::1', '4LS8ZpPw'),
(763, 1402474940, '::1', 'UYRhHFTy'),
(764, 1402475023, '::1', 'jVYlQ2yE'),
(765, 1402484643, '::1', 'n8v6QQgf'),
(766, 1402484763, '::1', 'OWp9xfyd'),
(767, 1402484817, '::1', 'KNiCbaq8'),
(768, 1402485020, '::1', 'ZDGyZIUJ'),
(769, 1402485113, '::1', 'VhAgsyjF'),
(770, 1402485261, '::1', 'yNgJk2xF'),
(771, 1402485309, '::1', '2dCfQ4qk'),
(772, 1402500588, '::1', '393eruvh'),
(773, 1402500592, '::1', 'mizjX02N'),
(774, 1402500652, '::1', 'TMkGLzpq'),
(775, 1402500737, '::1', '9jUljLES'),
(776, 1402500738, '::1', '3rwZDdA0'),
(777, 1402500738, '::1', 'dEXNRX0O'),
(778, 1402500738, '::1', '6XbQSn1k'),
(779, 1402500738, '::1', 'fvFYMACW'),
(780, 1402500738, '::1', 'nAyYC7xJ'),
(781, 1402500739, '::1', 'dlhAd0ya'),
(782, 1402500739, '::1', 'GP3KWnTm'),
(783, 1402500772, '::1', 'tl6mWxw9'),
(784, 1402500774, '::1', '1whYpQXe'),
(785, 1402500774, '::1', '5vEF90xI'),
(786, 1402500775, '::1', 'lKpH00LI'),
(787, 1402500775, '::1', 'RAxVcNoU'),
(788, 1402500775, '::1', 'R9v8pD5L'),
(789, 1402500775, '::1', 'nP6imVb8'),
(790, 1402500775, '::1', 'sJ8qt5Y9'),
(791, 1402500775, '::1', 'llM8SElT'),
(792, 1402500775, '::1', 'K04fKLgx'),
(793, 1402500775, '::1', 'rzXyiRuR'),
(794, 1402500833, '::1', 'QFdTn8wu'),
(795, 1402500913, '::1', 'NoiUxGaS'),
(796, 1402501708, '::1', 'EIpua8bH'),
(797, 1402501713, '::1', 'PNXGneVd'),
(798, 1402501756, '::1', 'Lknq3oYw'),
(799, 1402501802, '::1', '7Y00LjXa'),
(800, 1402501888, '::1', 'rn29de8J'),
(801, 1402501918, '::1', 'GKD1mzmN'),
(802, 1402501937, '::1', 'q07TSbef'),
(803, 1402501986, '::1', 'orRgxY7q'),
(804, 1402502001, '::1', 'zCqGq31v'),
(805, 1402507448, '::1', 'cCag3RX6'),
(806, 1402507491, '::1', 'ACoezdUg'),
(807, 1402507503, '::1', 'oN4wH32M'),
(808, 1402507522, '::1', '9ZFEqLWN'),
(809, 1402507529, '::1', '0oyY5FUK'),
(810, 1402507639, '::1', 'UfX3xLhS'),
(811, 1402507683, '::1', '9eakbKn7'),
(812, 1402507709, '::1', 'HB6s7Bjj'),
(813, 1402508408, '::1', 'SxZYcJA7'),
(814, 1402509026, '::1', 'zpAdRd03'),
(815, 1402509281, '::1', 'HwIlKw7d'),
(816, 1402511787, '::1', 'cuUpByRC'),
(817, 1402511792, '::1', 'PdhyOsHZ'),
(818, 1402511825, '::1', 'VmcKSc0c'),
(819, 1402511842, '::1', 'XeYElhFE'),
(820, 1402511851, '::1', 'oLZEYc2i'),
(821, 1402511871, '::1', '4SXxTE88'),
(822, 1402511909, '::1', '8IwnE7fm'),
(823, 1402511940, '::1', 'agqfwl8W'),
(824, 1402511944, '::1', '9BbFAMOc'),
(825, 1402564515, '::1', 'ukfbLLGa'),
(826, 1402564518, '::1', 'L6MW9XRQ'),
(827, 1402564521, '::1', '0CpAj3qr'),
(828, 1402564548, '::1', 'mS8OM7AU'),
(829, 1402564586, '::1', 'DjBV99R3'),
(830, 1402564592, '::1', 'dSEhMV4v'),
(831, 1402564973, '::1', 'lcx4jrE2'),
(832, 1402564975, '::1', 'sfd7MO7Q'),
(833, 1402564992, '::1', 'WTl2NMIx'),
(834, 1402565008, '::1', '9Ae3PFC8'),
(835, 1402565340, '::1', 'VqsILzOP'),
(836, 1402565355, '::1', 'S9FdmOwH'),
(837, 1402565472, '::1', 'hNdupgBx'),
(838, 1402565573, '::1', 'cZwhL8nP'),
(839, 1402565575, '::1', 'WJ5vjV9t'),
(840, 1402565586, '::1', 'hRX4FGXY'),
(841, 1402565594, '::1', 'pANpgyoc'),
(842, 1402565668, '::1', '8b2tgVkD'),
(843, 1402565670, '::1', 'gJawN9d0'),
(844, 1402565673, '::1', 'YEobRwMu'),
(845, 1402565674, '::1', 'yLLCK4vu'),
(846, 1402565675, '::1', '5YkashhQ'),
(847, 1402565676, '::1', '8iJP6im0'),
(848, 1402565676, '::1', 'f5JcsqFg'),
(849, 1402565677, '::1', 'INbMjJaa'),
(850, 1402565677, '::1', '21LyvVWK'),
(851, 1402565677, '::1', '0QJCBVAM'),
(852, 1402565677, '::1', 'aNEpgx0f'),
(853, 1402565689, '::1', '6Hqdb0Gt'),
(854, 1402565691, '::1', '5zbMuuqX'),
(855, 1402565692, '::1', '5fPj1hLy'),
(856, 1402565692, '::1', 'yS4vHIby'),
(857, 1402565693, '::1', 'Qhw3kk2E'),
(858, 1402565702, '::1', '2et4QsWy'),
(859, 1402565733, '::1', 's8Ua4iBf'),
(860, 1402565734, '::1', '44PGEyFP'),
(861, 1402565756, '::1', '8BJBGlRu'),
(862, 1402565759, '::1', '0VvgdR34'),
(863, 1402565761, '::1', 'hrK6UVtV'),
(864, 1402565767, '::1', 'd1k8ni0c'),
(865, 1402565770, '::1', '3cmmbtJQ'),
(866, 1402565804, '::1', 'hatxt9u5');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0232def36e884c08795de08922a54e02', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1402591349, 'a:1:{s:4:"user";a:4:{s:6:"userID";s:8:"UID00003";s:8:"fullname";s:18:"Nguyễn Tân Tân";s:5:"email";s:25:"ductan_nguyen92@yahoo.com";s:9:"logged_in";b:1;}}');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestID`, `fullname`, `mail`, `phone`, `province`, `address`, `create_date`) VALUES
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
('GUEST021', 'sdfsdf', 'ductan_nguyen92@yahoo.com', 123123, 'Bình Dương', 'sdf', '2014-05-30 06:33:00'),
('GUEST022', 'Tantan', 'thanhdo.trinh@gmail.com', 978787687, 'TP HCM', 'ssdasdasd', '2014-06-01 04:57:20'),
('GUEST023', '123', '3s@sdfsdf.sdfsfd', 2312312, 'Cần Thơ', 'sdfsdf', '2014-06-01 05:00:11'),
('GUEST024', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 0, 'Đà Nẵng', 'sdf', '2014-06-06 03:13:35'),
('GUEST025', 'Tân Ông xã', 'sdf@sdfsdf.sdfsdf', 123123, 'Đà Nẵng', 'sdfsdf', '2014-06-06 03:15:56'),
('GUEST026', 'Nguyễn Tân 22', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', '123', '2014-06-12 21:14:07'),
('GUEST027', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Phước', 's', '2014-06-12 21:14:41'),
('GUEST028', 'Nguyễn Tân 333333333', 'tantanb2@gmail.com', 1689338965, 'TP HCM', 'sdfsdf', '2014-06-12 22:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('MSS00013', 'UID00002', 'UID00003', 'Reply: Việc khẩnfsdfsdf', 'sdfsdfsd', '2014-05-24 16:14:47', 1),
('MSS00014', 'UID00002', 'UID00003', 'Reply: Việc khẩnasdasdasdasd', 'asdasdasdasdasd', '2014-05-24 16:15:15', 1),
('MSS00015', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdfffffffffffffff', 'ffffffffffffffffffffffffffffffffff', '2014-05-24 16:16:01', 1),
('MSS00016', 'UID00002', 'ArrayArray', 'Reply: Việc khẩndfgdfgdfg', 'dfgdfg', '2014-05-24 16:18:07', 0),
('MSS00017', 'UID00003', 'UID00004', 'cin chao thu nghiem', 'chao ban minh la tan dang thu nghiem he thong', '2014-05-24 17:06:16', 1),
('MSS00018', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', 'sdfsdfsdf', '2014-05-27 16:58:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderID`, `productsID`, `quantity`) VALUES
('ORD00', 'PRO00003', 1),
('ORD00001', 'PRO00008', 1),
('ORD00002', 'PRO00007', 1),
('ORD00003', 'PRO00007', 2),
('ORD00004', 'PRO00005', 1),
('ORD00005', 'PRO00003', 1),
('ORD00006', 'PRO00002', 2),
('ORD00006', 'PRO00004', 1),
('ORD00006', 'PRO00006', 3),
('ORD00006', 'PRO00008', 1),
('ORD00007', 'PRO00017', 2),
('ORD00007', 'PRO00018', 1),
('ORD00008', 'PRO00016', 1),
('ORD00009', 'PRO00014', 1),
('ORD00009', 'PRO00020', 1),
('ORD00013', 'PRO00001', 1),
('ORD00014', 'PRO00002', 1),
('ORD00015', 'PRO00001', 1),
('ORD00010', 'PRO00001', 2),
('ORD00011', 'PRO00003', 1),
('ORD00012', 'PRO00003', 2),
('ORD00001', 'PRO00002', 1),
('ORD00001', 'PRO00004', 1),
('ORD00002', 'PRO00002', 1),
('ORD00002', 'PRO00004', 1),
('ORD00002', 'PRO00008', 1),
('ORD00003', 'PRO00003', 1),
('ORD00003', 'PRO00009', 1),
('ORD00004', 'PRO00007', 1),
('ORD00005', 'PRO00010', 1),
('ORD00006', 'PRO00001', 1),
('ORD00007', 'PRO00003', 1),
('ORD00008', 'PRO00005', 1),
('ORD00009', 'PRO00010', 1);

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
  `shopID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_expiration` date NOT NULL COMMENT 'ngày hết hạn',
  `status` tinyint(1) NOT NULL COMMENT '0: ngừng bán; 1: đang bán; 2:hết hàng; 3:chờ duyệt; 4:hết hạn',
  PRIMARY KEY (`productsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsID`, `name`, `quantity`, `price`, `soldnumber`, `images`, `intro`, `hightlight`, `condition`, `productinfo`, `create_date`, `shopID`, `date_expiration`, `status`) VALUES
('PRO00001', 'Sơ mi nam - nâu', 12, 100000, 0, '["public\\/product_images\\/motgia53770e71c4ad4.jpg","public\\/product_images\\/motgia53770e71c4c2b.jpg","public\\/product_images\\/motgia53770e71c4d33.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>sdfdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '2014-05-17 15:23:29', 'SHO00003', '2014-04-15', 1),
('PRO00002', 'Áo thun màu vàng nhạt', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. us, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'SHO00003', '2014-04-09', 1),
('PRO00003', 'Quần Jeans nam', 3, 100000, 100, '["public\\/product_images\\/motgia53280f85369b2.jpg","public\\/product_images\\/motgia5315f9af7e73a.jpg","public\\/product_images\\/motgia5315f9af7eb66.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'SHO00004', '2014-03-10', 2),
('PRO00004', 'Áo ba lỗ nam - xanh', 3, 100000, 7, '["public\\/product_images\\/motgia53281007a3ecc.JPG","public\\/product_images\\/motgia53167d93e2722.jpg",null]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'SHO00003', '2013-11-26', 0),
('PRO00005', 'Sơ mi trắng nam', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-01-07', 3),
('PRO00006', 'iPhone 5s - white', 3, 100000, 4, '["public\\/product_images\\/motgia532811609eddc.jpg","public\\/product_images\\/motgia532811609efa6.jpg","public\\/product_images\\/motgia532811609f0e3.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'SHO00003', '2014-04-24', 0),
('PRO00007', 'Váy Hồng đáng yêu', 100, 100000, 4, '["public\\/product_images\\/motgia5328137f8d202.jpg","public\\/product_images\\/motgia5328137f8d3a1.jpg","public\\/product_images\\/motgia5328137f8d624.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-04-25', 4),
('PRO00008', 'Máy tính bảng Samsung', 12, 100000, 10, '["public\\/product_images\\/motgia532813c6737fd.jpg","public\\/product_images\\/motgia532813c673993.jpg","public\\/product_images\\/motgia532813c673ab2.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'SHO00003', '2014-04-17', 1),
('PRO00009', 'Áo thun TEES', 3, 100000, 0, '["public\\/product_images\\/motgia538b7f8e31f42.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'SHO00004', '2014-01-20', 1),
('PRO00010', 'Án Pull 100% cotton', 3, 100000, 0, '["public\\/product_images\\/motgia538b7e50c8bd5.jpg","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'SHO00002', '2014-04-02', 1),
('PRO00011', 'Pull Nam', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00002', '2014-04-21', 0),
('PRO00012', 'Máy ảnh sony', 3, 100000, 6, '["public\\/product_images\\/MAY-ANH-SONY-DSC-W730-6.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO0001', '2014-04-30', 0),
('PRO00013', 'Sp13', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00002', '2014-04-23', 1),
('PRO00014', 'Sp14', 3, 100000, 6, '["public\\/product_images\\/aothun.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00002', '2014-04-01', 1),
('PRO00015', 'Sp15', 3, 100000, 6, '["public\\/product_images\\/samsung.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00004', '2014-02-05', 0),
('PRO00016', 'Sp16', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-04-21', 1),
('PRO00017', 'Sp17', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-01-05', 1),
('PRO00018', 'Sp18', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00003', '2014-04-21', 1),
('PRO00019', 'Sp19', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00003', '2013-12-04', 0),
('PRO00020', 'Sp20', 3, 100000, 6, '["public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00002', '2014-01-05', 1),
('PRO00021', 'Sp21', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00003', '2014-01-08', 0),
('PRO00022', 'Sp22', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00004', '2014-04-21', 0),
('PRO00023', 'Sp23', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-04-29', 0),
('PRO00024', 'Sp24', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00004', '2014-02-10', 1),
('PRO00025', 'Sp25', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00001', '2014-04-02', 0),
('PRO00041', 'Sp26', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'SHO00003', '2014-01-28', 0),
('PRO040', 'Smartosc', 222, 3, 0, '["public\\/product_images\\/img0538f7639f2017.jpg","public\\/product_images\\/img1538f763a013ab.jpg","public\\/product_images\\/img2538f763a02a77.jpg"]', 'fvcvbc', 'fvbcvbc', 'gcvbcv', 'bcvbcvb', '2014-06-04 12:05:42', 'SHO00001', '2014-06-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) NOT NULL,
  `total_votes` int(5) NOT NULL DEFAULT '0',
  `total_value` int(5) NOT NULL DEFAULT '0',
  `used_ips` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `total_votes`, `total_value`, `used_ips`, `date`) VALUES
(2, 1, 4, 'a:1:{i:0;s:3:"::1";}', '2014-06-11 17:00:00'),
(1, 0, 0, '', '2014-06-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shopID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `create_date` date NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`shopID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopID`, `company`, `address`, `city`, `website`, `phone`, `create_date`, `userID`, `image`) VALUES
('SHO00001', 'Trách Nhiệm Hữu Hạn Mười Một Thành Viên FITHOU', 'Định Công', 'TP HCM', 'http://motgia.tk', 98765432, '2014-01-08', 'UID00004', 'public/icons/Shop_icon.png'),
('SHO00002', 'Công Ty Công Nghệ Và Thiết Bị Hàn Xẻng', 'ha loi', 'Hà Nội', 'http://4vn.eu', 1234567890, '2014-06-02', 'UID00002', 'public/icons/Shop_icon.png'),
('SHO00003', 'Cửa Hàng Đồ Lưu Niệm', '278 Lạch Tray\r\nNgô Quyền\r\n', 'Hải Phòng', 'http://quatangbaoloi.vn', 12345678, '2014-06-19', 'UID00003', 'public/icons/Shop_icon.png'),
('SHO00004', 'Công Ty Thủ Công Mỹ Nghệ Hoa Lư', ' Hàng Gai, Hàng Bạc', 'Hà Nội', 'http://motgia.tk', 134256578, '2013-06-18', 'UID00001', 'public/icons/Shop_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `sms` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sms`) VALUES
('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN'),
('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`categoryID`, `category_name`, `category_parent`, `order_sort`) VALUES
(1, 'Featured Phones', 0, 1),
(2, 'sales', 1, 4),
(3, 'Smart Phones', 0, 10),
(4, 'Main Stream', 3, 8),
(55, 'Android', 4, 1),
(6, 'iOS', 4, 2),
(7, 'Others', 4, 3),
(8, 'Luxury', 3, 6),
(10, 'Accessories', 0, 9),
(51, 'Sales', 3, 7),
(57, 'Month 4', 51, 1),
(58, 'Month 5', 51, 2),
(59, 'Pin', 10, 0),
(60, 'Skin', 10, 0),
(61, 'Month 4', 2, 0),
(62, 'Month 5', 2, 0),
(63, 'Top Brand', 1, 0),
(64, 'Apple', 63, 0),
(65, 'Samsung', 63, 0),
(66, 'Blackberry', 63, 0),
(67, 'Brand', 3, 0),
(68, 'Month 3', 51, 0),
(69, 'Vertu', 8, 0),
(70, 'Mobiado', 8, 0),
(71, 'Lamboghili', 8, 0),
(72, 'Apple', 67, 0),
(73, 'Blackberry', 67, 0),
(74, 'Motorola', 67, 0),
(75, 'Apple', 60, 0),
(76, 'Blackberry', 60, 0),
(77, 'iOS xxx', 6, 2),
(78, 'iOS yyy', 6, 1),
(79, 'iOS zzz', 6, 0),
(81, '', 0, 0),
(82, 'tantan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_productID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsID` varchar(15) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`category_productID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_productID`, `productsID`, `categoryID`) VALUES
(79, 'PRO00036', 3),
(80, 'PRO00036', 4),
(93, 'PRO00038 ', 75),
(94, 'PRO00038 ', 76),
(95, 'PRO00038 ', 69),
(96, 'PRO00038 ', 68),
(97, 'PRO00038 ', 59);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shopID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `tbl_order` (`orderID`, `shopID`, `buyerID`, `create_date`, `note`, `method`, `status`, `statusID`) VALUES
('ORD00001', 'SHO00001', 'UID00004', '2014-06-12 01:15:10', 'chan wa\nthe thoi', 0, 0, 36),
('ORD00002', 'SHO00001', 'UID00004', '2014-06-12 01:15:30', 'chan wa\nthe thoi', 0, 0, 37),
('ORD00003', 'SHO00004', 'UID00004', '2014-06-12 01:15:34', 'chan wa\nthe thoi', 0, 0, 38),
('ORD00004', 'SHO00001', 'UID00004', '2014-06-12 01:15:37', 'chan wa\nthe thoi', 0, 0, 39),
('ORD00005', 'SHO00001', 'UID00004', '2014-06-12 01:15:40', 'chan wa\nthe thoi', 0, 0, 40),
('ORD00006', 'SHO00003', 'UID00004', '2014-06-12 01:16:12', 'chan wa\nthe thoi', 0, 0, 41),
('ORD00007', 'SHO00001', 'UID00004', '2014-06-12 01:16:15', 'chan wa\nthe thoi', 0, 0, 42),
('ORD00008', 'SHO00001', 'UID00004', '2014-06-12 01:16:17', 'thoi em oi', 0, 0, 43),
('ORD00009', 'SHO00001', 'UID00004', '2014-06-12 01:16:20', 'chan wa\nthe thoi', 0, 0, 44),
('ORD00010', 'SHO00001', 'UID00004', '2014-06-12 01:19:59', 'het me no hang roi', 0, 2, 49),
('ORD00011', 'SHO00001', 'UID00004', '2014-06-12 14:59:46', 'hết cmn hàng rồi nhá', 1, 0, 50),
('ORD00012', 'SHO00004', 'UID00004', '2014-06-12 16:52:36', '', 0, 1, 51),
('ORD00013', 'SHO00003', 'UID00004', '2014-06-12 16:53:06', '', 1, 1, 52),
('ORD00014', 'SHO00003', 'UID00004', '2014-06-12 16:53:28', '', 0, 1, 53),
('ORD00015', 'SHO00001', 'GUEST027', '2014-06-12 21:15:23', 'anh het hang roi', 0, 0, 54);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
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

INSERT INTO `transaction` (`transactionID`, `syntax`, `phone`, `userID`, `money`, `create_date`) VALUES
(9, '8085 DV MOTGIA UID00003', 123, 'UID00003', 15000, '2014-06-08 09:31:39'),
(8, '8085 DV MOTGIA UID00003', 123, 'UID00003', 15000, '2014-06-08 09:31:14'),
(7, '8085 DV MOTGIA UID00003', 123, 'UID00003', 15000, '2014-06-08 09:30:19'),
(6, '8085 DV MOTGIA UID00003', 123, 'UID00001', 15000, '2014-06-08 09:24:34');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `email`, `password`, `birthday`, `gender`, `coin`, `province`, `phone`, `address`, `status`, `create_date`, `levelID`) VALUES
('UID00001', 'Trịnh', 'Thành Đô', 'thanhdo.trinh@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '0000-00-00', 0, 0, 'Bình Định', '841234567867', 'trên trời', 1, '2014-03-16 04:34:20', 2),
('UID00002', 'Hải', 'Lê', 'haile.fithou@yahoo.com', 'WpYXm+mpMrghhUWkpasmvaNHUaG/bTLmIB0VHWMtAdcUPxsKLWVJhwZEk0gminhKNm8ZCiZ78lsO/6F1YJ+mMA==', '2014-07-01', 0, 0, 'Hà Nội', '0123456789', 'Linh Đàm', 1, '2014-03-19 15:01:31', 2),
('UID00003', 'Nguyễn', 'Tân Tân', 'ductan_nguyen92@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '2015-06-11', 0, 75000, 'Thái Bình', '01689338965', 'Trương Định Hà Nội', 1, '2014-03-20 00:34:01', 2),
('UID00004', 'Tân', 'Ông xã', 'tantanb2@gmail.com', 'EoviPDsgOMcAxFnFxLbdVHfi/tF8HOqUuiSt7Y2QCy3qZh3K4ExwYNeYyHTZSA8wUnGSpvGYokin9fplU9N0nw==', '1992-08-26', 0, 0, 'Thái Bình', '023456789', 'trương định hà lội', 1, '2014-05-07 00:31:32', 2),
('UID00005', 'Tân', 'Tân', 'ductan_nguyen28@yahoo.com', 'Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==', '1992-08-26', 0, 0, 'Thái Nguyên', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-29 22:03:23', 0),
('UID00006', 'Đức', 'Tân', 'ductan_nguyen268@yahoo.com', 'S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==', '1992-02-01', 0, 0, 'Bình Thuận', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-30 15:19:50', 1),
('UID00009', 'trinh', 'Đô Trịnh', 'thanhdo.trinh@gmail.com', 'jRABb3xRkJ0bgt6Dj6ZD/YRnuCofWi0hCABt8luu+66s+hsh8ZwZCd6UKJSVyyLpIB8gxaxHGJC8+K8aImIjCg==', '2014-06-27', 1, 0, 'Hà Nội', '09877', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:00:27', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
