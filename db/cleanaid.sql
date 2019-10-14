-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 09:14 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleanaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(26) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `link` varchar(156) DEFAULT NULL,
  `image_path` varchar(56) DEFAULT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `address`, `link`, `image_path`, `create_date`) VALUES
(1, 'Cloud It Limited', 1686799560, '8/5 nikunja 1,uttara', 'http://clouditbd.com/', 'cloud-it.png', '2019-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `Project_name` varchar(26) DEFAULT NULL,
  `image_type` smallint(4) DEFAULT NULL,
  `image_path` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `Project_name`, `image_type`, `image_path`, `date`) VALUES
(2, 'ttt', 2, 'Jellyfish.jpg', '2019-01-21'),
(3, 'ttt', 2, 'Lighthouse.jpg', '2019-01-21'),
(5, 'clean a office', 1, 'pic2.jpg', '2019-01-21'),
(6, 'clean a office', 1, 'pic3.jpg', '2019-01-21'),
(7, 'clean a office', 1, 'pic4.jpg', '2019-01-21'),
(8, 'clean a office', 1, 'pic5.jpg', '2019-01-21'),
(9, 'clean a office', 1, 'pic6.jpg', '2019-01-21'),
(10, 'commercial project', 3, 'pic11.jpg', '2019-01-21'),
(11, 'commercial project', 3, 'pic31.jpg', '2019-01-21'),
(13, 'commercial project', 3, 'pic51.jpg', '2019-01-21'),
(14, 'commercial project', 3, 'pic61.jpg', '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `subject` varchar(26) DEFAULT NULL,
  `message` varchar(156) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `subject`, `message`, `date`) VALUES
(1, 'test', 1725848855, 'sikder@gmail.com', 'tst', 'asasas', '2019-01-20'),
(2, 'testasas', 1725848855, 'sikder@gmail.com', 'tstss', 'asasas', '2019-01-20'),
(3, 'shahed', 1725848855, 'sikder@gmail.com', 'tstss', 'asasasss', '2019-01-20'),
(4, 'test', 1725848855, 'sikder@gmail.com', '', 'asas', '2019-01-20'),
(5, 'asas', 234324, 'asas', 'asas', 'asasas', '2019-01-20'),
(6, 'admin', 1725848855, 'asdf@gmail.com', 'asd', 'asd65as4d65as4d6546d54', '2019-01-20'),
(7, 'dasd', 564654, 'sdfsdf', 'sdf', 'sfsdfsdfsdf', '2019-01-20'),
(8, 'sdfg', 6546464, 'milon@gmail.com', 'd455', 'sdsadas', '2019-01-20'),
(9, '34d', 2323, 'sssss@gmail.com', '5456456', '23ewrerdf', '2019-01-20'),
(10, 'sudip', 1725848855, 'asdf@gmail.com', '564654asd', 'asssd', '2019-01-20'),
(11, 'sudip55', 1725848855, 'asdf@gmail.com', '564654asd', 'asssd', '2019-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` bigint(20) NOT NULL,
  `request_by` varchar(26) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `requested_service` smallint(2) NOT NULL,
  `details` varchar(156) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `final_status` smallint(2) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `request_by`, `phone`, `email`, `requested_service`, `details`, `date`, `final_status`) VALUES
