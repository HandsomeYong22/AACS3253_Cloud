-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 09:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbranch`
--

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
  `BranchImage` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblbranch`
--

INSERT INTO `tblbranch` (`BranchID`, `BranchName`, `ContactNo`, `Email`, `Address1`, `Address2`, `Postcode`, `State`, `Country`, `BranchImage`) VALUES
('001', 'Johor', '075889222', 'gogotravel.jh@gmail.com', 'No.88, 8A-8B, Jalan Sutera 2, ', 'Taman Sentosa', '80150', 'Johor', 'Malaysia', 0x696d6167652f6f6666696365312e706e67),
('002', 'Penang', '045889222', 'gogotravel.pg@gmail.com', '4, Jalan Rangoon', 'George Town', '10400', 'Pulau Pinang', 'Malaysia', 0x696d6167652f6f6666696365322e706e67),
('003', 'Puchong', '0358889222', 'gogotravel.pc@gmail.com', 'No.G-3-1, Blok F, Setia Walk', 'Persiaran Wawasan, Pusat Bandar Puchong', '47160', 'Selangor', 'Malaysia', 0x696d6167652f6f6666696365332e706e67),
('004', 'Kedah', '045264759', 'gogotravel.kd@gmail.com	', '216A, Jalan Datuk Kumbar', 'Kampung Alor Menong', '05460', 'Alor Setar, Kedah', 'Malaysia', 0x696d6167652f6f6666696365332e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `UserType` char(1) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `interface` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`UserType`, `Description`, `interface`) VALUES
('A', 'Admin', 'admin/index.php'),
('U', 'User', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeature`
--

CREATE TABLE `tblfeature` (
  `FeatureID` varchar(255) NOT NULL,
  `FeatureTitle` varchar(255) DEFAULT '',
  `FeatureContent` varchar(255) DEFAULT '',
  `FeatureIcon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblfeature`
--

INSERT INTO `tblfeature` (`FeatureID`, `FeatureTitle`, `FeatureContent`, `FeatureIcon`) VALUES
('001', 'Best Price Guarentee', 'You get the best possible price on our travel packages !  We guarentee it !', 'fa fa-money fa-2x'),
('002', 'Best Graduation Bouquets', 'Looking to celebrate a special graduation? We have the most beautiful graduation flowers just for you!', 'fa fa-thumbs-up fa-2x'),
('003', '24 x 7 Support', 'Interest about any travel packages? We have 24/7 quick- response customer service ! ', 'fa fa-question-circle fa-2x');

-- --------------------------------------------------------

--
-- Table structure for table `tblinternational`
--

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
  `PackageImg` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblinternational`
--

INSERT INTO `tblinternational` (`PackageID`, `PackageName`, `Country`, `StartDate`, `EndDate`, `Price`, `Extra1`, `Extra2`, `Extra3`, `Extra4`, `Extra5`, `PackageImg`) VALUES
('I001', '5D4N Central of Vietnam Trip', 'Vietnam', '2021-11-21', '2021-11-25', 2588.00, 'Accomomodation, tours, and meals as per itinerary', 'Airport & Fuel Taxes(Subject to Charge)', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696d6167652f766965746e616d322e6a7067),
('I002', '7D6N Taiwan Trip', 'Taiwan', '2021-12-15', '2021-12-21', 2888.00, 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696d6167652f74616977616e312e6a7067),
('I003', '5D4N Thailand Trip', 'Thailand', '2021-10-15', '2021-10-20', 1000.00, 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes(Subject to Charge)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Daily meal', 0x696d6167652f746861696c616e64312e6a7067),
('I004', '6D5N Japan Trip', 'Japan', '2021-12-15', '2021-12-20', 5888.00, 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM250 Food Rebate Voucher', 0x696d6167652f6a6170616e322e6a7067),
('I005', '4D3N Korea Trip', 'Korea', '2021-10-16', '2021-10-19', 4888.00, 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Round trip transfer', 0x696d6167652f6b6f7265612e6a7067),
('I006', '5D4N Perth Trip', 'Perth, Austrailia', '2022-04-22', '2022-04-26', 5199.00, 'Accommodation as per itinerary', 'Board a Scenic Flight for Pink Lake Best Viewing, Pinnacles Tour in Nambung National Park, Experience Sand Boarding at Lancelin', 'Return economy airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Half Lobster meal, International Buffet, Western Meal', 0x696d6167652f70657274682e6a7067),
('I007', '9D7N Cheng Du', 'Cheng Du, China', '2022-05-05', '2022-05-13', 4899.00, 'Accommodation', 'Jiuzhai Valley Scenery View, HuangLong Scenic Spot, Chunxi Road Walking Street', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'Daily Breakfast prepared by hotel', 0x696d6167652f6368656e6764752e6a7067),
('I008', '5D4N New Zealand Trip', 'New Zealand', '2022-02-10', '2022-02-14', 4999.00, 'Accommodation, tours and meals as per itinerary', 'Airport & Fuel Taxes (Subject to change)', 'Round trip airfare', 'Basic Tipping / Gratuities for Tour Leader, Tourist Guide and Driver', 'RM200 Food Rebate Voucher', 0x696d6167652f6e65777a65616c616e642e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tblinternationalappoint`
--

CREATE TABLE `tblinternationalappoint` (
  `AppointID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `InternationalPackageID` varchar(10) DEFAULT '',
  `TravelDate` date DEFAULT NULL,
  `UserID` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblinternationalappoint`
--

INSERT INTO `tblinternationalappoint` (`AppointID`, `Date`, `InternationalPackageID`, `TravelDate`, `UserID`, `Status`) VALUES
('IA001', '2021-06-22', 'I001', '2021-11-21', 'gohjoey331@gmail.com', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocal`
--

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
  `PackageImg` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbllocal`
--

INSERT INTO `tbllocal` (`PackageID`, `PackageName`, `Location`, `StartDate`, `EndDate`, `Price`, `Extra1`, `Extra2`, `Extra3`, `Extra4`, `Extra5`, `PackageImg`) VALUES
('L001', 'Sunshine Bloom', 'Penang', '2021-12-01', '2021-12-03', 188.00, 'Bright sunflowers paired with baby\'s breath to celebrate graduation with warmth and hope.', '2 x Rainbow Skywalk & Observatory Deck Adult Tickets', '2 x The Top Boutique Aquarium Adult Tickets', 'Free Travel Guide', 'RM30 Rebate Voucher', 0x696d6167652f746865666c6f726973746d61726b65742d6d697373666c6f7765722e636f6d2e6d792d33393730342d35343637345f353030783530302e6a7067),
('L002', 'Elegant Rose Charm', 'Kuala Lumpur', '2021-12-21', '2021-12-22', 188.00, 'A mix of red roses and white carnations to symbolize gratitude and passionate dreams.', '1 Sumptuous Lunch with Ming Palace for 2 Pax', '2 X KL Tower Sky Deck Adult tickets', 'Free Travel Guide', 'RM10 Rebate Voucher', 0x696d6167652f4e4c336830644f6f313634373837393534322d3134353778313832342e6a7067),
('L003', 'Purple Dream', 'Langkawi, Kedah', '2021-11-20', '2021-11-23', 368.00, 'Lavender-toned bouquet bringing a sense of romance and mystery to this special day.', 'Free pick up service at Jetty Langkawi', '2 x Ferry or cable car tickets', 'Free Travel Guide', '10% Next Trip Discount', 0x696d6167652f707572706c652d70617373696f6e2d33323038363231303534333830315f31393436782e77656270),
('L004', 'Classic Graduation Mix', 'Malacca', '2021-12-20', '2021-12-21', 388.00, 'A classic graduation bouquet with sunflowers, roses, and lush greens for a timeless look.', '1 x Happy Lucky Draw Chance', '2 x Baba & Nyonya Heritage Museum Ticket', 'Free Travel Guide', '1 Scrumptious Lunch with Famosa Chicken Rice Ball for 2 Pax', 0x696d6167652f746865666c6f726973746d61726b65742d62757474616e64626c6f6f6d2e666c6f72616c2d33363436362d34363838335f353030783530302e4a504547),
('L005', 'Pink Celebration', 'Desaru, Johor', '2021-12-29', '2021-12-31', 588.00, 'A sweet mix of pink roses and lilies, full of youthful energy and charm.', '2 rooms X 1 night stay at Hard Rock Hotel with Daily Breakfast', '4 X Desaru Fruit Farm and Sky Mirror Tickets', '4 X Adventure Waterpark Desaru Coast Tickets', 'RM30  Food or Hotel Rebate Voucher', 0x696d6167652f32343835332e6a7067),
('L006', 'Daisy Fresh', 'Sandakan, Sabah', '2021-12-01', '2021-12-04', 1888.00, 'Simple yet bright daisy bouquet to represent a pure heart and fresh beginnings.', 'Return Sandakan Airport/ hotel transfer', 'Itinerary, entrance fee & meals stated as above', 'Tour guide and driver tipping', 'English / Mandarin Speaking Guide', 0x696d6167652f322e6a7067),
('L007', 'Blue Sky Bouquet', 'Kuching, Sarawak', '2022-03-03', '2022-03-06', 749.00, 'A fresh and clean blue-themed bouquet, perfect for congratulating the gentlemen graduates.', 'Meals : As per itinerary above', 'All entrance fee as stated in itinerary', 'English / Mandarin speaking guide', 'Return airport - hotel transfer', 0x696d6167652f447265616d5f4368617365725f426c75655f426f75717565742e706e67),
('L008', 'Golden Wrap Glory', 'Cameron Highlands, Pahang', '2021-12-25', '2021-12-27', 488.00, 'Bold red blooms wrapped in golden paper — a luxurious and powerful statement for graduates.', 'Strawberry Farms, Vegetable Farms, Tea Plantations, Flower Nurseries, Butterfly Centre and Honeybee Farms.', 'All entrance fee as stated in itinerary', 'Tour guide and driver tipping', 'Return airport - hotel transfer', 0x696d6167652f476f6c64656e5f426c61636b5f426f75717565745f4f665f5265645f526f7365735f32335f393133382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocalappoint`
--

CREATE TABLE `tbllocalappoint` (
  `AppointID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `LocalPackageID` varchar(10) DEFAULT '',
  `TravelDate` date DEFAULT NULL,
  `UserID` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbllocalappoint`
--

INSERT INTO `tbllocalappoint` (`AppointID`, `Date`, `LocalPackageID`, `TravelDate`, `UserID`, `Status`) VALUES
('LA001', '0000-00-00', 'L001', '0000-00-00', 'aliabu@gmail.com', 'Pending'),
('LA002', '2021-07-11', 'L007', '2022-03-03', 'gohjoey331@gmail.com', 'Pending'),
('LA003', '2025-04-28', 'L002', '2021-12-21', 'aliabu@gmail.com', 'paid'),
('LA004', '2025-04-28', 'L001', '2021-12-01', 'aliabu@gmail.com', 'paid'),
('LA005', '0000-00-00', 'L002', '0000-00-00', 'aliabu@gmail.com', 'Pending'),
('LA006', '0000-00-00', 'L003', '0000-00-00', 'aliabu@gmail.com', 'Pending'),
('LA007', '0000-00-00', 'L006', '0000-00-00', 'aliabu@gmail.com', 'Pending'),
('LA008', '0000-00-00', 'L001', '2025-05-02', 'aliabu@gmail.com', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tblslide`
--

CREATE TABLE `tblslide` (
  `SlideID` int(10) NOT NULL,
  `SlideTopic` varchar(255) DEFAULT NULL,
  `SlideTitle` varchar(255) DEFAULT NULL,
  `SlideContent` varchar(255) DEFAULT NULL,
  `SlideImage` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblslide`
--

INSERT INTO `tblslide` (`SlideID`, `SlideTopic`, `SlideTitle`, `SlideContent`, `SlideImage`) VALUES
(1, 'Welcome to', ' GOGOGraduate !', 'We craft…You cherish.', 0x696d6167652f706e67747265652d666c6f7765722d6261636b67726f756e642d62616e6e65722d696d6167655f3137343834322e6a7067),
(3, 'Welcome to', 'GOGOGraduate !', 'We design…You deliver joy.', 0x696d6167652f63616d65726f6e2e6a7067),
(6, 'Welcome to', 'GOGOGraduate !', 'We bloom…You celebrate.', 0x696d6167652f62616e6e65722d6b6f726561322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` varchar(40) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UserType` char(1) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `PostCode` varchar(10) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `avatar` longblob DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `securequestion` varchar(255) DEFAULT NULL,
  `secureanswer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `Password`, `UserType`, `Name`, `Address1`, `Address2`, `City`, `PostCode`, `State`, `Country`, `Email`, `avatar`, `dob`, `securequestion`, `secureanswer`) VALUES
('admin@yahoo.com', '123', 'A', 'Administrator', '123', 'Jln Bunga Cempaka', 'Kuching', '93050', 'Sarawak', 'Malaysia', 'admin@yahoo.com', 0x696d6167652f61646d696e312e706e67, '2002-01-31', 'What is your favorite country?', 'Korea'),
('aliabu@gmail.com', '123', 'U', 'Ali Abu', '10, Jalan ABC', 'Taman DEF', 'Johor Bahru', '81300', 'Johor', 'Malaysia', 'aliabu@gmail.com', 0x696d6167652f616c696162752e706e67, '2003-02-21', 'What is your favorite country?', 'Korea'),
('gohjoey331@gmail.com', '123', 'U', 'Goh Jo Ey', '8, JALAN SELAT 123', 'TAMAN DATO PENGGAWA BARAT', 'JOHOR BAHRU', '81200', 'Johor', 'Malaysia', 'gohjoey331@hotmail.com', 0x696d6167652f6a6f65792e706e67, '1999-03-31', 'What is your favorite country?', 'Korea'),
('ngjinger0129@gmail.com', '1234', 'U', 'Ng Jing Er', '40', 'Lorong 1', 'Nibong Tebal', '14300', 'Pulau Pinang', 'Malaysia', 'ngjinger0129@gmail.com', 0x696d6167652f6176617461722e706e67, '1999-01-29', 'What was your first car?', 'BMW'),
('ngjinger@graduate.utm.my', '12', 'U', 'jinger', '40, Lorong Tempua 1', 'Taman Golden Jade', 'Nibong Tebal', '14300', 'Pulau Pinang', 'Malaysia', 'ngjinger@graduate.utm.my', 0x696d6167652f343034333235312d6176617461722d66656d616c652d6769726c2d776f6d616e5f3131333239312d72656d6f766562672d707265766965772e706e67, '1999-01-29', 'What is the city you born?', 'BM'),
('sheikhnasir@yahoo.com', '123', 'U', 'Sheikh Nasir', '10, Jalan ABC', 'Taman DEF', 'Johor Bahru', '81300', 'Johor', 'Malaysia', 'sheikhnasir@yahoo.com', 0x696d6167652f736865696b686e617369722e706e67, '1987-06-21', 'What is your favorite country?', 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `webcontents`
--

CREATE TABLE `webcontents` (
  `webid` int(11) NOT NULL,
  `webtitle` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webcontents`
--

INSERT INTO `webcontents` (`webid`, `webtitle`, `header`, `topic`, `content`) VALUES
(1, 'Gogo Graduate', 'Gogo Graduate Sdn Bhd', 'Welcome To Gogo Graduate Websites', 'Welcome To Gogo Graduate Websites'),
(2, 'Admin Settings', 'Admin', 'Manage Websites', 'Select a choice to manage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbranch`
--
ALTER TABLE `tblbranch`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`UserType`);

--
-- Indexes for table `tblfeature`
--
ALTER TABLE `tblfeature`
  ADD PRIMARY KEY (`FeatureID`);

--
-- Indexes for table `tblinternational`
--
ALTER TABLE `tblinternational`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `tblinternationalappoint`
--
ALTER TABLE `tblinternationalappoint`
  ADD PRIMARY KEY (`AppointID`),
  ADD KEY `tblappoint_ibfk_2` (`UserID`),
  ADD KEY `tblappoint_ibfk_1` (`InternationalPackageID`);

--
-- Indexes for table `tbllocal`
--
ALTER TABLE `tbllocal`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `tbllocalappoint`
--
ALTER TABLE `tbllocalappoint`
  ADD PRIMARY KEY (`AppointID`),
  ADD KEY `tblappoint_ibfk_2` (`UserID`),
  ADD KEY `tblappoint_ibfk_1` (`LocalPackageID`);

--
-- Indexes for table `tblslide`
--
ALTER TABLE `tblslide`
  ADD PRIMARY KEY (`SlideID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserType` (`UserType`);

--
-- Indexes for table `webcontents`
--
ALTER TABLE `webcontents`
  ADD PRIMARY KEY (`webid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblinternationalappoint`
--
ALTER TABLE `tblinternationalappoint`
  ADD CONSTRAINT `tblinternationalappoint_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `tbluser` (`UserID`),
  ADD CONSTRAINT `tblinternationalappoint_ibfk_3` FOREIGN KEY (`InternationalPackageID`) REFERENCES `tblinternational` (`PackageID`);

--
-- Constraints for table `tbllocalappoint`
--
ALTER TABLE `tbllocalappoint`
  ADD CONSTRAINT `tbllocalappoint_ibfk_1` FOREIGN KEY (`LocalPackageID`) REFERENCES `tbllocal` (`PackageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbllocalappoint_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `tbluser` (`UserID`);

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `tblcategory` (`UserType`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
