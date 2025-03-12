/*
Navicat MySQL Data Transfer

Source Server         : mysql_local
Source Server Version : 100417
Source Host           : localhost:3306
Source Database       : myproject

Target Server Type    : MYSQL
Target Server Version : 100417
File Encoding         : 65001

Date: 2021-06-20 16:24:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tblbranch
-- ----------------------------
DROP TABLE IF EXISTS `tblbranch`;
CREATE TABLE `tblbranch` (
  `BranchID` varchar(255) NOT NULL,
  `BranchName` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `BranchImage` longblob DEFAULT NULL,
  PRIMARY KEY (`BranchID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblbranch
-- ----------------------------
INSERT INTO `tblbranch` VALUES ('001', 'Johor', '075889222', 'gogotravel.jh@gmail.com', 'No.88, 8A-8B, Jalan Sutera 2, ', 'Taman Sentosa', '80150', 'Johor', 'Malaysia', 0x696D6167652F6F6666696365312E706E67);
INSERT INTO `tblbranch` VALUES ('002', 'Penang', '045889222', 'gogotravel.pg@gmail.com', '4, Jalan Rangoon', 'George Town', '10400', 'Pulau Pinang', 'Malaysia', 0x696D6167652F6F6666696365322E706E67);
INSERT INTO `tblbranch` VALUES ('003', 'Puchong', '0358889222', 'gogotravel.pc@gmail.com', 'No.G-3-1, Blok F, Setia Walk', 'Persiaran Wawasan, Pusat Bandar Puchong', '47160', 'Selangor', 'Malaysia', 0x696D6167652F6F6666696365332E706E67);
INSERT INTO `tblbranch` VALUES ('004', 'Kedah', '045264759', 'gogotravel.kd@gmail.com	', '216A, Jalan Datuk Kumbar', 'Kampung Alor Menong', '05460', 'Alor Setar, Kedah', 'Malaysia', 0x696D6167652F6F6666696365332E706E67);

-- ----------------------------
-- Table structure for tblcategory
-- ----------------------------
DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE `tblcategory` (
  `UserType` char(1) COLLATE utf8_bin NOT NULL,
  `Description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `interface` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`UserType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of tblcategory
-- ----------------------------
INSERT INTO `tblcategory` VALUES ('A', 'Admin', 'admin/index.php');
INSERT INTO `tblcategory` VALUES ('U', 'User', 'index.php');

-- ----------------------------
-- Table structure for tblfeature
-- ----------------------------
DROP TABLE IF EXISTS `tblfeature`;
CREATE TABLE `tblfeature` (
  `FeatureID` varchar(255) NOT NULL,
  `FeatureTitle` varchar(255) DEFAULT '',
  `FeatureContent` varchar(255) DEFAULT '',
  `FeatureIcon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FeatureID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblfeature
-- ----------------------------
INSERT INTO `tblfeature` VALUES ('001', 'Best Price Guarentee', 'You get the best possible price on our travel packages !  We guarentee it !', 'fa fa-money fa-2x');
INSERT INTO `tblfeature` VALUES ('002', 'Best Travel Agent', 'Looking to plan a travel trip ?  We have the best online travel agent for you !  ', 'fa fa-thumbs-up fa-2x');
INSERT INTO `tblfeature` VALUES ('003', '24 x 7 Support', 'Interest about any travel packages? We have 24/7 quick- response customer service ! ', 'fa fa-question-circle fa-2x');

-- ----------------------------
-- Table structure for tblinternational
-- ----------------------------
DROP TABLE IF EXISTS `tblinternational`;
CREATE TABLE `tblinternational` (
  `PackageID` varchar(10) NOT NULL,
  `PackageName` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Extra1` varchar(255) DEFAULT NULL,
  `Extra2` varchar(255) DEFAULT NULL,
  `Extra3` varchar(255) DEFAULT NULL,
  `Extra4` varchar(255) DEFAULT NULL,
  `Extra5` varchar(255) DEFAULT NULL,
  `PackageImg` longblob DEFAULT NULL,
  PRIMARY KEY (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblinternational
-- ----------------------------
INSERT INTO `tblinternational` VALUES ('I001', '5D4N Central of Vietnam Trip', 'Vietnam', '2021-11-21', '2021-11-25', '2588.00', 'Accomomodation, tours, and meals as per itinerary', 'Airport & Fuel Taxes(Subject to Charge)', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696D6167652F766965746E616D322E6A7067);
INSERT INTO `tblinternational` VALUES ('I002', '7D6N Taiwan Trip', 'Taiwan', '2021-12-15', '2021-12-21', '2888.00', 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696D6167652F74616977616E312E6A7067);
INSERT INTO `tblinternational` VALUES ('I003', '5D4N Thailand Trip', 'Thailand', '2021-10-15', '2021-10-20', '1000.00', 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes(Subject to Charge)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Daily meal', 0x696D6167652F746861696C616E64312E6A7067);
INSERT INTO `tblinternational` VALUES ('I004', '6D5N Japan Trip', 'Japan', '2021-12-15', '2021-12-20', '5888.00', 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM250 Food Rebate Voucher', 0x696D6167652F6A6170616E322E6A7067);
INSERT INTO `tblinternational` VALUES ('I005', '4D3N Korea Trip', 'Korea', '2021-10-16', '2021-10-19', '4888.00', 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Round trip transfer', 0x696D6167652F6B6F7265612E6A7067);
INSERT INTO `tblinternational` VALUES ('I006', '5D4N Perth Trip', 'Perth, Austrailia', '2022-04-22', '2022-04-26', '5199.00', 'Accommodation as per itinerary', 'Board a Scenic Flight for Pink Lake Best Viewing, Pinnacles Tour in Nambung National Park, Experience Sand Boarding at Lancelin', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Half Lobster meal, International Buffet, Western Meal', 0x696D6167652F70657274682E6A7067);
INSERT INTO `tblinternational` VALUES ('I007', '9D7N Cheng Du', 'Cheng Du, China', '2022-05-05', '2022-05-13', '4899.00', 'Accommodation', 'Jiuzhai Valley Scenery View, HuangLong Scenic Spot, Chunxi Road Walking Street', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Daily Breakfast prepared by hotel', 0x696D6167652F6368656E6764752E6A7067);
INSERT INTO `tblinternational` VALUES ('I008', '5D4N New Zealand Trip', 'New Zealand', '2022-02-10', '2022-02-14', '4999.00', 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696D6167652F6E65777A65616C616E642E6A7067);

-- ----------------------------
-- Table structure for tblinternationalappoint
-- ----------------------------
DROP TABLE IF EXISTS `tblinternationalappoint`;
CREATE TABLE `tblinternationalappoint` (
  `AppointID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `InternationalPackageID` varchar(10) DEFAULT '',
  `TravelDate` date DEFAULT NULL,
  `UserID` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AppointID`),
  KEY `tblappoint_ibfk_2` (`UserID`),
  KEY `tblappoint_ibfk_1` (`InternationalPackageID`),
  CONSTRAINT `tblinternationalappoint_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `tbluser` (`UserID`),
  CONSTRAINT `tblinternationalappoint_ibfk_3` FOREIGN KEY (`InternationalPackageID`) REFERENCES `tblinternational` (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblinternationalappoint
-- ----------------------------
INSERT INTO `tblinternationalappoint` VALUES ('IA000', '2021-06-21', 'I002', '2021-12-15', 'aliabu@gmail.com', 'Pending');
INSERT INTO `tblinternationalappoint` VALUES ('IA001', '2021-06-22', 'I001', '2021-11-21', 'gohjoey331@gmail.com', 'Paid');

-- ----------------------------
-- Table structure for tbllocal
-- ----------------------------
DROP TABLE IF EXISTS `tbllocal`;
CREATE TABLE `tbllocal` (
  `PackageID` varchar(10) NOT NULL,
  `PackageName` varchar(255) DEFAULT '',
  `Location` varchar(255) DEFAULT '',
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Extra1` varchar(255) DEFAULT '',
  `Extra2` varchar(255) DEFAULT NULL,
  `Extra3` varchar(255) DEFAULT NULL,
  `Extra4` varchar(255) DEFAULT NULL,
  `Extra5` varchar(255) DEFAULT '',
  `PackageImg` longblob DEFAULT NULL,
  PRIMARY KEY (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbllocal
-- ----------------------------
INSERT INTO `tbllocal` VALUES ('L001', '3D2N Penang Trip', 'Penang', '2021-12-01', '2021-12-03', '588.00', '1 room x 2 nights stay at G-hotel with Daily Breakfast', '2 x Rainbow Skywalk & Observatory Deck Adult Tickets', '2 x The Top Boutique Aquarium Adult Tickets', 'Free Travel Guide', 'RM30 Rebate Voucher', 0x696D6167652F50656E616E67322E6A7067);
INSERT INTO `tbllocal` VALUES ('L002', '2D1N Kuala Lumpur Tour', 'Kuala Lumpur', '2021-12-21', '2021-12-22', '388.00', '1 room X 1 night stay at Arenaa Star Hotel with Daily Breakfast', '1 Sumptuous Lunch with Ming Palace for 2 Pax', '2 X KL Tower Sky Deck Adult tickets', 'Free Travel Guide', 'RM10 Rebate Voucher', 0x696D6167652F4B75616C614C756D707572322E6A7067);
INSERT INTO `tbllocal` VALUES ('L003', '4D3N Langkawi Trip', 'Langkawi, Kedah', '2021-11-20', '2021-11-23', '368.00', '3 nights stay at homestay', 'Free pick up service at Jetty Langkawi', '2 x Ferry or cable car tickets', 'Free Travel Guide', '10% Next Trip Discount', 0x696D6167652F6C616E676B617769322E6A7067);
INSERT INTO `tbllocal` VALUES ('L004', '2D1N Malacca Trip', 'Malacca', '2021-12-20', '2021-12-21', '388.00', '1 room X 1 night stay at Swiss Garden Hotel with Daily Breakfast', '1 x Happy Lucky Draw Chance', '2 x Baba & Nyonya Heritage Museum Ticket', 'Free Travel Guide', '1 Scrumptious Lunch with Famosa Chicken Rice Ball for 2 Pax', 0x696D6167652F6D656C616B61322E6A7067);
INSERT INTO `tbllocal` VALUES ('L005', '3D2N Desaru Trip', 'Desaru, Johor', '2021-12-29', '2021-12-31', '588.00', '2 rooms X 1 night stay at Forest City Phoenix International Marina Hotel with Daily Breakfast', '2 rooms X 1 night stay at Hard Rock Hotel with Daily Breakfast', '4 X Desaru Fruit Farm and Sky Mirror Tickets', '4 X Adventure Waterpark Desaru Coast Tickets', 'RM30  Food or Hotel Rebate Voucher', 0x696D6167652F6465736172752E6A7067);
INSERT INTO `tbllocal` VALUES ('L006', '3D2N Sabah Trip', 'Sandakan, Sabah', '2021-12-01', '2021-12-04', '1888.00', '2 nights accommodation', 'Return Sandakan Airport/ hotel transfer', 'Itinerary, entrance fee & meals stated as above', 'Tour guide and driver tipping', 'English / Mandarin Speaking Guide', 0x696D6167652F7361626168322E6A7067);
INSERT INTO `tbllocal` VALUES ('L007', '4D3N Kuching Trip', 'Kuching, Sarawak', '2022-03-03', '2022-03-06', '749.00', '3 night accommodation at selected hotel with daily breakfast', 'Meals : As per itinerary above', 'All entrance fee as stated in itinerary', 'English / Mandarin speaking guide', 'Return airport - hotel transfer', 0x696D6167652F6B756368696E672E6A7067);
INSERT INTO `tbllocal` VALUES ('L008', '3D2N Cameron Highlands Trip', 'Cameron Highlands, Pahang', '2021-12-25', '2021-12-27', '488.00', 'Accommodation, tours and meals as per itinerary', 'Strawberry Farms, Vegetable Farms, Tea Plantations, Flower Nurseries, Butterfly Centre and Honeybee Farms.', 'All entrance fee as stated in itinerary', 'Tour guide and driver tipping', 'Return airport - hotel transfer', 0x696D6167652F63616D65726F6E2E6A7067);

-- ----------------------------
-- Table structure for tbllocalappoint
-- ----------------------------
DROP TABLE IF EXISTS `tbllocalappoint`;
CREATE TABLE `tbllocalappoint` (
  `AppointID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `LocalPackageID` varchar(10) DEFAULT '',
  `TravelDate` date DEFAULT NULL,
  `UserID` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AppointID`),
  KEY `tblappoint_ibfk_2` (`UserID`),
  KEY `tblappoint_ibfk_1` (`LocalPackageID`),
  CONSTRAINT `tbllocalappoint_ibfk_1` FOREIGN KEY (`LocalPackageID`) REFERENCES `tbllocal` (`PackageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tbllocalappoint_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `tbluser` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbllocalappoint
-- ----------------------------
INSERT INTO `tbllocalappoint` VALUES ('LA000', '2021-06-21', 'L002', '2021-12-21', 'sheikhnasir@yahoo.com', 'Pending');
INSERT INTO `tbllocalappoint` VALUES ('LA001', '2021-07-02', 'L002', '2021-12-21', 'gohjoey331@gmail.com', 'Pending');
INSERT INTO `tbllocalappoint` VALUES ('LA002', '2021-07-11', 'L007', '2022-03-03', 'gohjoey331@gmail.com', 'Pending');

-- ----------------------------
-- Table structure for tblslide
-- ----------------------------
DROP TABLE IF EXISTS `tblslide`;
CREATE TABLE `tblslide` (
  `SlideID` int(10) NOT NULL,
  `SlideTopic` varchar(255) DEFAULT NULL,
  `SlideTitle` varchar(255) DEFAULT NULL,
  `SlideContent` varchar(255) DEFAULT NULL,
  `SlideImage` longblob DEFAULT NULL,
  PRIMARY KEY (`SlideID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblslide
-- ----------------------------
INSERT INTO `tblslide` VALUES ('1', 'Welcome to', ' GOGOTravel !', 'We plan…You pack.', 0x696D6167652F616972706C616E65382E6A7067);
INSERT INTO `tblslide` VALUES ('2', 'Cuti-cuti Malaysia', 'Experience Malaysia Like Never Before', 'jom enjoy a nice break in Malaysia', 0x696D6167652F6D616C6179736961332E6A7067);
INSERT INTO `tblslide` VALUES ('3', 'Thailand', 'The Land of Smiles', 'a tropical paradise', 0x696D6167652F746861692E6A7067);
INSERT INTO `tblslide` VALUES ('4', 'Japan', 'The Land of the Rising Sun', 'enjoy the best natural scenery', 0x696D6167652F6A6170616E2E6A7067);
INSERT INTO `tblslide` VALUES ('5', 'Vietnam', 'The Land of the “Ascending Dragon', 'explore wonderful natural beauty', 0x696D6167652F766965746E616D2E6A7067);
INSERT INTO `tblslide` VALUES ('6', 'Korea', 'The Land of the Morning Calm', 'take a look on this mix of old and new korea culture', 0x696D6167652F62616E6E65722D6B6F726561322E6A7067);

-- ----------------------------
-- Table structure for tbluser
-- ----------------------------
DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE `tbluser` (
  `UserID` varchar(40) COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `UserType` char(1) COLLATE utf8_bin DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Address1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Address2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `PostCode` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `State` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `avatar` longblob DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `securequestion` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `secureanswer` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  KEY `UserType` (`UserType`),
  CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `tblcategory` (`UserType`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of tbluser
-- ----------------------------
INSERT INTO `tbluser` VALUES ('admin@yahoo.com', '123', 'A', 'Administrator', '123', 'Jln Bunga Cempaka', 'Kuching', '93050', 'Sarawak', 'Malaysia', 'admin@yahoo.com', 0x696D6167652F61646D696E312E706E67, '2002-01-31', 'What is your favorite country?', 'Korea');
INSERT INTO `tbluser` VALUES ('aliabu@gmail.com', '123', 'U', 'Ali Abu', '10, Jalan ABC', 'Taman DEF', 'Johor Bahru', '81300', 'Johor', 'Malaysia', 'aliabu@gmail.com', 0x696D6167652F616C696162752E706E67, '2003-02-21', 'What is your favorite country?', 'Korea');
INSERT INTO `tbluser` VALUES ('gohjoey331@gmail.com', '123', 'U', 'Goh Jo Ey', '8, JALAN SELAT 123', 'TAMAN DATO PENGGAWA BARAT', 'JOHOR BAHRU', '81200', 'Johor', 'Malaysia', 'gohjoey331@hotmail.com', 0x696D6167652F6A6F65792E706E67, '1999-03-31', 'What is your favorite country?', 'Korea');
INSERT INTO `tbluser` VALUES ('ngjinger0129@gmail.com', '1234', 'U', 'Ng Jing Er', '40', 'Lorong 1', 'Nibong Tebal', '14300', 'Pulau Pinang', 'Malaysia', 'ngjinger0129@gmail.com', 0x696D6167652F6176617461722E706E67, '1999-01-29', 'What was your first car?', 'BMW');
INSERT INTO `tbluser` VALUES ('ngjinger@graduate.utm.my', '12', 'U', 'jinger', '40, Lorong Tempua 1', 'Taman Golden Jade', 'Nibong Tebal', '14300', 'Pulau Pinang', 'Malaysia', 'ngjinger@graduate.utm.my', 0x696D6167652F343034333235312D6176617461722D66656D616C652D6769726C2D776F6D616E5F3131333239312D72656D6F766562672D707265766965772E706E67, '1999-01-29', 'What is the city you born?', 'BM');
INSERT INTO `tbluser` VALUES ('sheikhnasir@yahoo.com', '123', 'U', 'Sheikh Nasir', '10, Jalan ABC', 'Taman DEF', 'Johor Bahru', '81300', 'Johor', 'Malaysia', 'sheikhnasir@yahoo.com', 0x696D6167652F736865696B686E617369722E706E67, '1987-06-21', 'What is your favorite country?', 'Korea');

-- ----------------------------
-- Table structure for webcontents
-- ----------------------------
DROP TABLE IF EXISTS `webcontents`;
CREATE TABLE `webcontents` (
  `webid` int(11) NOT NULL,
  `webtitle` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`webid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of webcontents
-- ----------------------------
INSERT INTO `webcontents` VALUES ('1', 'Gogo Travel', 'Gogo Travel Sdn Bhd', 'Welcome To Gogo Travel Websites', 'Welcome To Gogo Travel Websites');
INSERT INTO `webcontents` VALUES ('2', 'Admin Settings', 'Admin', 'Manage Websites', 'Select a choice to manage');
