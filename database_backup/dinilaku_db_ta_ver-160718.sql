-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 02:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinilaku_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `productcategory_tb`
--

CREATE TABLE `productcategory_tb` (
  `Code` varchar(20) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory_tb`
--

INSERT INTO `productcategory_tb` (`Code`, `ProductCategory`) VALUES
('01', 'Ring'),
('02', 'Necklaces'),
('03', 'Anting'),
('04', 'Bracelets');

-- --------------------------------------------------------

--
-- Table structure for table `productpic_tb`
--

CREATE TABLE `productpic_tb` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `FileName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productpic_tb`
--

INSERT INTO `productpic_tb` (`Id`, `ProductId`, `FileName`) VALUES
(7, 7, 'iphone-gold.jpg'),
(8, 7, 'iphone-gold.jpg'),
(9, 8, 'iphone-gold.jpg'),
(10, 9, 'iphone-gold.jpg'),
(11, 10, 'keyboard-gold.jpg'),
(12, 11, 'iphone-gold.jpg'),
(13, 12, 'iphone-gold.jpg'),
(14, 12, 'iphone-gold.jpg'),
(15, 12, 'iphone-gold.jpg'),
(20, 5, 'iphone-gold.jpg'),
(22, 7, 'iphone-gold.jpg'),
(26, 10, 'keyboard-gold1.jpg'),
(27, 11, 'iphone-gold.jpg'),
(28, 12, 'iphone-gold.jpg'),
(29, 12, 'iphone-gold.jpg'),
(31, 17, '1507269947asa.PNG'),
(32, 17, '1507269947Capture.PNG'),
(33, 17, '1507269947bukti_transaksi.JPG'),
(34, 18, '1507532076Capture1.PNG'),
(35, 19, '1507642687hs.PNG'),
(36, 9, '1508206759xv.PNG'),
(37, 5, '1517748243PREMA.jpg'),
(38, 21, '1518717935PREMA.jpg'),
(39, 22, '151893112833.jpg'),
(40, 22, '151893113042.jpg'),
(41, 22, '15189311315.jpg'),
(42, 23, '1519195185download.jpg'),
(43, 25, '1520238078Captdure.JPG'),
(44, 26, '1520313987Captdure.JPG'),
(45, 26, '1520313987Capture.JPG'),
(46, 27, '1520314061Captdure.JPG'),
(47, 28, '1520314100Captdure.JPG'),
(48, 30, '1520315239Captdure.JPG'),
(49, 31, '1520315310Captdure.JPG'),
(50, 36, '1520317787Captdure.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `productsubcategory_tb`
--

CREATE TABLE `productsubcategory_tb` (
  `Code` varchar(20) NOT NULL,
  `ProductCategoryCode` varchar(20) NOT NULL,
  `ProductSubCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsubcategory_tb`
--

INSERT INTO `productsubcategory_tb` (`Code`, `ProductCategoryCode`, `ProductSubCategory`) VALUES
('0101', '01', 'Cincin Nikah'),
('0102', '01', 'Wedding'),
('0103', '01', 'Diamond & Eternity'),
('0104', '01', 'Gemstone'),
('0105', '01', 'antv'),
('0106', '01', 'xore'),
('0107', '01', 'scsc'),
('0108', '01', 'sccscscscsc'),
('0109', '01', 'sccscscwregfhfhgf'),
('0110', '01', 'fghfghghfgh'),
('0111', '01', 'jkh '),
('0201', '02', 'Diamond '),
('0202', '02', 'Gemstone'),
('0203', '02', 'Pearl'),
('0301', '03', 'Diamond'),
('0302', '03', 'Gemstone'),
('0303', '03', 'Pearl'),
('0401', '04', 'Diamond'),
('0402', '04', 'Gemstone'),
('0403', '04', 'k;hbkjbgk');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `Id` int(11) NOT NULL,
  `SupplierId` int(11) NOT NULL,
  `ProductSubCategoryCode` varchar(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `MinPrice` double(20,2) NOT NULL,
  `MaxPrice` double(20,2) NOT NULL,
  `ProductDescription` text NOT NULL,
  `PkgDelivery` text NOT NULL,
  `SupplyAbility` double(20,2) NOT NULL,
  `PeriodSupplyAbility` varchar(50) NOT NULL,
  `IsPublished` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`Id`, `SupplierId`, `ProductSubCategoryCode`, `Name`, `Unit`, `MinPrice`, `MaxPrice`, `ProductDescription`, `PkgDelivery`, `SupplyAbility`, `PeriodSupplyAbility`, `IsPublished`) VALUES
(1, 35, '0101', 'Gold Ring', 'pcs', 1000000.00, 0.00, '', '', 1000.00, 'monthly', 1),
(2, 35, '0101', 'Kalung Anjing', 'dozen', 1000.00, 0.00, 'Kalung Anjing', '', 1000.00, 'daily', 1),
(5, 35, '0301', 'Kalung Laki', 'pcs', 12345.00, 0.00, 'Kalung Laki', '', 10.00, 'daily', 1),
(7, 35, '0101', 'Kalung Kaki', 'pcs', 9999.00, 0.00, 'Kalung Kaki', '', 150.00, 'daily', 1),
(8, 35, '0101', 'Kalung Metal', 'pcs', 3333.00, 0.00, '', '', 3333.00, 'daily', 1),
(9, 35, '0101', 'Iphone Gold', 'truck', 1000000000.00, 0.00, 'Iphone Gold', '', 12.00, 'daily', 1),
(10, 35, '0103', 'Keyboard Gold', 'pcs', 150000000.00, 0.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 12.00, 'daily', 0),
(11, 35, '0101', 'USB Silver', 'pcs', 1500000.00, 0.00, '', '', 100.00, 'daily', 1),
(12, 35, '0102', 'Golden mouse ring', 'pcs', 123456789.00, 0.00, 'Di buat Golden mouse ring', 'Di kirm Golden mouse ring', 15.00, 'daily', 1),
(13, 35, '0101', 'OnePlus 5 Gold', 'Truck', 5600000.00, 0.00, '', '', 10.00, '', 1),
(14, 35, '0101', 'tes1044', '1044', 1044.00, 0.00, '1044              ', '1044              ', 1044.00, 'daily', 1),
(15, 35, '0101', 'tes1121', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(16, 35, '0101', 'tes1121', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(17, 35, '0101', 'Tes061017', 'Tes061017', 61017.00, 0.00, '              61017', '              61017', 61017.00, 'daily', 1),
(18, 35, '0101', 'tes 9 okto', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(19, 35, '0402', 'Tes 937', '937', 12000.00, 0.00, '        937', '              899', 123.00, 'daily', 1),
(20, 35, '0402', 'Gelang Akik', '1043', 10430000.00, 0.00, 'Dibuat jam 1043', 'Di Kirim jam 1043', 104300.00, 'daily', 1),
(21, 47, '0104', 'TEst online', 'Satuan', 12345.00, 0.00, '              ok sip', '              ok siap', 5000.00, 'daily', 1),
(22, 50, '0402', 'Extraordinary Shore Picture', 'PCS', 1200000.00, 0.00, 'Extraordinary Shore Picture', 'Extraordinary Shore Picture              ', 120.00, 'weekly', 1),
(23, 47, '0104', 'Aero 15x', 'Pcs', 32000000.00, 0.00, '              Man nih laptop anda pasti suka', '              Pkae truc', 12.00, 'monthly', 1),
(24, 35, '0', 'Test Format numbert input', '', 123123123.00, 0.00, '              ', '              ', 1231.00, 'daily', 1),
(25, 35, '0', 'format clave', '', 1000000.00, 0.00, '              ', '              ', 1500.00, 'daily', 1),
(26, 35, '0102', 'Product Name', 'lembar', 10025000.00, 0.00, '              mantap', 'ws              ', 30000.00, 'daily', 1),
(27, 35, '0', 'ok', '', 12000000.00, 0.00, '              ', '              ', 1300000.00, 'daily', 1),
(28, 35, '0201', 'ok', 'pcs', 10000000.00, 0.00, '              asdd', '              asdsd', 11000000.00, 'daily', 1),
(29, 35, '0101', 'siap', 'ok', 1256254.00, 0.00, '              as', '              asas', 1256259.00, 'daily', 1),
(30, 35, '0', 'okok oc', 'asas', 121212.00, 0.00, '              sdsdsd', '              sdsdsdsd', 121212.00, 'yearly', 1),
(31, 35, '0301', 'ok si p', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(32, 35, '0201', 'qwqw', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(33, 35, '0', '', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(34, 35, '0', '', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(35, 35, '0', '', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(36, 35, '0201', 'asassa', 'asas', 1212.00, 0.00, '              wqqwq', '              qwqw', 12121.00, 'daily', 1),
(37, 35, '0', '', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1),
(38, 35, '0', '', '', 0.00, 0.00, '              ', '              ', 0.00, 'daily', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotationdetail_tb`
--

CREATE TABLE `quotationdetail_tb` (
  `Id` int(11) NOT NULL,
  `QuotationCode` varchar(50) NOT NULL,
  `MemberId` int(11) NOT NULL,
  `Message` text NOT NULL,
  `SendDate` datetime NOT NULL,
  `ReadDate` datetime NOT NULL,
  `IsRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotationdetail_tb`
--

INSERT INTO `quotationdetail_tb` (`Id`, `QuotationCode`, `MemberId`, `Message`, `SendDate`, `ReadDate`, `IsRead`) VALUES
(1, '1', 35, 'sudah ya', '2017-11-01 00:00:00', '0000-00-00 00:00:00', 1),
(2, '1', 29, 'Sudah dipersiapkan yg saya Minta?', '2017-09-14 00:00:00', '0000-00-00 00:00:00', 1),
(3, '1', 35, 'Suksma', '2017-11-03 06:10:10', '0000-00-00 00:00:00', 1),
(4, '1', 35, 'Mantap', '2017-11-03 06:17:16', '0000-00-00 00:00:00', 1),
(5, '1', 35, 'yeah', '2017-11-03 13:22:55', '0000-00-00 00:00:00', 1),
(6, '1', 35, '', '2017-11-03 19:27:52', '0000-00-00 00:00:00', 1),
(7, '1', 35, 'matap', '2017-11-03 20:03:51', '0000-00-00 00:00:00', 1),
(8, '1', 35, 'oke siap', '2017-11-03 20:05:37', '0000-00-00 00:00:00', 1),
(9, '1', 35, 'pas', '2017-11-03 20:05:45', '0000-00-00 00:00:00', 1),
(10, '1', 35, '123', '2017-11-03 20:08:06', '0000-00-00 00:00:00', 1),
(11, '1', 35, 'tes', '2017-11-03 20:09:56', '0000-00-00 00:00:00', 1),
(12, '1', 35, 'tes', '2017-11-03 20:10:06', '0000-00-00 00:00:00', 1),
(13, '1', 35, 'mkan', '2017-11-03 20:13:28', '0000-00-00 00:00:00', 1),
(14, '1', 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(15, '1', 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(16, '1', 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(17, '1', 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(18, '1', 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(19, '1', 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(20, '1', 35, 'mkan', '2017-11-03 20:13:32', '0000-00-00 00:00:00', 1),
(21, '1', 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(22, '1', 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(23, '1', 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(24, '1', 35, 'siap', '2017-11-03 20:13:44', '0000-00-00 00:00:00', 1),
(25, '1', 35, 'gerak', '2017-11-03 20:15:07', '0000-00-00 00:00:00', 1),
(26, '1', 35, 'gerak', '2017-11-03 20:15:15', '0000-00-00 00:00:00', 1),
(27, '1', 35, 'ok', '2017-11-03 20:16:24', '0000-00-00 00:00:00', 1),
(28, '1', 35, 'ok', '2017-11-03 20:16:36', '0000-00-00 00:00:00', 1),
(29, '1', 35, 'ok', '2017-11-03 20:16:37', '0000-00-00 00:00:00', 1),
(30, '1', 35, 'ok', '2017-11-03 20:18:04', '0000-00-00 00:00:00', 1),
(31, '1', 35, '2', '2017-11-03 20:18:11', '0000-00-00 00:00:00', 1),
(32, '1', 35, '2', '2017-11-03 20:18:14', '0000-00-00 00:00:00', 1),
(33, '1', 35, 'dsada', '2017-11-03 20:21:28', '0000-00-00 00:00:00', 1),
(34, '1', 35, 'siap', '2017-11-03 20:25:22', '0000-00-00 00:00:00', 1),
(35, '1', 35, 'siap', '2017-11-03 20:25:23', '0000-00-00 00:00:00', 1),
(36, '1', 35, '2026', '2017-11-03 20:26:19', '0000-00-00 00:00:00', 1),
(37, '1', 35, '2028', '2017-11-03 20:28:33', '0000-00-00 00:00:00', 1),
(38, '1', 35, 'sasas', '2017-11-03 20:30:55', '0000-00-00 00:00:00', 1),
(39, '1', 35, 'sasas', '2017-11-03 20:30:56', '0000-00-00 00:00:00', 1),
(40, '1', 35, 'sasas', '2017-11-03 20:30:56', '0000-00-00 00:00:00', 1),
(41, '1', 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(42, '1', 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(43, '1', 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(44, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(45, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(46, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(47, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(48, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:05', '0000-00-00 00:00:00', 1),
(49, '1', 35, '.as,d.as,d.as,d', '2017-11-03 20:31:05', '0000-00-00 00:00:00', 1),
(50, '1', 35, 'sasas', '2017-11-03 20:32:08', '0000-00-00 00:00:00', 1),
(51, '1', 35, 'sasas', '2017-11-03 20:32:09', '0000-00-00 00:00:00', 1),
(52, '1', 35, 'sd.sd', '2017-11-03 20:32:14', '0000-00-00 00:00:00', 1),
(53, '1', 35, 'sd.sd', '2017-11-03 20:32:14', '0000-00-00 00:00:00', 1),
(54, '1', 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(55, '1', 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(56, '1', 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(57, '1', 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(58, '1', 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(59, '1', 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(60, '1', 35, 'sasas', '2017-11-03 20:32:35', '0000-00-00 00:00:00', 1),
(61, '1', 35, 'waduh', '2017-11-03 20:32:59', '0000-00-00 00:00:00', 1),
(62, '1', 35, 'waduh', '2017-11-03 20:34:44', '0000-00-00 00:00:00', 1),
(63, '1', 35, 'yeah', '2017-11-03 20:34:51', '0000-00-00 00:00:00', 1),
(64, '1', 35, 'yeah', '2017-11-03 20:34:53', '0000-00-00 00:00:00', 1),
(65, '1', 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(66, '1', 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(67, '1', 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(68, '1', 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(69, '1', 35, 'yeah', '2017-11-03 20:35:59', '0000-00-00 00:00:00', 1),
(70, '1', 35, ',,,,', '2017-11-03 20:37:31', '0000-00-00 00:00:00', 1),
(71, '1', 35, 'tesss', '2017-11-03 20:37:54', '0000-00-00 00:00:00', 1),
(72, '1', 35, 'fun', '2017-11-03 20:39:28', '0000-00-00 00:00:00', 1),
(73, '1', 35, 'sap', '2017-11-03 20:40:25', '0000-00-00 00:00:00', 1),
(74, '1', 35, 'sap', '2017-11-03 20:40:55', '0000-00-00 00:00:00', 1),
(75, '1', 35, 'test', '2017-11-03 21:00:46', '0000-00-00 00:00:00', 1),
(76, '1', 35, 'test', '2017-11-03 21:00:57', '0000-00-00 00:00:00', 1),
(77, '1', 35, 'makan', '2017-11-03 21:01:27', '0000-00-00 00:00:00', 1),
(78, '1', 35, 'ok', '2017-11-03 21:03:01', '0000-00-00 00:00:00', 1),
(79, '1', 35, 'tes', '2017-11-03 21:03:36', '0000-00-00 00:00:00', 1),
(80, '1', 35, 'makan', '2017-11-03 21:06:03', '0000-00-00 00:00:00', 1),
(81, '1', 35, 'all', '2017-11-03 21:06:16', '0000-00-00 00:00:00', 1),
(82, '1', 35, '2106', '2017-11-03 21:06:31', '0000-00-00 00:00:00', 1),
(83, '1', 35, 'sss', '2017-11-03 21:07:53', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation_tb`
--

CREATE TABLE `quotation_tb` (
  `Code` varchar(50) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `BuyerId` int(11) NOT NULL,
  `SupplierId` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Content` text NOT NULL,
  `Qty` int(11) NOT NULL,
  `SendDate` datetime NOT NULL,
  `ReadDate` datetime NOT NULL,
  `IsRead` int(11) NOT NULL,
  `IsAccepted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation_tb`
--

INSERT INTO `quotation_tb` (`Code`, `ProductId`, `BuyerId`, `SupplierId`, `Subject`, `Content`, `Qty`, `SendDate`, `ReadDate`, `IsRead`, `IsAccepted`) VALUES
('1', 10, 29, 35, 'Request for quotation from Pembeli loyal sejati to buy Keyboard Gold', 'Pemesanan oleh : Pembeli loyal sejati to buy Keyboard Gold, qty : 1515meli sik gan', 1515, '2017-10-20 11:50:32', '0000-00-00 00:00:00', 1, 0),
('2', 17, 44, 35, 'Request for quotation from Pembeli loyal sejati to buy Tes061017', 'Pemesanan oleh : Pembeli loyal sejati to buy Tes061017, qty : 555meli sik gan, dibungkus tidak pakai plastik', 555, '2017-10-28 10:53:54', '0000-00-00 00:00:00', 1, 0),
('3', 11, 44, 35, 'Request for quotation from  to buy USB Silver', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy USB Silver, qty : 1beli satu mas', 1, '2017-10-28 11:00:29', '0000-00-00 00:00:00', 1, 0),
('4', 10, 44, 35, 'RFQ  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 1000meli banyak gan, ', 1000, '2017-10-28 16:21:40', '0000-00-00 00:00:00', 1, 0),
('5', 8, 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3asdasdasdasdasdasdasd', 3, '2018-02-02 14:41:53', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `suppliergallerypic_tb`
--

CREATE TABLE `suppliergallerypic_tb` (
  `Id` int(11) NOT NULL,
  `SupplierId` int(11) NOT NULL,
  `FileName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliergallerypic_tb`
--

INSERT INTO `suppliergallerypic_tb` (`Id`, `SupplierId`, `FileName`) VALUES
(2, 35, '1520487705Capture.JPG'),
(5, 35, '1521809106PREMA.jpg'),
(6, 35, '1522032123computer-parts-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ZipCode` varchar(25) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(150) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `UserLevel` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `CompanyName` varchar(250) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `ProfileImage` text NOT NULL,
  `Tdp` text NOT NULL,
  `Siup` text NOT NULL,
  `Npwp` varchar(100) NOT NULL,
  `CompanyDescription` text NOT NULL,
  `MemberDate` date NOT NULL,
  `IsVerifiedSupplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`Id`, `Email`, `Password`, `ZipCode`, `Address`, `City`, `Province`, `State`, `UserLevel`, `FirstName`, `LastName`, `CompanyName`, `Phone`, `ProfileImage`, `Tdp`, `Siup`, `Npwp`, `CompanyDescription`, `MemberDate`, `IsVerifiedSupplier`) VALUES
(29, 'dek.sandhiyasa990@gmail.com', '', '', '', '', '', 'Indonesia', 0, 'Sandhi', '', 'Logitech', '', 'samsung.jpg', '', '', '', '', '0000-00-00', 0),
(31, 'wes@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '', 'Indonesia', 0, 'Gede ', 'Waisnawa Putra', 'MCD', '', 'mcd.png', '', '', '', '', '0000-00-00', 1),
(35, 'premawaisnawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '80352', 'Banjar Lambing, Desa Sibangkaja', 'Badung', '', 'indonesia', 0, 'Prema', 'Wai', 'EVO', '081081081081', 'download.png', 'CP63RIN_173743_800x800.jpg', 'PREMA.jpg', '1234', 'Evo Solusi merupakan ......', '0000-00-00', 1),
(36, 'tes', '', '', '', '', '', '', 0, '', '', 'Rolex', '', 'rolex.png', '', '', '', '', '0000-00-00', 1),
(37, 's', '', '', '', '', '', '', 0, '', '', 'Samsung', '', 'samsung-logo.jpeg', '', '', '', '', '0000-00-00', 1),
(38, 'w', '', '', '', '', '', '', 0, '', '', 'One Plus', '', 'oneplus-logo-big.png', '', '', '', '', '0000-00-00', 1),
(39, 'e', '', '', '', '', '', '', 0, '', '', 'Apple', '', 'apple-logo_318-40184.jpg', '', '', '', '', '0000-00-00', 1),
(40, 'w', '', '', '', '', '', '', 0, '', '', 'Mangupura', '', 'Badung-Logo_lambang_Kabupaten.png', '', '', '', '', '0000-00-00', 1),
(41, 'e', '', '', '', '', '', '', 0, '', '', 'Vertu', '', 'Vertu-Logo.jpg', '', '', '', '', '0000-00-00', 1),
(44, '1weizeinawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '80352', 'Banjar Lambing, Desa Sibangkaja', 'Badung', '', 'indonesia', 0, 'Waisnawa', 'Putra', 'WesEwes', '081236727741', 'PREMA.jpg', '', '', '', 'aaa', '0000-00-00', 0),
(47, 'dinilaku@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', '', 'indonesia', 1, 'Prema', 'Waisnawa', 'DINILAKU ADMIN', '088222333555', 'picture-1-1505503146.png', '', '', '123456', '', '0000-00-00', 0),
(48, 'actorit.tech@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'sasas', 'asa', '', 'indonesia', 0, 'dsd', 'sdsd', 'sds', '21212', '', '', '', '', '', '0000-00-00', 0),
(49, 'putraasna.09@gmail.com', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '0000-00-00', 0),
(50, 'putraasana.09@gmail.com', '8916ff8f0d599b0ee6700510369d777674673589', '120521', 'Jalan Suli- Denpasar', 'denpasar', '', 'indonesia', 0, 'Dwi Putra', 'Asana', 'CV.SBM', '+628565413216', '5.jpg', '42.jpg', '33.jpg', '3216534164', '', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productcategory_tb`
--
ALTER TABLE `productcategory_tb`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `productpic_tb`
--
ALTER TABLE `productpic_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productsubcategory_tb`
--
ALTER TABLE `productsubcategory_tb`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quotationdetail_tb`
--
ALTER TABLE `quotationdetail_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quotation_tb`
--
ALTER TABLE `quotation_tb`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `suppliergallerypic_tb`
--
ALTER TABLE `suppliergallerypic_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productpic_tb`
--
ALTER TABLE `productpic_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `quotationdetail_tb`
--
ALTER TABLE `quotationdetail_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `suppliergallerypic_tb`
--
ALTER TABLE `suppliergallerypic_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
