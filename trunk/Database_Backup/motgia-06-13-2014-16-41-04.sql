DROP TABLE IF EXISTS bill_status;

CREATE TABLE `bill_status` (
  `statusID` int(10) NOT NULL AUTO_INCREMENT,
  `action_date` datetime NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO bill_status VALUES("3","2014-06-06 17:06:33","UID00003");
INSERT INTO bill_status VALUES("4","2014-06-06 17:12:04","UID00003");
INSERT INTO bill_status VALUES("6","2014-06-06 16:21:42","UID00003");
INSERT INTO bill_status VALUES("7","2014-06-06 16:22:17","UID00003");
INSERT INTO bill_status VALUES("8","2014-06-06 18:05:42","UID00003");
INSERT INTO bill_status VALUES("9","2014-06-06 17:11:34","UID00003");
INSERT INTO bill_status VALUES("10","2014-06-09 00:57:29","UID00003");
INSERT INTO bill_status VALUES("11","2014-06-07 15:35:50","UID00004");
INSERT INTO bill_status VALUES("12","2014-06-07 15:37:20","UID00004");
INSERT INTO bill_status VALUES("13","2014-06-09 00:59:28","UID00003");
INSERT INTO bill_status VALUES("14","2014-06-11 23:47:57","UID00004");
INSERT INTO bill_status VALUES("21","2014-06-12 00:18:54","UID00004");
INSERT INTO bill_status VALUES("22","2014-06-12 00:19:34","UID00004");
INSERT INTO bill_status VALUES("23","2014-06-12 00:19:57","UID00004");
INSERT INTO bill_status VALUES("24","2014-06-12 00:20:05","UID00004");
INSERT INTO bill_status VALUES("25","2014-06-12 00:20:27","UID00004");
INSERT INTO bill_status VALUES("26","2014-06-12 00:20:46","UID00004");
INSERT INTO bill_status VALUES("27","2014-06-12 00:21:08","UID00004");
INSERT INTO bill_status VALUES("28","2014-06-12 00:21:24","UID00004");
INSERT INTO bill_status VALUES("29","2014-06-12 01:05:32","UID00004");
INSERT INTO bill_status VALUES("30","2014-06-12 01:06:02","UID00004");
INSERT INTO bill_status VALUES("31","2014-06-12 01:08:48","UID00004");
INSERT INTO bill_status VALUES("32","2014-06-12 01:09:17","UID00004");
INSERT INTO bill_status VALUES("33","2014-06-12 01:09:46","UID00004");
INSERT INTO bill_status VALUES("34","2014-06-12 01:10:46","UID00004");
INSERT INTO bill_status VALUES("35","2014-06-12 01:10:49","UID00004");
INSERT INTO bill_status VALUES("36","2014-06-12 01:15:10","UID00004");
INSERT INTO bill_status VALUES("37","2014-06-12 01:15:30","UID00004");
INSERT INTO bill_status VALUES("38","2014-06-12 01:15:34","UID00004");
INSERT INTO bill_status VALUES("39","2014-06-12 01:27:25","UID00004");
INSERT INTO bill_status VALUES("40","2014-06-12 01:15:40","UID00004");
INSERT INTO bill_status VALUES("41","2014-06-12 01:16:12","UID00004");
INSERT INTO bill_status VALUES("42","2014-06-12 01:16:15","UID00004");
INSERT INTO bill_status VALUES("43","2014-06-12 01:49:15","");
INSERT INTO bill_status VALUES("44","2014-06-12 01:24:58","UID00004");
INSERT INTO bill_status VALUES("45","2014-06-12 01:16:37","UID00004");
INSERT INTO bill_status VALUES("46","2014-06-12 01:16:40","UID00004");
INSERT INTO bill_status VALUES("47","2014-06-12 01:17:15","UID00004");
INSERT INTO bill_status VALUES("48","2014-06-12 01:17:18","UID00004");
INSERT INTO bill_status VALUES("49","2014-06-12 01:03:58","UID00003");
INSERT INTO bill_status VALUES("50","2014-06-12 15:48:05","UID00004");
INSERT INTO bill_status VALUES("51","2014-06-12 16:52:36","UID00004");
INSERT INTO bill_status VALUES("52","2014-06-13 02:38:11","UID00003");
INSERT INTO bill_status VALUES("53","2014-06-13 02:41:35","UID00003");
INSERT INTO bill_status VALUES("54","2014-06-12 21:16:52","UID00004");


DROP TABLE IF EXISTS captcha;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM AUTO_INCREMENT=867 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO captcha VALUES("685","1402470077","::1","scEo46um");
INSERT INTO captcha VALUES("684","1402470071","::1","HjFey7nG");
INSERT INTO captcha VALUES("683","1402470036","::1","F65vuVnd");
INSERT INTO captcha VALUES("682","1402470026","::1","Yb7RIh6i");
INSERT INTO captcha VALUES("681","1402469997","::1","i35dtUvv");
INSERT INTO captcha VALUES("680","1402469957","::1","1KEjNPoG");
INSERT INTO captcha VALUES("679","1402469886","::1","gxbK30dS");
INSERT INTO captcha VALUES("678","1402469848","::1","DYsuwEfc");
INSERT INTO captcha VALUES("677","1402469794","::1","TYsvhtAy");
INSERT INTO captcha VALUES("676","1402467362","::1","cYvEtypj");
INSERT INTO captcha VALUES("675","1402466346","::1","LG6SZTjZ");
INSERT INTO captcha VALUES("674","1402337052","::1","7NnEwHEX");
INSERT INTO captcha VALUES("673","1402336916","::1","mOA7DH2P");
INSERT INTO captcha VALUES("672","1402336808","::1","queBoUwQ");
INSERT INTO captcha VALUES("671","1402335298","::1","Cvj1zBzB");
INSERT INTO captcha VALUES("670","1402335210","::1","NH0yjmTQ");
INSERT INTO captcha VALUES("669","1402335153","::1","SKXhPBzv");
INSERT INTO captcha VALUES("668","1402334940","::1","HNmybDNv");
INSERT INTO captcha VALUES("667","1402246616","::1","iUvypC2k");
INSERT INTO captcha VALUES("666","1402220532","::1","0diikvaD");
INSERT INTO captcha VALUES("665","1402220532","::1","X1uHI3Yz");
INSERT INTO captcha VALUES("664","1402220519","::1","T86691AM");
INSERT INTO captcha VALUES("663","1402220519","::1","SUz8l6iv");
INSERT INTO captcha VALUES("662","1402220479","::1","1iGLSHNe");
INSERT INTO captcha VALUES("661","1402220472","::1","gWBLjSu4");
INSERT INTO captcha VALUES("660","1402220471","::1","4n7k6oqx");
INSERT INTO captcha VALUES("659","1402220391","::1","yx8nUH25");
INSERT INTO captcha VALUES("658","1402218425","::1","UWbbdpYJ");
INSERT INTO captcha VALUES("686","1402470305","::1","9cCOve82");
INSERT INTO captcha VALUES("687","1402470361","::1","jLeIc1V2");
INSERT INTO captcha VALUES("688","1402470401","::1","5pS7sHtz");
INSERT INTO captcha VALUES("689","1402470437","::1","OS6FpjlH");
INSERT INTO captcha VALUES("690","1402470572","::1","xJgpNSlq");
INSERT INTO captcha VALUES("691","1402470610","::1","sTDNNQAt");
INSERT INTO captcha VALUES("692","1402470647","::1","lVrjl6n5");
INSERT INTO captcha VALUES("693","1402470656","::1","NnkDuGpp");
INSERT INTO captcha VALUES("694","1402470680","::1","O2mvjFYH");
INSERT INTO captcha VALUES("695","1402470682","::1","4hauVK7B");
INSERT INTO captcha VALUES("696","1402470686","::1","41FKDoQ5");
INSERT INTO captcha VALUES("697","1402470770","::1","w5wrjAnB");
INSERT INTO captcha VALUES("698","1402470817","::1","JeuiAXV3");
INSERT INTO captcha VALUES("699","1402470886","::1","j6eAoThH");
INSERT INTO captcha VALUES("700","1402470887","::1","kMCQ31b0");
INSERT INTO captcha VALUES("701","1402470896","::1","CpiwVT8x");
INSERT INTO captcha VALUES("702","1402470920","::1","6T8legGi");
INSERT INTO captcha VALUES("703","1402470934","::1","0DpjqXvd");
INSERT INTO captcha VALUES("704","1402471065","::1","4biMjGx2");
INSERT INTO captcha VALUES("705","1402471107","::1","bmL6cFkO");
INSERT INTO captcha VALUES("706","1402471145","::1","QQgFEhkQ");
INSERT INTO captcha VALUES("707","1402471165","::1","0kxoZUnN");
INSERT INTO captcha VALUES("708","1402471173","::1","gAFVT7aV");
INSERT INTO captcha VALUES("709","1402471192","::1","TjKkqR7C");
INSERT INTO captcha VALUES("710","1402471224","::1","o8ESFv4y");
INSERT INTO captcha VALUES("711","1402471291","::1","MWOa62I8");
INSERT INTO captcha VALUES("712","1402471438","::1","uGgtDfD1");
INSERT INTO captcha VALUES("713","1402471465","::1","hmsDncNh");
INSERT INTO captcha VALUES("714","1402471598","::1","7c3wQkDT");
INSERT INTO captcha VALUES("715","1402471717","::1","cak35Zvg");
INSERT INTO captcha VALUES("716","1402471785","::1","Up7E9kJh");
INSERT INTO captcha VALUES("717","1402471798","::1","KNL1Zzer");
INSERT INTO captcha VALUES("718","1402471837","::1","LF5VE98w");
INSERT INTO captcha VALUES("719","1402471854","::1","Izmm2JoF");
INSERT INTO captcha VALUES("720","1402471860","::1","HdjCt1Bz");
INSERT INTO captcha VALUES("721","1402471869","::1","kd4OhMd9");
INSERT INTO captcha VALUES("722","1402471870","::1","VdTkYX7n");
INSERT INTO captcha VALUES("723","1402471926","::1","OD7bzoTe");
INSERT INTO captcha VALUES("724","1402471961","::1","xFq1SC2X");
INSERT INTO captcha VALUES("725","1402472058","::1","HcPon45e");
INSERT INTO captcha VALUES("726","1402472099","::1","i1SGjRkD");
INSERT INTO captcha VALUES("727","1402472123","::1","aA4pN6Yc");
INSERT INTO captcha VALUES("728","1402472134","::1","oHM5mm86");
INSERT INTO captcha VALUES("729","1402472191","::1","4DzFtdND");
INSERT INTO captcha VALUES("730","1402472299","::1","g1Ye66T2");
INSERT INTO captcha VALUES("731","1402472314","::1","tEEQneJH");
INSERT INTO captcha VALUES("732","1402472351","::1","ajh9eX3v");
INSERT INTO captcha VALUES("733","1402472488","::1","fKA5oB8W");
INSERT INTO captcha VALUES("734","1402472538","::1","uK991RVt");
INSERT INTO captcha VALUES("735","1402472579","::1","RtlYxbCv");
INSERT INTO captcha VALUES("736","1402472630","::1","KenixSif");
INSERT INTO captcha VALUES("737","1402472652","::1","c6S4lJYf");
INSERT INTO captcha VALUES("738","1402472672","::1","p0GIM9qW");
INSERT INTO captcha VALUES("739","1402472716","::1","ZW1I1tlN");
INSERT INTO captcha VALUES("740","1402473138","::1","49qmHqnv");
INSERT INTO captcha VALUES("741","1402473180","::1","MbfLNyUj");
INSERT INTO captcha VALUES("742","1402473228","::1","1pPvdIU4");
INSERT INTO captcha VALUES("743","1402473261","::1","BGrrBupN");
INSERT INTO captcha VALUES("744","1402473357","::1","BOVNMeIJ");
INSERT INTO captcha VALUES("745","1402473358","::1","qvhiIcLP");
INSERT INTO captcha VALUES("746","1402473911","::1","z3vBCfCH");
INSERT INTO captcha VALUES("747","1402473943","::1","o2ZgaaIe");
INSERT INTO captcha VALUES("748","1402474075","::1","XdU62mHh");
INSERT INTO captcha VALUES("749","1402474094","::1","aiTlrijP");
INSERT INTO captcha VALUES("750","1402474153","::1","NsIE3RpB");
INSERT INTO captcha VALUES("751","1402474180","::1","k7bSDeOv");
INSERT INTO captcha VALUES("752","1402474229","::1","teSYQ3Q7");
INSERT INTO captcha VALUES("753","1402474239","::1","SOAh1ODo");
INSERT INTO captcha VALUES("754","1402474336","::1","GV77AgJ9");
INSERT INTO captcha VALUES("755","1402474506","::1","oidNAYcr");
INSERT INTO captcha VALUES("756","1402474630","::1","tqbN6n6n");
INSERT INTO captcha VALUES("757","1402474645","::1","0bwOcsjx");
INSERT INTO captcha VALUES("758","1402474683","::1","x05ytfYP");
INSERT INTO captcha VALUES("759","1402474758","::1","2FksNGNN");
INSERT INTO captcha VALUES("760","1402474833","::1","OAOjXaex");
INSERT INTO captcha VALUES("761","1402474876","::1","AzmHTwZB");
INSERT INTO captcha VALUES("762","1402474933","::1","4LS8ZpPw");
INSERT INTO captcha VALUES("763","1402474940","::1","UYRhHFTy");
INSERT INTO captcha VALUES("764","1402475023","::1","jVYlQ2yE");
INSERT INTO captcha VALUES("765","1402484643","::1","n8v6QQgf");
INSERT INTO captcha VALUES("766","1402484763","::1","OWp9xfyd");
INSERT INTO captcha VALUES("767","1402484817","::1","KNiCbaq8");
INSERT INTO captcha VALUES("768","1402485020","::1","ZDGyZIUJ");
INSERT INTO captcha VALUES("769","1402485113","::1","VhAgsyjF");
INSERT INTO captcha VALUES("770","1402485261","::1","yNgJk2xF");
INSERT INTO captcha VALUES("771","1402485309","::1","2dCfQ4qk");
INSERT INTO captcha VALUES("772","1402500588","::1","393eruvh");
INSERT INTO captcha VALUES("773","1402500592","::1","mizjX02N");
INSERT INTO captcha VALUES("774","1402500652","::1","TMkGLzpq");
INSERT INTO captcha VALUES("775","1402500737","::1","9jUljLES");
INSERT INTO captcha VALUES("776","1402500738","::1","3rwZDdA0");
INSERT INTO captcha VALUES("777","1402500738","::1","dEXNRX0O");
INSERT INTO captcha VALUES("778","1402500738","::1","6XbQSn1k");
INSERT INTO captcha VALUES("779","1402500738","::1","fvFYMACW");
INSERT INTO captcha VALUES("780","1402500738","::1","nAyYC7xJ");
INSERT INTO captcha VALUES("781","1402500739","::1","dlhAd0ya");
INSERT INTO captcha VALUES("782","1402500739","::1","GP3KWnTm");
INSERT INTO captcha VALUES("783","1402500772","::1","tl6mWxw9");
INSERT INTO captcha VALUES("784","1402500774","::1","1whYpQXe");
INSERT INTO captcha VALUES("785","1402500774","::1","5vEF90xI");
INSERT INTO captcha VALUES("786","1402500775","::1","lKpH00LI");
INSERT INTO captcha VALUES("787","1402500775","::1","RAxVcNoU");
INSERT INTO captcha VALUES("788","1402500775","::1","R9v8pD5L");
INSERT INTO captcha VALUES("789","1402500775","::1","nP6imVb8");
INSERT INTO captcha VALUES("790","1402500775","::1","sJ8qt5Y9");
INSERT INTO captcha VALUES("791","1402500775","::1","llM8SElT");
INSERT INTO captcha VALUES("792","1402500775","::1","K04fKLgx");
INSERT INTO captcha VALUES("793","1402500775","::1","rzXyiRuR");
INSERT INTO captcha VALUES("794","1402500833","::1","QFdTn8wu");
INSERT INTO captcha VALUES("795","1402500913","::1","NoiUxGaS");
INSERT INTO captcha VALUES("796","1402501708","::1","EIpua8bH");
INSERT INTO captcha VALUES("797","1402501713","::1","PNXGneVd");
INSERT INTO captcha VALUES("798","1402501756","::1","Lknq3oYw");
INSERT INTO captcha VALUES("799","1402501802","::1","7Y00LjXa");
INSERT INTO captcha VALUES("800","1402501888","::1","rn29de8J");
INSERT INTO captcha VALUES("801","1402501918","::1","GKD1mzmN");
INSERT INTO captcha VALUES("802","1402501937","::1","q07TSbef");
INSERT INTO captcha VALUES("803","1402501986","::1","orRgxY7q");
INSERT INTO captcha VALUES("804","1402502001","::1","zCqGq31v");
INSERT INTO captcha VALUES("805","1402507448","::1","cCag3RX6");
INSERT INTO captcha VALUES("806","1402507491","::1","ACoezdUg");
INSERT INTO captcha VALUES("807","1402507503","::1","oN4wH32M");
INSERT INTO captcha VALUES("808","1402507522","::1","9ZFEqLWN");
INSERT INTO captcha VALUES("809","1402507529","::1","0oyY5FUK");
INSERT INTO captcha VALUES("810","1402507639","::1","UfX3xLhS");
INSERT INTO captcha VALUES("811","1402507683","::1","9eakbKn7");
INSERT INTO captcha VALUES("812","1402507709","::1","HB6s7Bjj");
INSERT INTO captcha VALUES("813","1402508408","::1","SxZYcJA7");
INSERT INTO captcha VALUES("814","1402509026","::1","zpAdRd03");
INSERT INTO captcha VALUES("815","1402509281","::1","HwIlKw7d");
INSERT INTO captcha VALUES("816","1402511787","::1","cuUpByRC");
INSERT INTO captcha VALUES("817","1402511792","::1","PdhyOsHZ");
INSERT INTO captcha VALUES("818","1402511825","::1","VmcKSc0c");
INSERT INTO captcha VALUES("819","1402511842","::1","XeYElhFE");
INSERT INTO captcha VALUES("820","1402511851","::1","oLZEYc2i");
INSERT INTO captcha VALUES("821","1402511871","::1","4SXxTE88");
INSERT INTO captcha VALUES("822","1402511909","::1","8IwnE7fm");
INSERT INTO captcha VALUES("823","1402511940","::1","agqfwl8W");
INSERT INTO captcha VALUES("824","1402511944","::1","9BbFAMOc");
INSERT INTO captcha VALUES("825","1402564515","::1","ukfbLLGa");
INSERT INTO captcha VALUES("826","1402564518","::1","L6MW9XRQ");
INSERT INTO captcha VALUES("827","1402564521","::1","0CpAj3qr");
INSERT INTO captcha VALUES("828","1402564548","::1","mS8OM7AU");
INSERT INTO captcha VALUES("829","1402564586","::1","DjBV99R3");
INSERT INTO captcha VALUES("830","1402564592","::1","dSEhMV4v");
INSERT INTO captcha VALUES("831","1402564973","::1","lcx4jrE2");
INSERT INTO captcha VALUES("832","1402564975","::1","sfd7MO7Q");
INSERT INTO captcha VALUES("833","1402564992","::1","WTl2NMIx");
INSERT INTO captcha VALUES("834","1402565008","::1","9Ae3PFC8");
INSERT INTO captcha VALUES("835","1402565340","::1","VqsILzOP");
INSERT INTO captcha VALUES("836","1402565355","::1","S9FdmOwH");
INSERT INTO captcha VALUES("837","1402565472","::1","hNdupgBx");
INSERT INTO captcha VALUES("838","1402565573","::1","cZwhL8nP");
INSERT INTO captcha VALUES("839","1402565575","::1","WJ5vjV9t");
INSERT INTO captcha VALUES("840","1402565586","::1","hRX4FGXY");
INSERT INTO captcha VALUES("841","1402565594","::1","pANpgyoc");
INSERT INTO captcha VALUES("842","1402565668","::1","8b2tgVkD");
INSERT INTO captcha VALUES("843","1402565670","::1","gJawN9d0");
INSERT INTO captcha VALUES("844","1402565673","::1","YEobRwMu");
INSERT INTO captcha VALUES("845","1402565674","::1","yLLCK4vu");
INSERT INTO captcha VALUES("846","1402565675","::1","5YkashhQ");
INSERT INTO captcha VALUES("847","1402565676","::1","8iJP6im0");
INSERT INTO captcha VALUES("848","1402565676","::1","f5JcsqFg");
INSERT INTO captcha VALUES("849","1402565677","::1","INbMjJaa");
INSERT INTO captcha VALUES("850","1402565677","::1","21LyvVWK");
INSERT INTO captcha VALUES("851","1402565677","::1","0QJCBVAM");
INSERT INTO captcha VALUES("852","1402565677","::1","aNEpgx0f");
INSERT INTO captcha VALUES("853","1402565689","::1","6Hqdb0Gt");
INSERT INTO captcha VALUES("854","1402565691","::1","5zbMuuqX");
INSERT INTO captcha VALUES("855","1402565692","::1","5fPj1hLy");
INSERT INTO captcha VALUES("856","1402565692","::1","yS4vHIby");
INSERT INTO captcha VALUES("857","1402565693","::1","Qhw3kk2E");
INSERT INTO captcha VALUES("858","1402565702","::1","2et4QsWy");
INSERT INTO captcha VALUES("859","1402565733","::1","s8Ua4iBf");
INSERT INTO captcha VALUES("860","1402565734","::1","44PGEyFP");
INSERT INTO captcha VALUES("861","1402565756","::1","8BJBGlRu");
INSERT INTO captcha VALUES("862","1402565759","::1","0VvgdR34");
INSERT INTO captcha VALUES("863","1402565761","::1","hrK6UVtV");
INSERT INTO captcha VALUES("864","1402565767","::1","d1k8ni0c");
INSERT INTO captcha VALUES("865","1402565770","::1","3cmmbtJQ");
INSERT INTO captcha VALUES("866","1402565804","::1","hatxt9u5");


DROP TABLE IF EXISTS categories;

CREATE TABLE `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO ci_sessions VALUES("a8b3d855a8830743fa63e5debea26c3b","::1","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11","1402670436","a:3:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:4:{s:6:\"userID\";s:8:\"UID00003\";s:8:\"fullname\";s:18:\"Nguyễn Tân Tân\";s:5:\"email\";s:25:\"ductan_nguyen92@yahoo.com\";s:9:\"logged_in\";b:1;}s:5:\"admin\";a:4:{s:8:\"fullname\";s:18:\"Nguyễn Tân Tân\";s:5:\"email\";s:25:\"ductan_nguyen92@yahoo.com\";s:6:\"userID\";s:8:\"UID00003\";s:9:\"logged_in\";b:1;}}");


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

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
INSERT INTO guest VALUES("GUEST024","Nguyễn Tân","ductan_nguyen92@yahoo.com","0","Đà Nẵng","sdf","2014-06-06 03:13:35");
INSERT INTO guest VALUES("GUEST025","Tân Ông xã","sdf@sdfsdf.sdfsdf","123123","Đà Nẵng","sdfsdf","2014-06-06 03:15:56");
INSERT INTO guest VALUES("GUEST026","Nguyễn Tân 22","ductan_nguyen92@yahoo.com","1689338965","TP HCM","123","2014-06-12 21:14:07");
INSERT INTO guest VALUES("GUEST027","Nguyễn Tân","ductan_nguyen92@yahoo.com","1689338965","Bình Phước","s","2014-06-12 21:14:41");
INSERT INTO guest VALUES("GUEST028","Nguyễn Tân 333333333","tantanb2@gmail.com","1689338965","TP HCM","sdfsdf","2014-06-12 22:09:31");


DROP TABLE IF EXISTS level;

CREATE TABLE `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO level VALUES("0","chưa kích hoạt");
INSERT INTO level VALUES("1","thành viên");
INSERT INTO level VALUES("2","nhà cung cấp");
INSERT INTO level VALUES("3","quản trị viên");
INSERT INTO level VALUES("4","bị cấm");


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO message VALUES("MSS00013","UID00002","UID00003","Reply: Việc khẩnfsdfsdf","sdfsdfsd","2014-05-24 16:14:47","1");
INSERT INTO message VALUES("MSS00014","UID00002","UID00003","Reply: Việc khẩnasdasdasdasd","asdasdasdasdasd","2014-05-24 16:15:15","1");
INSERT INTO message VALUES("MSS00015","UID00002","UID00003","Reply: Việc khẩnsdfffffffffffffff","ffffffffffffffffffffffffffffffffff","2014-05-24 16:16:01","1");
INSERT INTO message VALUES("MSS00016","UID00002","ArrayArray","Reply: Việc khẩndfgdfgdfg","dfgdfg","2014-05-24 16:18:07","0");
INSERT INTO message VALUES("MSS00017","UID00003","UID00004","cin chao thu nghiem","chao ban minh la tan dang thu nghiem he thong","2014-05-24 17:06:16","1");
INSERT INTO message VALUES("MSS00018","UID00003","UID00004","Reply: Reply: Làm quen?","sdfsdfsdf","2014-05-27 16:58:38","1");


DROP TABLE IF EXISTS order_detail;

CREATE TABLE `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO order_detail VALUES("ORD00","PRO00003","1");
INSERT INTO order_detail VALUES("ORD00001","PRO00008","1");
INSERT INTO order_detail VALUES("ORD00002","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00003","PRO00007","2");
INSERT INTO order_detail VALUES("ORD00004","PRO00005","1");
INSERT INTO order_detail VALUES("ORD00005","PRO00003","1");
INSERT INTO order_detail VALUES("ORD00006","PRO00002","2");
INSERT INTO order_detail VALUES("ORD00006","PRO00004","1");
INSERT INTO order_detail VALUES("ORD00006","PRO00006","3");
INSERT INTO order_detail VALUES("ORD00006","PRO00008","1");
INSERT INTO order_detail VALUES("ORD00007","PRO00017","2");
INSERT INTO order_detail VALUES("ORD00007","PRO00018","1");
INSERT INTO order_detail VALUES("ORD00008","PRO00016","1");
INSERT INTO order_detail VALUES("ORD00009","PRO00014","1");
INSERT INTO order_detail VALUES("ORD00009","PRO00020","1");
INSERT INTO order_detail VALUES("ORD00013","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00014","PRO00002","1");
INSERT INTO order_detail VALUES("ORD00015","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00010","PRO00001","2");
INSERT INTO order_detail VALUES("ORD00011","PRO00003","1");
INSERT INTO order_detail VALUES("ORD00012","PRO00003","2");
INSERT INTO order_detail VALUES("ORD00001","PRO00002","1");
INSERT INTO order_detail VALUES("ORD00001","PRO00004","1");
INSERT INTO order_detail VALUES("ORD00002","PRO00002","1");
INSERT INTO order_detail VALUES("ORD00002","PRO00004","1");
INSERT INTO order_detail VALUES("ORD00002","PRO00008","1");
INSERT INTO order_detail VALUES("ORD00003","PRO00003","1");
INSERT INTO order_detail VALUES("ORD00003","PRO00009","1");
INSERT INTO order_detail VALUES("ORD00004","PRO00007","1");
INSERT INTO order_detail VALUES("ORD00005","PRO00010","1");
INSERT INTO order_detail VALUES("ORD00006","PRO00001","1");
INSERT INTO order_detail VALUES("ORD00007","PRO00003","1");
INSERT INTO order_detail VALUES("ORD00008","PRO00005","1");
INSERT INTO order_detail VALUES("ORD00009","PRO00010","1");


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
  `shopID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_expiration` date NOT NULL COMMENT 'ngày hết hạn',
  `status` tinyint(1) NOT NULL COMMENT '0: ngừng bán; 1: đang bán; 2:hết hàng; 3:chờ duyệt; 4:hết hạn',
  PRIMARY KEY (`productsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO products VALUES("PRO00001","Sơ mi nam - nâu","12","100000","0","[\"public\\/product_images\\/motgia53770e71c4ad4.jpg\",\"public\\/product_images\\/motgia53770e71c4c2b.jpg\",\"public\\/product_images\\/motgia53770e71c4d33.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>sdfdf</p>","<p>sdfsdf</p>","<p>sdfsdf</p>","2014-05-17 15:23:29","SHO00003","2014-04-15","1");
INSERT INTO products VALUES("PRO00002","Áo thun màu vàng nhạt","3","100000","0","[\"public\\/product_images\\/motgia53280fe0e1e00.png\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. us, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","SHO00003","2014-04-09","1");
INSERT INTO products VALUES("PRO00003","Quần Jeans nam","3","100000","100","[\"public\\/product_images\\/motgia53280f85369b2.jpg\",\"public\\/product_images\\/motgia5315f9af7e73a.jpg\",\"public\\/product_images\\/motgia5315f9af7eb66.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","","","","0000-00-00 00:00:00","SHO00004","2014-03-10","2");
INSERT INTO products VALUES("PRO00004","Áo ba lỗ nam - xanh","3","100000","7","[\"public\\/product_images\\/motgia53281007a3ecc.JPG\",\"public\\/product_images\\/motgia53167d93e2722.jpg\",null]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","","","","0000-00-00 00:00:00","SHO00003","2013-11-26","0");
INSERT INTO products VALUES("PRO00005","Sơ mi trắng nam","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00001","2014-01-07","3");
INSERT INTO products VALUES("PRO00006","iPhone 5s - white","3","100000","4","[\"public\\/product_images\\/motgia532811609eddc.jpg\",\"public\\/product_images\\/motgia532811609efa6.jpg\",\"public\\/product_images\\/motgia532811609f0e3.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","SHO00003","2014-04-24","0");
INSERT INTO products VALUES("PRO00007","Váy Hồng đáng yêu","100","100000","4","[\"public\\/product_images\\/motgia5328137f8d202.jpg\",\"public\\/product_images\\/motgia5328137f8d3a1.jpg\",\"public\\/product_images\\/motgia5328137f8d624.jpg\"]","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","0000-00-00 00:00:00","SHO00001","2014-04-25","4");
INSERT INTO products VALUES("PRO00008","Máy tính bảng Samsung","12","100000","10","[\"public\\/product_images\\/motgia532813c6737fd.jpg\",\"public\\/product_images\\/motgia532813c673993.jpg\",\"public\\/product_images\\/motgia532813c673ab2.jpg\"]","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>","0000-00-00 00:00:00","SHO00003","2014-04-17","1");
INSERT INTO products VALUES("PRO00009","Áo thun TEES","3","100000","0","[\"public\\/product_images\\/motgia538b7f8e31f42.png\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","SHO00004","2014-01-20","1");
INSERT INTO products VALUES("PRO00010","Án Pull 100% cotton","3","100000","0","[\"public\\/product_images\\/motgia538b7e50c8bd5.jpg\",\"public\\/product_images\\/motgia5315f2f47373e.png\",\"public\\/product_images\\/motgia5315f2f473a91.PNG\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","0000-00-00 00:00:00","SHO00002","2014-04-02","1");
INSERT INTO products VALUES("PRO00011","Pull Nam","3","100000","6","[\"public\\/product_images\\/motgia538b7f6174762.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00002","2014-04-21","0");
INSERT INTO products VALUES("PRO00012","Máy ảnh sony","3","100000","6","[\"public\\/product_images\\/MAY-ANH-SONY-DSC-W730-6.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO0001","2014-04-30","0");
INSERT INTO products VALUES("PRO00013","Sp13","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00002","2014-04-23","1");
INSERT INTO products VALUES("PRO00014","Sp14","3","100000","6","[\"public\\/product_images\\/aothun.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00002","2014-04-01","1");
INSERT INTO products VALUES("PRO00015","Sp15","3","100000","6","[\"public\\/product_images\\/samsung.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00004","2014-02-05","0");
INSERT INTO products VALUES("PRO00016","Sp16","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00001","2014-04-21","1");
INSERT INTO products VALUES("PRO00017","Sp17","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00001","2014-01-05","1");
INSERT INTO products VALUES("PRO00018","Sp18","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00003","2014-04-21","1");
INSERT INTO products VALUES("PRO00019","Sp19","3","100000","6","[\"public\\/product_images\\/motgia538b7f6174762.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00003","2013-12-04","1");
INSERT INTO products VALUES("PRO00020","Sp20","3","100000","6","[\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00002","2014-01-05","1");
INSERT INTO products VALUES("PRO00021","Sp21","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00003","2014-01-08","0");
INSERT INTO products VALUES("PRO00022","Sp22","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00004","2014-04-21","0");
INSERT INTO products VALUES("PRO00023","Sp23","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00001","2014-04-29","0");
INSERT INTO products VALUES("PRO00024","Sp24","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00004","2014-02-10","1");
INSERT INTO products VALUES("PRO00025","Sp25","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00001","2014-04-02","0");
INSERT INTO products VALUES("PRO00041","Sp26","3","100000","6","[\"public\\/product_images\\/motgia53280bad9a66a.jpg\",\"public\\/product_images\\/motgia53280bada3540.jpg\",\"public\\/product_images\\/motgia53280bada3708.jpg\"]","<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>","<p>fafasfsf</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\n<p>Suspendisse sagittis commodo risus sed posuere.</p>","0000-00-00 00:00:00","SHO00003","2014-01-28","0");
INSERT INTO products VALUES("PRO040","Smartosc","222","3","0","[\"public\\/product_images\\/img0538f7639f2017.jpg\",\"public\\/product_images\\/img1538f763a013ab.jpg\",\"public\\/product_images\\/img2538f763a02a77.jpg\"]","fvcvbc","fvbcvbc","gcvbcv","bcvbcvb","2014-06-04 12:05:42","SHO00001","2014-06-10","1");


DROP TABLE IF EXISTS ratings;

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `total_votes` int(5) NOT NULL DEFAULT '0',
  `total_value` int(5) NOT NULL DEFAULT '0',
  `used_ips` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO ratings VALUES("2","1","4","a:1:{i:0;s:3:\"::1\";}","2014-06-12 00:00:00");
INSERT INTO ratings VALUES("1","0","0","","2014-06-12 00:00:00");


DROP TABLE IF EXISTS shop;

CREATE TABLE `shop` (
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

INSERT INTO shop VALUES("SHO00001","Trách Nhiệm Hữu Hạn Mười Một Thành Viên FITHOU","Định Công","TP HCM","http://motgia.tk","98765432","2014-01-08","UID00001","public/icons/Shop_icon.png");
INSERT INTO shop VALUES("SHO00002","Công Ty Công Nghệ Và Thiết Bị Hàn Xẻng","ha loi","Hà Nội","http://4vn.eu","1234567890","2014-06-02","UID00002","public/icons/Shop_icon.png");
INSERT INTO shop VALUES("SHO00003","Cửa Hàng Đồ Lưu Niệm","278 Lạch Tray\nNgô Quyền\n","Hải Phòng","http://quatangbaoloi.vn","12345678","2014-06-19","UID00003","public/icons/Shop_icon.png");
INSERT INTO shop VALUES("SHO00004","Công Ty Thủ Công Mỹ Nghệ Hoa Lư"," Hàng Gai, Hàng Bạc","Hà Nội","http://motgia.tk","134256578","2013-06-18","UID00004","public/icons/Shop_icon.png");


DROP TABLE IF EXISTS sms;

CREATE TABLE `sms` (
  `sms` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO sms VALUES("Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN");
INSERT INTO sms VALUES("Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN");


DROP TABLE IF EXISTS tbl_categories;

CREATE TABLE `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

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
INSERT INTO tbl_categories VALUES("81","","0","0");
INSERT INTO tbl_categories VALUES("82","tantan","0","0");


DROP TABLE IF EXISTS tbl_category_product;

CREATE TABLE `tbl_category_product` (
  `category_productID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsID` varchar(15) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`category_productID`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

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
  `shopID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buyerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` tinyint(1) NOT NULL COMMENT '0: tai nha; 1:truc tuyen',
  `status` tinyint(1) NOT NULL COMMENT '0: huy; 1: dang cho xac nhan; 2: da xac nhan; 3: da thanh toan',
  `statusID` int(10) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tbl_order VALUES("ORD00001","SHO00001","UID00004","2014-06-12 01:15:10","chan wa\nthe thoi","0","0","36");
INSERT INTO tbl_order VALUES("ORD00002","SHO00001","UID00004","2014-06-12 01:15:30","chan wa\nthe thoi","0","0","37");
INSERT INTO tbl_order VALUES("ORD00003","SHO00004","UID00004","2014-06-12 01:15:34","chan wa\nthe thoi","0","0","38");
INSERT INTO tbl_order VALUES("ORD00004","SHO00001","UID00004","2014-06-12 01:15:37","chan wa\nthe thoi","0","0","39");
INSERT INTO tbl_order VALUES("ORD00005","SHO00001","UID00004","2014-06-12 01:15:40","chan wa\nthe thoi","0","0","40");
INSERT INTO tbl_order VALUES("ORD00006","SHO00003","UID00004","2014-06-12 01:16:12","chan wa\nthe thoi","0","0","41");
INSERT INTO tbl_order VALUES("ORD00007","SHO00001","UID00004","2014-06-12 01:16:15","chan wa\nthe thoi","0","0","42");
INSERT INTO tbl_order VALUES("ORD00008","SHO00001","UID00004","2014-06-12 01:16:17","thoi em oi","0","0","43");
INSERT INTO tbl_order VALUES("ORD00009","SHO00001","UID00004","2014-06-12 01:16:20","chan wa\nthe thoi","0","0","44");
INSERT INTO tbl_order VALUES("ORD00010","SHO00001","UID00004","2014-06-12 01:19:59","het me no hang roi","0","0","49");
INSERT INTO tbl_order VALUES("ORD00011","SHO00001","UID00004","2014-06-12 14:59:46","hết cmn hàng rồi nhá","1","0","50");
INSERT INTO tbl_order VALUES("ORD00012","SHO00004","UID00004","2014-06-12 16:52:36","","0","0","51");
INSERT INTO tbl_order VALUES("ORD00013","SHO00003","UID00004","2014-06-12 16:53:06","fgdfg","1","1","52");
INSERT INTO tbl_order VALUES("ORD00014","SHO00003","UID00004","2014-06-12 16:53:28","sory anh em","0","0","53");
INSERT INTO tbl_order VALUES("ORD00015","SHO00001","GUEST027","2014-06-12 21:15:23","anh het hang roi","0","0","54");


DROP TABLE IF EXISTS transaction;

CREATE TABLE `transaction` (
  `transactionID` int(15) NOT NULL AUTO_INCREMENT,
  `syntax` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'cú pháp tin nhắn',
  `phone` int(15) NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`transactionID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO transaction VALUES("9","8085 DV MOTGIA UID00003","123","UID00003","15000","2014-06-08 09:31:39");
INSERT INTO transaction VALUES("8","8085 DV MOTGIA UID00003","123","UID00003","15000","2014-06-08 09:31:14");
INSERT INTO transaction VALUES("7","8085 DV MOTGIA UID00003","123","UID00003","15000","2014-06-08 09:30:19");
INSERT INTO transaction VALUES("6","8085 DV MOTGIA UID00003","123","UID00001","15000","2014-06-08 09:24:34");


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO user VALUES("UID00001","Trịnh","Thành Đô","thanhdo.trinh@yahoo.com","dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==","0000-00-00","0","0","Bình Định","841234567867","trên trời","1","2014-03-16 04:34:20","2");
INSERT INTO user VALUES("UID00002","Hải","Lê","haile.fithou@yahoo.com","WpYXm+mpMrghhUWkpasmvaNHUaG/bTLmIB0VHWMtAdcUPxsKLWVJhwZEk0gminhKNm8ZCiZ78lsO/6F1YJ+mMA==","2014-07-01","0","0","Hà Nội","0123456789","Linh Đàm","1","2014-03-19 15:01:31","2");
INSERT INTO user VALUES("UID00003","Nguyễn","Tân Tân","ductan_nguyen92@yahoo.com","dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==","2015-06-11","0","75000","Thái Bình","01689338965","Trương Định Hà Nội","1","2014-03-20 00:34:01","2");
INSERT INTO user VALUES("UID00004","Tân","Ông xã","tantanb2@gmail.com","EoviPDsgOMcAxFnFxLbdVHfi/tF8HOqUuiSt7Y2QCy3qZh3K4ExwYNeYyHTZSA8wUnGSpvGYokin9fplU9N0nw==","1992-08-26","0","0","Thái Bình","023456789","trương định hà lội","1","2014-05-07 00:31:32","2");
INSERT INTO user VALUES("UID00005","Tân","Tân","ductan_nguyen28@yahoo.com","Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==","1992-08-26","0","0","Thái Nguyên","01689338965","Hoàng Mai - Hà Nội","1","2014-05-29 22:03:23","0");
INSERT INTO user VALUES("UID00006","Đức","Tân","ductan_nguyen268@yahoo.com","S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==","1992-02-01","0","0","Bình Thuận","01689338965","Hoàng Mai - Hà Nội","1","2014-05-30 15:19:50","1");
INSERT INTO user VALUES("UID00009","trinh","Đô Trịnh","thanhdo.trinh@gmail.com","jRABb3xRkJ0bgt6Dj6ZD/YRnuCofWi0hCABt8luu+66s+hsh8ZwZCd6UKJSVyyLpIB8gxaxHGJC8+K8aImIjCg==","2014-06-27","1","0","Hà Nội","09877","định công - hoàng mai - hà nội","0","2014-06-01 12:00:27","1");