(1, 'admin', 1619895351, 'sikder@gmail.com', 1, 'test', '2019-01-20', 1),
(2, 'shahed', 1686799560, 'cseshahed@gmail.com', 3, 'I need this service asap', '2019-01-20', 1),
(3, 'sunit', 1725848855, 'info@parcelxpressbd.com', 5, 'ssss', '2019-01-20', 0),
(4, 'sdsds', 1725848855, 'sssss@gmail.com', 6, 'dsadf', '2019-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Cockroach Control Service'),
(2, 'Rodent Control Service'),
(3, 'Bed bug Control Service'),
(4, 'Ants Control Service'),
(5, 'Mosquito Control Service'),
(6, 'Termite Control Service');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` text,
  `image_path` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `google` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `phone`, `address`, `image_path`, `position`, `fb`, `twitter`, `google`, `linkedin`, `create_date`) VALUES
(1, 'Md.Shahed', 1122544, '921/10 adabor,mohammodpur', 'ss (2).jpg', 'It Officer', 'https://www.facebook.com/shahed.cse', '', '', '', '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(26) DEFAULT NULL,
  `color` varchar(11) DEFAULT NULL,
  `ordr_by` smallint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `color`, `ordr_by`) VALUES
(1, 'Pending', ' #efeb96\n', 1),
(2, 'In-progress', ' #67edf6 ', 2),
(3, 'Cancelled', '#f13b46', 0),
(4, 'In-house', ' #8fa0f1 ', 3),
(5, 'Delivered', ' #81b677 ', 6),
(6, 'Out For Delivery', '#c4d846', 4),
(7, 'cancelled by customer ', '#C0504D', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE IF NOT EXISTS `userrole` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'client'),
(3, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_pin` varchar(100) DEFAULT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL,
  `company_name` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL,
  `random_salt` varchar(32) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL COMMENT 'User Email',
  `address` text CHARACTER SET utf8mb4,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '0',
  `image_path` varchar(512) DEFAULT 'login.png',
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_pin`, `name`, `company_name`, `random_salt`, `password`, `phone`, `email`, `address`, `status`, `role`, `image_path`, `created_by`, `created_at`) VALUES
(1, 'admin', 'Admin', 'Parcel Xpress BD', '628b97b6b04fb81a72051ec8bfc94178', '3db1da703113ace77c7599bfc6d3ce80cf60237d0508758ae56e119421689f8b', '01842775001', 'info@parcelxpressbd.com', 'House# 3/1, Road# 8, Dhanmondi', 1, 1, 'logodd.jpg', NULL, '2018-11-22 16:56:50'),
(4, '5151', 'Md. Imdadul Haque', 'EGBuy.com', 'e9dab284917f256c7bff5769cd1b8e07', 'a82cca904a0db14b8a0b56463b9b95dd00636c41f06ee4a72cf8c1c65f123a71', '01916946459', 'rgtoursolution@gmail.com', 'House# 3/1, Road# 8, Dhanmondi', 1, 2, 'unnamed.jpg', NULL, '2018-11-22 16:53:59'),
(5, '9292', 'Kazi Md. Musleh Uddin Sohag', 'DrezMOB', '8b8736a8782d5409eadd1da451bc5e12', 'da2959d052d754de75b828094ca64f0ed56fdb36f6ed08d2a29282b65466171b', '01761929292', 'drezmob@hotmail.com', NULL, 1, 2, 'login.png', NULL, '2018-11-21 11:42:33'),
(6, '214940', 'Shah Md. Naimul Islam', 'Sundorban Modhu Mohol - ???????? ??? ???', '2db4210ba185d6076b313fe3631a2532', '2c45c9e70d137e39e98fae544ab4a5148baecbecd3ac07c00aa4b84ff16f2df9', '01624720502', 'sm.naimul94@gmail.com', NULL, 1, 2, 'login.png', NULL, '2018-11-21 21:56:52'),
(8, '12345', 'Solaiman Sikder', 'testmarchent', '2a649b746c052205a8a8cc9e962c2f49', '3a988909b33a4f17cb078736cf349895b6a9b72a2282596161b91d7192441285', '01686799560', 'cseshahed@gmail.com', '  House #5, Road #8/A\r\nNikunja 1, Dhaka 1229', 1, 1, 'DSC_0064.JPG', NULL, '2018-11-24 16:44:51'),
(9, '2316', 'Tanvir', 'Shodai Shop', 'd922831a98cbb2323dfee43d48c81a65', 'c5dbfb6177135ccf8a387dd31246c5aafaf96dbf4f6cde838fcc7964f6a1e6c5', '01620232992', 'shodaishop@gmail.com', 'Mogbzar Railgate, Beside Insaf Hospital', 1, 2, 'login.png', NULL, '2018-11-30 00:00:53'),
(10, '1234', 'Israt Shakhir Tanni', 'Clothes Cafe', 'a0fa2cdbbbf7266f7db8bef11cbe954c', '183b7d910a9faa4a8df9293adc4aa855ccdf3ad4d333e453d6b5f45a6bc9c6b5', '01723228598', 'israrshakhir@gmail.com', ' 47/2 & 48/1, RK Mission Road, Gopibag', 1, 2, 'login.png', NULL, '2018-12-01 15:01:53'),
(11, '6322', 'Maria Hossain ', 'Apparel For Ladies ', 'b7ca9a921711bf7687107209e50d8e3c', '094fbe386fbafb1ba4c626e9dd1a97087497a3e4b0493ad84c216879424122b9', '01794313549', 'mariahossain142@gmail.com', 'Maria hossain\r\nH- 11, lane-2,block- B, ward-8,1137 school road,beside vumi office,nurer chala,shahjadpur,dhaka', 1, 2, 'login.png', NULL, '2018-12-01 15:26:54'),
(12, 'sumaya nahar', 'Sumaya Bint Nahar', 'Nahar''s Beauty care', '2e54220fdbe0fa86985bc1a0151c5b5d', 'ac66bea510cd2f2bf8ea3f6a36806d5923e3be2c468d9f2368c29721db2c2525', '01959086175', 'sumayabint2@gmail.com', 'House-203 (Flat-D5), Gudaraghat, Badda high school er goli, Building name-\r\nRuby Amena, Gulshan-1', 1, 2, 'login.png', NULL, '2018-12-02 13:14:09'),
(13, 'subahshanin', 'Quazi Subah Shanin', 'Subah''s Ship', '28fcf50e5547daee154b8a8c8243256a', 'b6d32267c8c1b041aa922f6c99ee0d1fb5b93d7908aff8d6bee3a855f19648a9', '01747272068', 'subahshanin@gmail.com', '35/4,Peerer Goli,Shantinagar,Dhaka', 1, 2, 'login.png', NULL, '2018-12-03 17:12:59'),
(14, '0888', 'Iqbal mirza Rassel', 'trybazar', '936eae070a9abe0184c70893fea5c300', 'fa285a641c4b482e0cbbc723cbd79bc40c8bffdb5eec247bf6f44574efcc6617', '01796556556', 'trybazar0888@gmail.com', 'Kalabagan,Dhanmondi', 1, 2, 'login.png', NULL, '2018-12-03 18:11:26'),
(15, '654321', 'Sajiya Anwar', 'Niaz''s Dress World', '94694d088836582f22e4502917c1ab6b', '2909e15985fb973dbb5f4a2ac478c1a016712e3c08679533d5b87ed2ac521510', '01985182670', 'namanniaz1234@gmail.com', '\r\n4/5 Debendro nath das lane, kagojitola, sutrapur', 1, 2, 'login.png', NULL, '2018-12-04 00:21:33'),
(16, 'Niloy', 'Md. Mosiur Rahaman', 'Bluebirdfashioncart ', '2e2bb59d1a14073086c05df8b291a1e8', '7d09d146c7adcb57a98a44b0ce3a65b7b02ef1a699d8380b529f6023539af722', '01912821117', 'niloynet@yahoo.com', '93/1 merul badda, dhaka - 1212', 1, 2, '20181020_231057.jpg', NULL, '2018-12-04 18:43:58'),
(17, 'Samir', 'Samir', 'Daraz', 'e6962650021d233f79885a0c32bee162', '19598b6994780658986846f8bf695bde093041a2ff99c6a2c9dfafca70a43698', '01794258687', 'Samir62509@gmail.com', 'Uttara sector13 road15 house5', 1, 2, 'login.png', NULL, '2018-12-06 21:53:04'),
(18, '8191', 'Antara Deb', 'Antara''s Wardrobe', '6ad4ad4d8532dbc088984b0d4466d0e7', 'ab9a7bfba91e053cde74a9b608de7441b3213baa5b1a86cbbfa1d99aba9f5cd2', '01634508191', 'auntara18@gmail.com', '314/1/B, West rampura', 1, 2, 'login.png', NULL, '2018-12-11 15:36:41'),
(19, 'craftomize', 'Laila Ismat Jabin', 'CRAFTOMIZE', 'cbdb8c2dd5e82400df04aaf1b868858d', 'c70d8dad3d3e8c11e959cbf0c3b63895057af62d164dcf00e08d67e135d11e27', '01683289352', 'arch.laila89@gmail.com', '1. 58/11, Pantha Villa, Kathalbagan Box Culvert, Dhanmondi, Dhaka-1205\r\n2. 32 Umesh Datta Road, Bakshibazar, Lalbagh. (Beside Rukeyakunjo Community Centre).', 1, 2, 'login.png', NULL, '2018-12-13 14:59:37'),
(20, 'Jahid067', 'Jahid Hossain ', 'Phonique Tech', 'e299bc1da42458f967f550ab17218cca', 'a9b4dc9cfa7ea8755b5658db84691f02783e1708951fcad3240525aa127e7085', '01842141060', 'jahidhossain7888@gmail.com', '271/A Kathal Bagan Free School Street, Dhaka-1205', 1, 2, 'login.png', NULL, '2018-12-18 12:53:07'),
(21, 'Airinony', 'Airin ony', 'Beauty spot', '0841292e41f2624515cbf80e6fa56f75', 'b48bf70f6c2e3e1262f749900d2d2dcdf9793b1adb1f9c542696b3503b68637b', '01733633441', 'airin.oni@gmail.com', 'House:45,Flat -B1,road-10/A Dhanmondi,Dhaka ', 1, 2, 'login.png', NULL, '2018-12-18 14:10:02'),
(22, 'Romonider shundorjo', 'Joya', 'BOUTIQUE shreya', '896e7760b7a5bcf09d37d695b070fdc4', 'a9a015dea1758cec2daa45193161cabab8310ed5fb1e6b3360f84cff8ee528c5', '01999449544', 'Jannatc510@gmail.com', 'Sector 14 Road 18 house 89', 1, 2, 'login.png', NULL, '2018-12-24 01:00:22'),
(23, 'rsfashionworld', 'Golam Hossain', 'R S Fashion World', 'a89e6c296e3e561f20e10b379770c25e', '8c5a8b8aa9b931e675522b202cbc0b4d663a6ca876b1291e877adc00019c3a9f', '01916885538', 'mdghossain.anik201022@gmail.com', ' House-4, Block-H, Road-6, Mirpur-2', 1, 2, '1514741434731.jpg', NULL, '2018-12-24 13:48:41'),
(24, 'Joyachowdhury', 'Joya', 'BOUTIQUE shreya', '81205f2d1249b501df66cccb501f655a', '9bbd5a8de9dec67ac58de4179cbfa8300c957c8c28c7b713da2d622de8819344', '01999449544', 'Shreyakhan867@gmail.com', 'Sector 13 Road 18 house 89', 1, 2, 'login.png', NULL, '2018-12-24 15:12:59'),
(25, 'Artreum', 'Artreum', 'Artreum', 'cef55feb68d10c855094dc908008f1a1', 'de533c125eac2887c1a9a3719a6abe845c43d6f96d2cacef7c20f2cd3e507e16', '01717603574', 'artreum.architects@gmail.com', 'H#15, R#15, Rupnagar R/A, Mirpur, Dhaka.', 1, 2, 'login.png', NULL, '2018-12-25 18:18:36'),
(26, 'diapersbd', 'diapersbd.com (Love & care)', 'www.diapersbd.com', '5c03a8ce7282f6c0ecd0ec4f27487a1d', '7b7fa909cbd0363f85e6ab1af6f3fdc78e47b4be5f8b0f9cad101802464a3a68', '01720219136', 'info.diapersbd.com@gmail.com', '14/c, Nurabad colony, Dilu road, Moghbazar, Dhaka', 1, 2, 'login.png', NULL, '2018-12-26 18:04:48'),
(27, 'bekaronlineshop', 'Md Abid Hasan Rahat', 'Bekar Online Shop', '442fcdf5c7e6ff64c1f08e3ff90e22bf', 'df841d20db83ff017fe8742268fd9391ad3f164f4b57f6d51ab2b6dd020fde45', '01742434004', 'bekaronlineshop@gmail.com', 'Mirpur', 1, 2, 'login.png', NULL, '2018-12-31 10:59:48'),
(28, 'anila mohiuddin', 'anila mohiuddin', 'NR Online shopping zone', 'fc4e131794913f8d0de7d60db1986c6c', '0f2b10b6f88752dfe58e14beee65601f5a8444db74dfb9d7daece16fd79b27fa', '01689514628', 'sadianasiranila@yahoo.com', '52/A Bonogram road dhaka', 1, 2, 'login.png', NULL, '2019-01-01 19:55:51'),
(29, 'mithila aktar', 'Mithila Aktar', 'Reflection of Mind ', 'd43b35be0ee5eaeaaade23d87eb28083', 'a849f3fddd755c2137f1c4dc3651bea9012734cbe8ae28f31d9389ca18fc30e3', '01835802093', 'biam2721@gmail.com', '313 west nakhalpara 12 no goli. Tejgaon Dhaka. ', 1, 2, 'login.png', NULL, '2019-01-02 12:48:24'),
(30, 'adnan', 'Adnan', '', 'b678593665b8ac966c66c3695c9809bc', '3ff6fb7ee91c68e706a123fbeb58969e9bdd18dc124188b6a173ffecff7dd57b', '01674899455', 'adnan@parcelxpressbd.com', '', 1, 3, 'login.png', NULL, '2019-01-02 12:55:26'),
(32, 'sumi rahman', 'sumi rahman', 'Evergreen Collections', 'cefb285080873f39905fa904f782012e', 'a5d5e73e8b34846f2ab32ae4daa45d592cae2deb360271fded2fb39c616f80a6', '01741737659', 'www.snsumi568@gmail.com', 'Gaibandha,Rangpur', 1, 2, 'login.png', NULL, '2019-01-02 15:21:24'),
(33, 'wish list by tf ~', 'forhad', 'wish list by tf ~', 'f603f9622a627b5d691878531124b483', '6f0bd6d68de0eb577e8d45b231ef62f2e1362196a5c9146002669a1ed877b91f', '01712213483', 'tafrashid@gmail.com', '49 rahamat  gang lane dhaka 1211', 1, 2, 'login.png', NULL, '2019-01-05 21:00:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
