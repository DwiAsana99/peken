-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 02:47 PM
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
-- Database: `dinilaku_dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbgallerypic`
--

CREATE TABLE `tbgallerypic` (
  `IdGalleryPic` int(11) NOT NULL,
  `IdMember` int(11) NOT NULL,
  `FileName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbgallerypic`
--

INSERT INTO `tbgallerypic` (`IdGalleryPic`, `IdMember`, `FileName`) VALUES
(2, 35, '1520487705Capture.JPG'),
(5, 35, '1521809106PREMA.jpg'),
(6, 35, '1522032123computer-parts-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbmember`
--

CREATE TABLE `tbmember` (
  `IdMember` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Pwd` varchar(60) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `ZipCode` varchar(20) NOT NULL,
  `City` varchar(50) NOT NULL,
  `IsUser` int(11) NOT NULL,
  `IsSupplier` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `ProfilImage` varchar(50) NOT NULL,
  `Tdp` varchar(50) NOT NULL,
  `Siup` varchar(50) NOT NULL,
  `Npwp` varchar(50) NOT NULL,
  `CompanyAddress` varchar(50) NOT NULL,
  `CompanyDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmember`
--

INSERT INTO `tbmember` (`IdMember`, `Email`, `Pwd`, `Location`, `ZipCode`, `City`, `IsUser`, `IsSupplier`, `FirstName`, `LastName`, `CompanyName`, `Phone`, `ProfilImage`, `Tdp`, `Siup`, `Npwp`, `CompanyAddress`, `CompanyDescription`) VALUES
(29, 'dek.sandhiyasa990@gmail.com', '', 'Indonesia', '', '', 0, 0, 'Sandhi', '', 'Logitech', '', 'samsung.jpg', '', '', '', '', ''),
(31, 'wes@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Indonesia', '', '', 0, 1, 'Gede ', 'Waisnawa Putra', 'MCD', '', 'mcd.png', '', '', '', '', ''),
(35, 'premawaisnawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '80352', 'Badung', 0, 1, 'Prema', 'Wai', 'EVO', '081081081081', 'download.png', 'CP63RIN_173743_800x800.jpg', 'PREMA.jpg', '1234', 'Banjar Lambing, Desa Sibangkaja', 'Evo Solusi merupakan ......'),
(36, 'tes', '', '', '', '', 0, 1, '', '', 'Rolex', '', 'rolex.png', '', '', '', '', ''),
(37, 's', '', '', '', '', 0, 1, '', '', ' Samsung Samsung Samsung Samsung', '', 'samsung-logo.jpeg', '', '', '', '', ''),
(38, 'w', '', '', '', '', 0, 1, '', '', 'One Plus', '', 'oneplus-logo-big.png', '', '', '', '', ''),
(39, 'e', '', '', '', '', 0, 1, '', '', 'Apple', '', 'apple-logo_318-40184.jpg', '', '', '', '', ''),
(40, 'w', '', '', '', '', 0, 1, '', '', 'Mangupura', '', 'Badung-Logo_lambang_Kabupaten.png', '', '', '', '', ''),
(41, 'e', '', '', '', '', 0, 1, '', '', 'Vertu', '', 'Vertu-Logo.jpg', '', '', '', '', ''),
(44, '1weizeinawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '80352', 'Badung', 0, 0, 'Waisnawa', 'Putra', 'WesEwes', '081236727741', 'PREMA.jpg', '', '', '', 'Banjar Lambing, Desa Sibangkaja', 'aaa'),
(47, 'dinilaku@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '', '', 1, 0, 'Prema', 'Waisnawa', 'DINILAKU ADMIN', '088222333555', 'picture-1-1505503146.png', '', '', '123456', '', ''),
(48, 'actorit.tech@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '', 'asa', 0, 0, 'dsd', 'sdsd', 'sds', '21212', '', '', '', '', 'sasas', ''),
(49, 'putraasna.09@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(50, 'putraasana.09@gmail.com', '8916ff8f0d599b0ee6700510369d777674673589', 'indonesia', '120521', 'denpasar', 0, 1, 'Dwi Putra', 'Asana', 'CV.SBM', '+628565413216', '5.jpg', '42.jpg', '33.jpg', '3216534164', 'Jalan Suli- Denpasar', ''),
(51, 'weizeinawa@gmail.id', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(52, 'weizeinawa@gmail.idn', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(53, 'weizeinawa@gmail.idno', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(54, 'marketplacesilver@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(55, 'weizeinawa@gmail.com1', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(56, 'weizeinawa@gmail.co2m', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(57, 'weizeinawa@gmail.comazsaz', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(58, 'weizeinawa@gmail.com12', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(59, 'weizeinawa@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(60, 'gedewaisnawaputra@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE `tbproduct` (
  `IdProduct` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Unit` varchar(20) DEFAULT NULL,
  `Price` double(20,2) DEFAULT NULL,
  `ProductDescription` text NOT NULL,
  `PkgDelivery` text NOT NULL,
  `SupplyAbility` double(20,2) DEFAULT NULL,
  `PeriodSupplyAbility` varchar(45) DEFAULT NULL,
  `ProductSubCategoryCode` varchar(10) DEFAULT NULL,
  `IdSupplier` int(11) NOT NULL,
  `IsActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbproduct`
--

INSERT INTO `tbproduct` (`IdProduct`, `Name`, `Unit`, `Price`, `ProductDescription`, `PkgDelivery`, `SupplyAbility`, `PeriodSupplyAbility`, `ProductSubCategoryCode`, `IdSupplier`, `IsActive`) VALUES
(1, 'Gold Ring', 'pcs', 1000000.00, '', '', 1000.00, 'monthly', '0101', 35, 1),
(2, 'Kalung Anjing', 'dozen', 1000.00, 'Kalung Anjing', '', 1000.00, 'daily', '0101', 35, 1),
(5, 'Kalung Laki', 'pcs', 12345.00, 'Kalung Laki', '', 10.00, 'daily', '0301', 35, 1),
(7, 'Kalung Kaki', 'pcs', 9999.00, 'Kalung Kaki', '', 150.00, 'daily', '0101', 35, 1),
(8, 'Kalung Metal', 'pcs', 3333.00, '', '', 3333.00, 'daily', '0101', 35, 1),
(9, 'Iphone Gold', 'truck', 1000000000.00, 'Iphone Gold', '', 12.00, 'daily', '0101', 35, 1),
(10, 'Keyboard Gold', 'pcs', 150000000.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 12.00, 'daily', '0103', 35, 0),
(11, 'USB Silver', 'pcs', 1500000.00, '', '', 100.00, 'daily', '0101', 35, 1),
(12, 'Golden mouse ring', 'pcs', 123456789.00, 'Di buat Golden mouse ring', 'Di kirm Golden mouse ring', 15.00, 'daily', '0102', 35, 1),
(13, 'OnePlus 5 Gold', 'Truck', 5600000.00, '', '', 10.00, '', '0101', 35, 1),
(14, 'tes1044', '1044', 1044.00, '1044              ', '1044              ', 1044.00, 'daily', '0101', 35, 1),
(15, 'tes1121', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35, 1),
(16, 'tes1121', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35, 1),
(17, 'Tes061017', 'Tes061017', 61017.00, '              61017', '              61017', 61017.00, 'daily', '0101', 35, 1),
(18, 'tes 9 okto', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35, 1),
(19, 'Tes 937', '937', 12000.00, '        937', '              899', 123.00, 'daily', '0402', 35, 1),
(20, 'Gelang Akik', '1043', 10430000.00, 'Dibuat jam 1043', 'Di Kirim jam 1043', 104300.00, 'daily', '0402', 35, 1),
(21, 'TEst online', 'Satuan', 12345.00, '              ok sip', '              ok siap', 5000.00, 'daily', '0104', 47, 1),
(22, 'Extraordinary Shore Picture', 'PCS', 1200000.00, 'Extraordinary Shore Picture', 'Extraordinary Shore Picture              ', 120.00, 'weekly', '0402', 50, 1),
(23, 'Aero 15x', 'Pcs', 32000000.00, '              Man nih laptop anda pasti suka', '              Pkae truc', 12.00, 'monthly', '0104', 47, 1),
(24, 'Test Format numbert input', '', 123123123.00, '              ', '              ', 1231.00, 'daily', '0', 35, 1),
(25, 'format clave', '', 1000000.00, '              ', '              ', 1500.00, 'daily', '0', 35, 1),
(26, 'Product Name', 'lembar', 10025000.00, '              mantap', 'ws              ', 30000.00, 'daily', '0102', 35, 1),
(27, 'ok', '', 12000000.00, '              ', '              ', 1300000.00, 'daily', '0', 35, 1),
(28, 'ok', 'pcs', 10000000.00, '              asdd', '              asdsd', 11000000.00, 'daily', '0201', 35, 1),
(29, 'siap', 'ok', 1256254.00, '              as', '              asas', 1256259.00, 'daily', '0101', 35, 1),
(30, 'okok oc', 'asas', 121212.00, '              sdsdsd', '              sdsdsdsd', 121212.00, 'yearly', '0', 35, 1),
(31, 'ok si p', '', 0.00, '              ', '              ', 0.00, 'daily', '0301', 35, 1),
(32, 'qwqw', '', 0.00, '              ', '              ', 0.00, 'daily', '0201', 35, 1),
(33, '', '', 0.00, '              ', '              ', 0.00, 'daily', '0', 35, 1),
(34, '', '', 0.00, '              ', '              ', 0.00, 'daily', '0', 35, 1),
(35, '', '', 0.00, '              ', '              ', 0.00, 'daily', '0', 35, 1),
(36, 'asassa', 'asas', 1212.00, '              wqqwq', '              qwqw', 12121.00, 'daily', '0201', 35, 1),
(37, '', '', 0.00, '              ', '              ', 0.00, 'daily', '0', 35, 1),
(38, '', '', 0.00, '              ', '              ', 0.00, 'daily', '0', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbproductcategory`
--

CREATE TABLE `tbproductcategory` (
  `Code` varchar(5) NOT NULL,
  `ProductCategory` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproductcategory`
--

INSERT INTO `tbproductcategory` (`Code`, `ProductCategory`) VALUES
('01', 'Ring'),
('02', 'Necklaces'),
('03', 'Anting'),
('04', 'Bracelets'),
('05', 'Kerajinan Tangan'),
('06', 'Masterpiece'),
('07', 'www'),
('08', 'sdffd'),
('09', 'dsfsf'),
('10', 'sdfsdf'),
('11', 'sdfsdf'),
('12', 'sd'),
('13', 'maknyos');

-- --------------------------------------------------------

--
-- Table structure for table `tbproductpic`
--

CREATE TABLE `tbproductpic` (
  `IdProductPic` int(11) NOT NULL,
  `IdProduct` int(11) DEFAULT NULL,
  `FileName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbproductpic`
--

INSERT INTO `tbproductpic` (`IdProductPic`, `IdProduct`, `FileName`) VALUES
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
-- Table structure for table `tbproductsubcategory`
--

CREATE TABLE `tbproductsubcategory` (
  `Code` varchar(10) NOT NULL,
  `ProductCategoryCode` varchar(5) NOT NULL,
  `ProductSubCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproductsubcategory`
--

INSERT INTO `tbproductsubcategory` (`Code`, `ProductCategoryCode`, `ProductSubCategory`) VALUES
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
-- Table structure for table `tbquotation`
--

CREATE TABLE `tbquotation` (
  `IdQuotation` int(11) NOT NULL,
  `DateSend` datetime NOT NULL,
  `DateRead` datetime NOT NULL,
  `IdBuyer` int(11) NOT NULL,
  `IdSupplier` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Content` text NOT NULL,
  `IdProduct` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `IsRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbquotation`
--

INSERT INTO `tbquotation` (`IdQuotation`, `DateSend`, `DateRead`, `IdBuyer`, `IdSupplier`, `Subject`, `Content`, `IdProduct`, `Qty`, `IsRead`) VALUES
(1, '2017-10-20 11:50:32', '0000-00-00 00:00:00', 29, 35, 'Request for quotation from Pembeli loyal sejati to buy Keyboard Gold', 'Pemesanan oleh : Pembeli loyal sejati to buy Keyboard Gold, qty : 1515meli sik gan', 10, 1515, 1),
(2, '2017-10-28 10:53:54', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from Pembeli loyal sejati to buy Tes061017', 'Pemesanan oleh : Pembeli loyal sejati to buy Tes061017, qty : 555meli sik gan, dibungkus tidak pakai plastik', 17, 555, 1),
(3, '2017-10-28 11:00:29', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy USB Silver', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy USB Silver, qty : 1beli satu mas', 11, 1, 1),
(4, '2017-10-28 16:21:40', '0000-00-00 00:00:00', 44, 35, 'RFQ  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 1000meli banyak gan, ', 10, 1000, 1),
(5, '2018-02-02 14:41:53', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3asdasdasdasdasdasdasd', 8, 3, 1),
(6, '2018-02-02 14:50:46', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Kaki, qty : 56sdDasdasdasd', 7, 56, 1),
(7, '2018-02-02 14:56:27', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Kaki, qty : 56sdDasdasdasd', 7, 56, 1),
(8, '2018-02-02 14:57:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 4xzCxczxczxczxczxc', 8, 4, 1),
(9, '2018-02-02 14:59:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 4xzCxczxczxczxczxc', 8, 4, 1),
(10, '2018-02-02 15:01:50', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3324561', 8, 3, 1),
(11, '2018-02-02 15:13:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 56ol[uiiopuip\r\n[pk', 9, 56, 1),
(12, '2018-02-02 15:16:12', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4weaedfafsdf', 9, 4, 1),
(13, '2018-02-02 15:48:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4weaedfafsdf', 9, 4, 1),
(14, '2018-02-02 15:48:55', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 11\r\nbkj', 9, 1, 1),
(15, '2018-02-02 15:52:12', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3', 8, 3, 1),
(16, '2018-02-02 15:56:27', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3', 8, 3, 1),
(17, '2018-02-02 16:00:54', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3', 8, 3, 1),
(18, '2018-02-02 16:01:11', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsd', 8, 3, 1),
(19, '2018-02-02 16:01:53', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsdasd', 8, 3, 1),
(20, '2018-02-02 16:01:57', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsdasd', 8, 3, 1),
(21, '2018-02-02 16:02:32', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsdasd', 8, 3, 1),
(22, '2018-02-02 16:02:35', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsdasd', 8, 3, 1),
(23, '2018-02-02 16:05:09', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3dfdasfdfsdasdsdsadsdasdads', 8, 3, 1),
(24, '2018-02-02 18:32:21', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 23dfcfsdfsdfsf', 8, 23, 1),
(25, '2018-02-02 18:36:22', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 23dfcfsdfsdfsf', 8, 23, 1),
(26, '2018-02-02 19:47:14', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 1adfadffds', 12, 1, 1),
(27, '2018-02-02 19:51:52', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 1adfadffds', 12, 1, 1),
(28, '2018-02-02 19:52:01', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(29, '2018-02-02 19:55:25', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(30, '2018-02-02 19:55:40', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(31, '2018-02-02 19:57:36', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(32, '2018-02-02 19:58:58', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(33, '2018-02-02 20:00:21', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(34, '2018-02-02 20:00:37', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(35, '2018-02-02 20:03:31', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(36, '2018-02-02 20:07:25', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(37, '2018-02-02 20:08:00', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(38, '2018-02-02 20:09:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 4adfadffds', 12, 4, 1),
(39, '2018-02-02 20:12:47', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3sadadad', 8, 3, 1),
(40, '2018-02-03 18:57:49', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(41, '2018-02-03 19:03:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(42, '2018-02-03 19:28:26', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(43, '2018-02-03 19:29:05', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(44, '2018-02-03 19:30:41', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(45, '2018-02-03 19:31:14', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(46, '2018-02-03 19:32:35', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(47, '2018-02-03 19:45:43', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(48, '2018-02-03 19:46:09', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(49, '2018-02-03 19:46:45', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(50, '2018-02-03 19:47:20', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(51, '2018-02-03 19:50:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(52, '2018-02-03 19:51:08', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(53, '2018-02-03 19:51:41', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(54, '2018-02-03 19:52:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(55, '2018-02-03 19:52:41', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(56, '2018-02-03 19:56:29', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(57, '2018-02-03 19:57:16', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(58, '2018-02-03 19:58:54', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(59, '2018-02-03 20:03:32', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(60, '2018-02-03 20:05:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(61, '2018-02-03 20:07:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sdfsdfsdf', 9, 2, 1),
(62, '2018-02-03 20:11:42', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 3DSADADSDSDA', 8, 3, 1),
(63, '2018-02-03 20:12:19', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2DWSADA', 9, 2, 1),
(64, '2018-02-03 20:16:36', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2DWSADA', 9, 2, 1),
(65, '2018-02-03 20:19:35', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2DWSADA', 9, 2, 1),
(66, '2018-02-03 20:28:01', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2DWSADA', 9, 2, 1),
(67, '2018-02-03 20:41:26', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(68, '2018-02-03 20:42:02', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(69, '2018-02-03 20:42:59', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(70, '2018-02-03 20:44:17', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(71, '2018-02-03 20:45:24', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(72, '2018-02-03 20:46:24', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(73, '2018-02-03 20:46:30', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(74, '2018-02-03 20:49:25', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(75, '2018-02-03 20:49:53', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(76, '2018-02-03 20:50:46', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(77, '2018-02-03 20:51:14', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(78, '2018-02-03 20:51:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(79, '2018-02-03 20:52:05', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(80, '2018-02-03 20:53:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(81, '2018-02-03 20:53:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(82, '2018-02-03 20:53:50', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(83, '2018-02-03 20:56:44', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(84, '2018-02-03 20:59:58', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(85, '2018-02-03 21:01:50', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(86, '2018-02-03 21:02:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(87, '2018-02-03 21:03:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(88, '2018-02-03 21:04:03', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(89, '2018-02-03 21:04:33', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(90, '2018-02-03 21:04:50', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(91, '2018-02-03 21:05:02', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(92, '2018-02-03 21:05:57', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(93, '2018-02-03 21:07:03', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(94, '2018-02-03 21:16:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(95, '2018-02-03 21:17:54', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(96, '2018-02-03 21:18:13', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(97, '2018-02-03 21:18:28', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(98, '2018-02-03 21:20:04', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(99, '2018-02-03 21:20:17', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(100, '2018-02-03 21:23:31', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 3wqdqwqwd', 9, 3, 1),
(101, '2018-02-03 21:25:25', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sc', 9, 2, 1),
(102, '2018-02-03 21:25:52', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2sc', 9, 2, 1),
(103, '2018-02-03 21:31:12', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2dwdwddw', 9, 2, 1),
(104, '2018-02-03 21:31:29', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2dwdwddw', 9, 2, 1),
(105, '2018-02-03 21:32:04', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2dwdwddw', 9, 2, 1),
(106, '2018-02-03 21:37:02', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 2dwdwddw', 9, 2, 1),
(107, '2018-02-03 21:39:07', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(108, '2018-02-03 21:39:19', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(109, '2018-02-03 21:39:30', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(110, '2018-02-03 21:41:16', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(111, '2018-02-03 21:41:40', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(112, '2018-02-03 21:43:48', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(113, '2018-02-03 21:44:35', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(114, '2018-02-03 21:44:48', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(115, '2018-02-03 21:45:17', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(116, '2018-02-03 21:50:32', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(117, '2018-02-03 21:50:51', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(118, '2018-02-03 21:51:31', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(119, '2018-02-03 21:55:51', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(120, '2018-02-03 21:56:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(121, '2018-02-03 21:56:36', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(122, '2018-02-03 21:57:12', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(123, '2018-02-03 23:50:16', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(124, '2018-02-03 23:57:55', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(125, '2018-02-04 00:00:20', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Iphone Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Iphone Gold, qty : 4qsqs', 9, 4, 1),
(126, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 0, 0, 1),
(127, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', 0, 0, 1),
(128, '2018-02-10 22:53:59', '0000-00-00 00:00:00', 44, 31, 'Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Kaki, qty : 10022018Tes Hari Sabtu', 7, 10022018, 1),
(129, '2018-02-10 23:47:01', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Laki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Laki, qty : 2efkdafkjfdaf', 5, 2, 1),
(130, '2018-02-10 23:47:52', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Laki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Laki, qty : 2efkdafkjfdaf', 5, 2, 1),
(131, '2018-02-10 23:49:04', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Laki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Laki, qty : 2efkdafkjfdaf', 5, 2, 1),
(132, '2018-02-10 23:49:10', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Laki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Laki, qty : 2efkdafkjfdaf', 5, 2, 1),
(133, '2018-02-10 23:49:30', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Laki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Laki, qty : 2efkdafkjfdaf', 5, 2, 1),
(134, '2018-02-13 18:43:59', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Kaki, qty : 4JSDJKDJKSJD', 7, 4, 1),
(135, '2018-02-13 19:26:39', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 1sadad', 8, 1, 1),
(136, '2018-02-13 19:30:48', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 1sadad', 8, 1, 1),
(137, '2018-02-13 19:32:25', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 1sadad', 8, 1, 1),
(138, '2018-02-13 19:32:59', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 1sadad', 8, 1, 1),
(139, '2018-02-13 19:39:57', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Kalung Metal', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Metal, qty : 1sadad', 8, 1, 1),
(140, '2018-02-13 19:53:11', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 3sdwdasd', 10, 3, 1),
(141, '2018-02-13 23:03:41', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy USB Silver', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy USB Silver, qty : 4Beli usb silcer', 11, 4, 1),
(142, '2018-02-18 13:22:27', '0000-00-00 00:00:00', 44, 50, 'Request for quotation from  to buy Extraordinary Shore Picture', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Extraordinary Shore Picture, qty : 12Beli 12 pcs gambarnya ', 22, 12, 1),
(143, '2018-02-20 23:09:49', '0000-00-00 00:00:00', 44, 47, 'Request for quotation from  to buy TEst online', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy TEst online, qty : 123123', 21, 123, 1),
(144, '2018-02-21 14:40:19', '0000-00-00 00:00:00', 44, 47, 'Request for quotation from  to buy Aero 15x', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Aero 15x, qty : 3Ori gan ?', 23, 3, 1),
(145, '2018-02-21 16:53:52', '0000-00-00 00:00:00', 48, 47, 'Request for quotation from  to buy Aero 15x', 'Pemesanan oleh : dsdsdsd(actorit.tech@gmail.com) to buy Aero 15x, qty : 1515x', 23, 15, 1),
(146, '2018-02-21 21:30:08', '0000-00-00 00:00:00', 48, 35, 'Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : dsdsdsd(actorit.tech@gmail.com) to buy Kalung Kaki, qty : 3engken?', 7, 3, 1),
(147, '2018-02-24 01:43:46', '0000-00-00 00:00:00', 44, 35, 'Request for quotation from  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 124123', 10, 124, 1),
(148, '2018-03-03 15:09:53', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 2ok\r\n', 10, 2, 0),
(149, '2018-03-03 21:13:28', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy USB Silver', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy USB Silver, qty : 3ok', 11, 3, 1),
(150, '2018-03-03 21:23:36', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Golden mouse ring, qty : 12ok', 12, 12, 1),
(151, '2018-05-12 16:13:54', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Kalung Kaki', 'Pemesanan oleh : WaisnawaPutra(weizeinawa@gmail.com) to buy Kalung Kaki, qty : 156ok ya porto', 7, 156, 1),
(152, '2018-05-12 22:14:39', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Golden mouse ring', 'Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Golden mouse ring, qty : 1ssdsd', 12, 1, 1),
(153, '2018-05-13 15:42:55', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', '<html><head><meta content=\"text/html; charset=UTF-8\" http-equiv=\"content-type\"><style type=\"text/css\">ol{margin:0;padding:0}table td,table th{padding:0}.c2{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left;height:11pt}.c3{color:#000000;font-weight:700;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:\"Arial\";font-style:normal}.c0{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:\"Arial\";font-style:normal}.c1{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:center}.c4{background-color:#ffffff;max-width:451.4pt;padding:72pt 72pt 72pt 72pt}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:\"Arial\"}p{margin:0;color:#000000;font-size:11pt;font-family:\"Arial\"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:\"Arial\";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style></head><body class=\"c4\"><p class=\"c1\"><span style=\"overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 137.00px; height: 54.00px;\"><img alt=\"\" src=\"images/image1.png\" style=\"width: 137.00px; height: 54.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);\" title=\"\"></span></p><p class=\"c1\"><span class=\"c3\">REGISTRATION</span></p><p class=\"c2\"><span class=\"c3\"></span></p></body></html>', 9, 1, 0),
(154, '2018-05-13 15:46:37', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(155, '2018-05-13 15:46:41', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(156, '2018-05-13 15:46:45', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(157, '2018-05-13 15:46:49', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(158, '2018-05-13 15:46:51', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(159, '2018-05-13 15:46:54', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0),
(160, '2018-05-13 15:46:55', '0000-00-00 00:00:00', 44, 35, ' Request for quotation from  to buy Iphone Gold', ' Pemesanan oleh : WaisnawaPutra(1weizeinawa@gmail.com) to buy Iphone Gold, qty : 56Kfkffkf<br><span class=\'glyphicon glyphicon-time\'></span>', 9, 56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbquotationdetail`
--

CREATE TABLE `tbquotationdetail` (
  `IdQuotationDetail` int(11) NOT NULL,
  `IdQuotation` int(11) NOT NULL,
  `IdMember` int(11) NOT NULL,
  `Message` text NOT NULL,
  `DateSend` datetime NOT NULL,
  `DateRead` datetime NOT NULL,
  `IsRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbquotationdetail`
--

INSERT INTO `tbquotationdetail` (`IdQuotationDetail`, `IdQuotation`, `IdMember`, `Message`, `DateSend`, `DateRead`, `IsRead`) VALUES
(1, 1, 35, 'sudah ya', '2017-11-01 00:00:00', '0000-00-00 00:00:00', 1),
(2, 1, 29, 'Sudah dipersiapkan yg saya Minta?', '2017-09-14 00:00:00', '0000-00-00 00:00:00', 1),
(3, 1, 35, 'Suksma', '2017-11-03 06:10:10', '0000-00-00 00:00:00', 1),
(4, 1, 35, 'Mantap', '2017-11-03 06:17:16', '0000-00-00 00:00:00', 1),
(5, 1, 35, 'yeah', '2017-11-03 13:22:55', '0000-00-00 00:00:00', 1),
(6, 1, 35, '', '2017-11-03 19:27:52', '0000-00-00 00:00:00', 1),
(7, 1, 35, 'matap', '2017-11-03 20:03:51', '0000-00-00 00:00:00', 1),
(8, 1, 35, 'oke siap', '2017-11-03 20:05:37', '0000-00-00 00:00:00', 1),
(9, 1, 35, 'pas', '2017-11-03 20:05:45', '0000-00-00 00:00:00', 1),
(10, 1, 35, '123', '2017-11-03 20:08:06', '0000-00-00 00:00:00', 1),
(11, 1, 35, 'tes', '2017-11-03 20:09:56', '0000-00-00 00:00:00', 1),
(12, 1, 35, 'tes', '2017-11-03 20:10:06', '0000-00-00 00:00:00', 1),
(13, 1, 35, 'mkan', '2017-11-03 20:13:28', '0000-00-00 00:00:00', 1),
(14, 1, 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(15, 1, 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(16, 1, 35, 'mkan', '2017-11-03 20:13:29', '0000-00-00 00:00:00', 1),
(17, 1, 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(18, 1, 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(19, 1, 35, 'mkan', '2017-11-03 20:13:30', '0000-00-00 00:00:00', 1),
(20, 1, 35, 'mkan', '2017-11-03 20:13:32', '0000-00-00 00:00:00', 1),
(21, 1, 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(22, 1, 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(23, 1, 35, 'mkan', '2017-11-03 20:13:34', '0000-00-00 00:00:00', 1),
(24, 1, 35, 'siap', '2017-11-03 20:13:44', '0000-00-00 00:00:00', 1),
(25, 1, 35, 'gerak', '2017-11-03 20:15:07', '0000-00-00 00:00:00', 1),
(26, 1, 35, 'gerak', '2017-11-03 20:15:15', '0000-00-00 00:00:00', 1),
(27, 1, 35, 'ok', '2017-11-03 20:16:24', '0000-00-00 00:00:00', 1),
(28, 1, 35, 'ok', '2017-11-03 20:16:36', '0000-00-00 00:00:00', 1),
(29, 1, 35, 'ok', '2017-11-03 20:16:37', '0000-00-00 00:00:00', 1),
(30, 1, 35, 'ok', '2017-11-03 20:18:04', '0000-00-00 00:00:00', 1),
(31, 1, 35, '2', '2017-11-03 20:18:11', '0000-00-00 00:00:00', 1),
(32, 1, 35, '2', '2017-11-03 20:18:14', '0000-00-00 00:00:00', 1),
(33, 1, 35, 'dsada', '2017-11-03 20:21:28', '0000-00-00 00:00:00', 1),
(34, 1, 35, 'siap', '2017-11-03 20:25:22', '0000-00-00 00:00:00', 1),
(35, 1, 35, 'siap', '2017-11-03 20:25:23', '0000-00-00 00:00:00', 1),
(36, 1, 35, '2026', '2017-11-03 20:26:19', '0000-00-00 00:00:00', 1),
(37, 1, 35, '2028', '2017-11-03 20:28:33', '0000-00-00 00:00:00', 1),
(38, 1, 35, 'sasas', '2017-11-03 20:30:55', '0000-00-00 00:00:00', 1),
(39, 1, 35, 'sasas', '2017-11-03 20:30:56', '0000-00-00 00:00:00', 1),
(40, 1, 35, 'sasas', '2017-11-03 20:30:56', '0000-00-00 00:00:00', 1),
(41, 1, 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(42, 1, 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(43, 1, 35, 'sasas', '2017-11-03 20:30:57', '0000-00-00 00:00:00', 1),
(44, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(45, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(46, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(47, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:04', '0000-00-00 00:00:00', 1),
(48, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:05', '0000-00-00 00:00:00', 1),
(49, 1, 35, '.as,d.as,d.as,d', '2017-11-03 20:31:05', '0000-00-00 00:00:00', 1),
(50, 1, 35, 'sasas', '2017-11-03 20:32:08', '0000-00-00 00:00:00', 1),
(51, 1, 35, 'sasas', '2017-11-03 20:32:09', '0000-00-00 00:00:00', 1),
(52, 1, 35, 'sd.sd', '2017-11-03 20:32:14', '0000-00-00 00:00:00', 1),
(53, 1, 35, 'sd.sd', '2017-11-03 20:32:14', '0000-00-00 00:00:00', 1),
(54, 1, 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(55, 1, 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(56, 1, 35, 'sd.sd', '2017-11-03 20:32:15', '0000-00-00 00:00:00', 1),
(57, 1, 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(58, 1, 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(59, 1, 35, 'sasas', '2017-11-03 20:32:34', '0000-00-00 00:00:00', 1),
(60, 1, 35, 'sasas', '2017-11-03 20:32:35', '0000-00-00 00:00:00', 1),
(61, 1, 35, 'waduh', '2017-11-03 20:32:59', '0000-00-00 00:00:00', 1),
(62, 1, 35, 'waduh', '2017-11-03 20:34:44', '0000-00-00 00:00:00', 1),
(63, 1, 35, 'yeah', '2017-11-03 20:34:51', '0000-00-00 00:00:00', 1),
(64, 1, 35, 'yeah', '2017-11-03 20:34:53', '0000-00-00 00:00:00', 1),
(65, 1, 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(66, 1, 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(67, 1, 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(68, 1, 35, 'yeah', '2017-11-03 20:34:54', '0000-00-00 00:00:00', 1),
(69, 1, 35, 'yeah', '2017-11-03 20:35:59', '0000-00-00 00:00:00', 1),
(70, 1, 35, ',,,,', '2017-11-03 20:37:31', '0000-00-00 00:00:00', 1),
(71, 1, 35, 'tesss', '2017-11-03 20:37:54', '0000-00-00 00:00:00', 1),
(72, 1, 35, 'fun', '2017-11-03 20:39:28', '0000-00-00 00:00:00', 1),
(73, 1, 35, 'sap', '2017-11-03 20:40:25', '0000-00-00 00:00:00', 1),
(74, 1, 35, 'sap', '2017-11-03 20:40:55', '0000-00-00 00:00:00', 1),
(75, 1, 35, 'test', '2017-11-03 21:00:46', '0000-00-00 00:00:00', 1),
(76, 1, 35, 'test', '2017-11-03 21:00:57', '0000-00-00 00:00:00', 1),
(77, 1, 35, 'makan', '2017-11-03 21:01:27', '0000-00-00 00:00:00', 1),
(78, 1, 35, 'ok', '2017-11-03 21:03:01', '0000-00-00 00:00:00', 1),
(79, 1, 35, 'tes', '2017-11-03 21:03:36', '0000-00-00 00:00:00', 1),
(80, 1, 35, 'makan', '2017-11-03 21:06:03', '0000-00-00 00:00:00', 1),
(81, 1, 35, 'all', '2017-11-03 21:06:16', '0000-00-00 00:00:00', 1),
(82, 1, 35, '2106', '2017-11-03 21:06:31', '0000-00-00 00:00:00', 1),
(83, 1, 35, 'sss', '2017-11-03 21:07:53', '0000-00-00 00:00:00', 1),
(84, 1, 35, 'sssdddd', '2017-11-03 21:07:57', '0000-00-00 00:00:00', 1),
(85, 1, 35, 'sssdddd', '2017-11-03 21:07:58', '0000-00-00 00:00:00', 1),
(86, 1, 35, 'sssdddd', '2017-11-03 21:07:58', '0000-00-00 00:00:00', 1),
(87, 1, 35, 'sssdddd', '2017-11-03 21:07:58', '0000-00-00 00:00:00', 1),
(88, 1, 35, 'sssdddd', '2017-11-03 21:08:02', '0000-00-00 00:00:00', 1),
(89, 1, 35, 'tes', '2017-11-03 21:08:11', '0000-00-00 00:00:00', 1),
(90, 1, 35, 'tes', '2017-11-03 21:08:13', '0000-00-00 00:00:00', 1),
(91, 1, 35, 'tes', '2017-11-03 21:08:13', '0000-00-00 00:00:00', 1),
(92, 1, 35, 'tes', '2017-11-03 21:08:14', '0000-00-00 00:00:00', 1),
(93, 1, 35, 'tes', '2017-11-03 21:08:14', '0000-00-00 00:00:00', 1),
(94, 1, 35, 'tes', '2017-11-03 21:08:14', '0000-00-00 00:00:00', 1),
(95, 1, 35, 'tes', '2017-11-03 21:08:14', '0000-00-00 00:00:00', 1),
(96, 1, 35, 'tes', '2017-11-03 21:08:15', '0000-00-00 00:00:00', 1),
(97, 1, 35, 'tes', '2017-11-03 21:08:15', '0000-00-00 00:00:00', 1),
(98, 1, 35, 'tes', '2017-11-03 21:08:15', '0000-00-00 00:00:00', 1),
(99, 1, 35, 'tes', '2017-11-03 21:08:15', '0000-00-00 00:00:00', 1),
(100, 1, 35, 'lo', '2017-11-03 21:09:06', '0000-00-00 00:00:00', 1),
(101, 1, 35, 'lo', '2017-11-03 21:09:08', '0000-00-00 00:00:00', 1),
(102, 1, 35, 'lo', '2017-11-03 21:09:08', '0000-00-00 00:00:00', 1),
(103, 1, 35, 'lo', '2017-11-03 21:09:09', '0000-00-00 00:00:00', 1),
(104, 1, 35, 'lo', '2017-11-03 21:09:09', '0000-00-00 00:00:00', 1),
(105, 1, 35, 'lo', '2017-11-03 21:09:09', '0000-00-00 00:00:00', 1),
(106, 1, 35, 'lo', '2017-11-03 21:09:09', '0000-00-00 00:00:00', 1),
(107, 1, 35, 'lo', '2017-11-03 21:09:10', '0000-00-00 00:00:00', 1),
(108, 1, 35, 'lo', '2017-11-03 21:09:10', '0000-00-00 00:00:00', 1),
(109, 1, 35, 'lo', '2017-11-03 21:09:11', '0000-00-00 00:00:00', 1),
(110, 1, 35, 'lo', '2017-11-03 21:09:11', '0000-00-00 00:00:00', 1),
(111, 1, 35, 'lo', '2017-11-03 21:09:11', '0000-00-00 00:00:00', 1),
(112, 1, 35, 'lo', '2017-11-03 21:09:11', '0000-00-00 00:00:00', 1),
(113, 1, 35, 'lo', '2017-11-03 21:09:12', '0000-00-00 00:00:00', 1),
(114, 1, 35, 'sdsd', '2017-11-03 21:26:18', '0000-00-00 00:00:00', 1),
(115, 1, 35, 'sdsd', '2017-11-03 21:26:37', '0000-00-00 00:00:00', 1),
(116, 1, 35, 'sdsd', '2017-11-03 21:26:43', '0000-00-00 00:00:00', 1),
(117, 1, 35, '1', '2017-11-03 21:27:44', '0000-00-00 00:00:00', 1),
(118, 1, 35, 'asasas', '2017-11-03 21:28:19', '0000-00-00 00:00:00', 1),
(119, 1, 35, 'sdsd', '2017-11-03 21:32:57', '0000-00-00 00:00:00', 1),
(120, 1, 35, 'kfc', '2017-11-03 21:44:59', '0000-00-00 00:00:00', 1),
(121, 1, 35, 'asus', '2017-11-03 21:45:25', '0000-00-00 00:00:00', 1),
(122, 1, 35, 'asus', '2017-11-03 21:45:42', '0000-00-00 00:00:00', 1),
(123, 1, 35, 'asus', '2017-11-03 21:45:42', '0000-00-00 00:00:00', 1),
(124, 1, 35, 'Mans', '2017-11-03 21:46:18', '0000-00-00 00:00:00', 1),
(125, 1, 35, 'Mans', '2017-11-03 21:46:20', '0000-00-00 00:00:00', 1),
(126, 1, 35, 'dfsfsdfsdf', '2017-11-03 21:46:24', '0000-00-00 00:00:00', 1),
(127, 1, 35, 'dfsfsdfsdf', '2017-11-03 21:46:24', '0000-00-00 00:00:00', 1),
(128, 1, 35, 'dfsfsdfsdf', '2017-11-03 21:46:26', '0000-00-00 00:00:00', 1),
(129, 1, 35, 'dfsfsdfsdfdfsfsdf', '2017-11-03 21:46:28', '0000-00-00 00:00:00', 1),
(130, 1, 35, 'nyak', '2017-11-03 21:46:42', '0000-00-00 00:00:00', 1),
(131, 1, 35, 'oke siap', '2017-11-03 21:51:37', '0000-00-00 00:00:00', 1),
(132, 1, 35, 'oke siap', '2017-11-03 21:51:38', '0000-00-00 00:00:00', 1),
(133, 1, 35, 'oke siap', '2017-11-03 21:51:44', '0000-00-00 00:00:00', 1),
(134, 1, 35, 'nyak asane', '2017-11-03 21:53:17', '0000-00-00 00:00:00', 1),
(135, 1, 35, 'nyak asane ae', '2017-11-03 21:53:23', '0000-00-00 00:00:00', 1),
(136, 1, 35, 'sasas', '2017-11-03 21:55:13', '0000-00-00 00:00:00', 1),
(137, 1, 35, 'ok ges', '2017-11-03 22:00:54', '0000-00-00 00:00:00', 1),
(138, 1, 35, 'hello gess', '2017-11-03 22:07:28', '0000-00-00 00:00:00', 1),
(139, 1, 35, 'hello gess', '2017-11-03 22:07:31', '0000-00-00 00:00:00', 1),
(140, 1, 35, 'Mantap gess', '2017-11-03 22:07:44', '0000-00-00 00:00:00', 1),
(141, 1, 35, 't', '2017-11-03 22:15:37', '0000-00-00 00:00:00', 1),
(142, 1, 35, 'sdsdsd', '2017-11-03 22:18:35', '0000-00-00 00:00:00', 1),
(143, 1, 35, 'ok oce', '2017-11-03 22:21:59', '0000-00-00 00:00:00', 1),
(144, 1, 35, 'max linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus techmax linus tech', '2017-11-03 22:22:19', '0000-00-00 00:00:00', 1),
(145, 1, 35, 'Indoraya', '2017-11-03 22:22:27', '0000-00-00 00:00:00', 1),
(146, 1, 35, 'Indorayajskjskdjg', '2017-11-03 22:23:32', '0000-00-00 00:00:00', 1),
(147, 2, 35, 'Jadi beli ?', '2017-11-03 22:34:11', '0000-00-00 00:00:00', 1),
(148, 2, 35, 'Gmna', '2017-11-03 22:34:28', '0000-00-00 00:00:00', 1),
(149, 3, 35, 'woi', '2017-11-21 18:18:59', '0000-00-00 00:00:00', 1),
(150, 3, 35, 'mantap gan', '2017-11-21 18:19:10', '0000-00-00 00:00:00', 1),
(151, 4, 35, 'prema', '2017-11-24 15:53:20', '0000-00-00 00:00:00', 1),
(152, 4, 35, 'premamakan', '2017-11-24 15:53:22', '0000-00-00 00:00:00', 1),
(153, 4, 35, 'premamakanjdhsfjhsdf', '2017-11-24 15:53:27', '0000-00-00 00:00:00', 1),
(154, 4, 35, 'premamakanjdhsfjhsdffsdf', '2017-11-24 15:53:28', '0000-00-00 00:00:00', 1),
(155, 4, 35, 'premamakanjdhsfjhsdffsdfskfkjsdf', '2017-11-24 15:53:29', '0000-00-00 00:00:00', 1),
(156, 4, 35, 'premamakanjdhsfjhsdffsdfskfkjsdfksnfksdddfsdf', '2017-11-24 15:53:59', '0000-00-00 00:00:00', 1),
(157, 4, 35, 'premamakanjdhsfjhsdffsdfskfkjsdfksnfksdddfsdf', '2017-11-24 15:54:11', '0000-00-00 00:00:00', 1),
(158, 4, 35, '3232132', '2018-01-22 09:41:23', '0000-00-00 00:00:00', 1),
(159, 1, 44, 'YUk', '2018-01-30 19:09:33', '0000-00-00 00:00:00', 1),
(160, 1, 35, 'ok guys', '2018-01-30 19:37:25', '0000-00-00 00:00:00', 1),
(161, 2, 44, 'Ok Siap', '2018-01-30 21:55:06', '0000-00-00 00:00:00', 1),
(162, 2, 35, 'mantap', '2018-01-30 21:55:21', '0000-00-00 00:00:00', 1),
(163, 1, 44, 'ok', '2018-01-30 23:27:45', '0000-00-00 00:00:00', 1),
(164, 1, 44, 'be siap ges', '2018-01-31 10:38:06', '0000-00-00 00:00:00', 1),
(165, 1, 35, 'mantaf', '2018-01-31 10:38:21', '0000-00-00 00:00:00', 1),
(166, 1, 44, 'ew;ew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdew;fjkjfsdkljfdfjkjfsdkljfd', '2018-02-01 17:08:30', '0000-00-00 00:00:00', 1),
(167, 1, 44, 'kjsdkjdskjsdkjsd ksdkjskdjs kjksdjsd kjkjsd kkjksdj kjkjsdkj kjskjd ', '2018-02-01 17:37:21', '0000-00-00 00:00:00', 1),
(168, 2, 44, 'lklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksalklklasklakslakslkaslksa', '2018-02-01 19:23:47', '0000-00-00 00:00:00', 1),
(169, 2, 44, 'nndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsndnndmsdnmsnd', '2018-02-01 19:25:48', '0000-00-00 00:00:00', 1),
(170, 2, 44, 'ad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,ad', '2018-02-01 19:26:06', '0000-00-00 00:00:00', 1),
(171, 1, 44, 'ad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,adad,ad', '2018-02-01 19:26:25', '0000-00-00 00:00:00', 1),
(172, 122, 35, 'kjkj', '2018-02-05 18:24:09', '0000-00-00 00:00:00', 1),
(173, 1, 35, 'dkfjsdkfslfdlskjfsd3', '2018-02-06 12:24:43', '0000-00-00 00:00:00', 1),
(174, 1, 35, 'dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3', '2018-02-06 12:24:51', '0000-00-00 00:00:00', 1),
(175, 1, 35, 'dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3dkfjsdkfslfdlskjfsd3', '2018-02-06 12:25:52', '0000-00-00 00:00:00', 1),
(176, 125, 35, 'adadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsdadadsd', '2018-02-06 12:43:30', '0000-00-00 00:00:00', 1),
(177, 142, 50, 'NETT 12.000.000', '2018-02-18 13:24:28', '0000-00-00 00:00:00', 1),
(178, 142, 50, 'NETT 12.000.000', '2018-02-18 13:24:29', '0000-00-00 00:00:00', 1),
(179, 142, 44, 'ok', '2018-02-18 13:24:45', '0000-00-00 00:00:00', 1),
(180, 143, 44, 'ada stocnya guan', '2018-02-20 23:10:06', '0000-00-00 00:00:00', 1),
(181, 143, 47, 'adua', '2018-02-21 14:36:53', '0000-00-00 00:00:00', 1),
(182, 144, 44, 'gmna gan?', '2018-02-21 14:42:14', '0000-00-00 00:00:00', 1),
(183, 144, 47, 'ad', '2018-02-21 15:39:10', '0000-00-00 00:00:00', 1),
(184, 144, 47, 'ad ya', '2018-02-21 15:39:15', '0000-00-00 00:00:00', 1),
(185, 144, 44, 'gmna gan?', '2018-02-21 15:42:11', '0000-00-00 00:00:00', 1),
(186, 145, 48, 'Gmna?', '2018-02-21 16:56:05', '0000-00-00 00:00:00', 1),
(187, 145, 48, 'Gmna?', '2018-02-21 21:29:48', '0000-00-00 00:00:00', 1),
(188, 146, 48, 'engken pk', '2018-02-21 21:31:04', '0000-00-00 00:00:00', 1),
(189, 144, 44, 'klo', '2018-02-22 20:46:02', '0000-00-00 00:00:00', 1),
(190, 144, 44, 'kloha', '2018-02-22 20:46:07', '0000-00-00 00:00:00', 1),
(191, 144, 44, 'hal9', '2018-02-22 21:05:03', '0000-00-00 00:00:00', 1),
(192, 141, 35, 'ok', '2018-02-22 22:23:13', '0000-00-00 00:00:00', 1),
(193, 141, 35, 'engken ad?', '2018-02-22 22:23:32', '0000-00-00 00:00:00', 1),
(194, 141, 35, 'read ci gen', '2018-02-22 22:28:16', '0000-00-00 00:00:00', 1),
(195, 141, 35, 'kle buung', '2018-02-22 22:32:20', '0000-00-00 00:00:00', 1),
(196, 141, 44, 'sante nae ak', '2018-02-23 22:19:31', '0000-00-00 00:00:00', 1),
(197, 141, 44, '*sante nae bos', '2018-02-23 22:19:47', '0000-00-00 00:00:00', 1),
(198, 141, 35, 'bungut cie sante', '2018-02-23 22:20:03', '0000-00-00 00:00:00', 1),
(199, 141, 35, 'ap', '2018-02-23 22:22:57', '0000-00-00 00:00:00', 1),
(200, 141, 35, 'nh', '2018-02-23 22:43:41', '0000-00-00 00:00:00', 1),
(201, 141, 35, 'nh sip', '2018-02-23 22:44:14', '0000-00-00 00:00:00', 1),
(202, 141, 35, 'badah', '2018-02-23 22:47:26', '0000-00-00 00:00:00', 1),
(203, 141, 35, 'pkok ne kene', '2018-02-23 23:05:12', '0000-00-00 00:00:00', 1),
(204, 141, 35, 'dan keto', '2018-02-23 23:06:22', '0000-00-00 00:00:00', 1),
(205, 141, 35, 'sperti ini ceritanya', '2018-02-23 23:07:39', '0000-00-00 00:00:00', 1),
(206, 141, 44, 'gmna', '2018-02-24 01:37:10', '0000-00-00 00:00:00', 1),
(207, 147, 35, 'kenapa gan?', '2018-02-24 01:45:13', '0000-00-00 00:00:00', 1),
(208, 147, 44, 'gak kenapa', '2018-02-24 01:45:33', '0000-00-00 00:00:00', 1),
(209, 147, 35, 'WTF', '2018-02-24 01:45:55', '0000-00-00 00:00:00', 1),
(210, 147, 44, 'enken keneh e ne?', '2018-02-24 01:48:01', '0000-00-00 00:00:00', 1),
(211, 147, 44, 'enken keneh e ne?', '2018-02-24 01:49:18', '0000-00-00 00:00:00', 1),
(212, 147, 44, 'Haaaaa?????', '2018-02-24 01:49:25', '0000-00-00 00:00:00', 1),
(213, 147, 35, 'Uhahahaha', '2018-02-24 01:49:38', '0000-00-00 00:00:00', 1),
(214, 147, 35, 'Uhahahaha', '2018-02-24 01:49:43', '0000-00-00 00:00:00', 1),
(215, 147, 35, 'Uhahahaha', '2018-02-24 01:49:54', '0000-00-00 00:00:00', 1),
(216, 147, 35, 'WUAHAHAHA', '2018-02-24 01:50:01', '0000-00-00 00:00:00', 1),
(217, 147, 35, '0', '2018-02-24 01:50:54', '0000-00-00 00:00:00', 1),
(218, 147, 35, '0K', '2018-02-24 01:50:58', '0000-00-00 00:00:00', 1),
(219, 147, 35, '0KOK', '2018-02-24 01:51:01', '0000-00-00 00:00:00', 1),
(220, 147, 35, '0KOKKO', '2018-02-24 01:51:03', '0000-00-00 00:00:00', 1),
(221, 147, 44, 'HAH?', '2018-02-24 02:10:14', '0000-00-00 00:00:00', 1),
(222, 147, 44, 'KENAPA?', '2018-02-24 02:10:26', '0000-00-00 00:00:00', 1),
(223, 147, 44, 'KENAPA?', '2018-02-24 02:10:31', '0000-00-00 00:00:00', 1),
(224, 147, 44, 'JAWAB', '2018-02-24 02:10:50', '0000-00-00 00:00:00', 1),
(225, 147, 35, '0KOKKO', '2018-02-24 02:11:53', '0000-00-00 00:00:00', 1),
(226, 147, 35, 'K', '2018-02-24 02:12:02', '0000-00-00 00:00:00', 1),
(227, 147, 35, 'K', '2018-02-24 02:12:03', '0000-00-00 00:00:00', 1),
(228, 147, 35, 'K', '2018-02-24 02:12:03', '0000-00-00 00:00:00', 1),
(229, 147, 35, 'K', '2018-02-24 02:12:03', '0000-00-00 00:00:00', 1),
(230, 147, 35, 'K', '2018-02-24 02:12:04', '0000-00-00 00:00:00', 1),
(231, 147, 35, 'K', '2018-02-24 02:12:04', '0000-00-00 00:00:00', 1),
(232, 147, 35, 'K', '2018-02-24 02:12:04', '0000-00-00 00:00:00', 1),
(233, 147, 35, 'K', '2018-02-24 02:12:04', '0000-00-00 00:00:00', 1),
(234, 147, 35, 'OP', '2018-02-24 02:12:11', '0000-00-00 00:00:00', 1),
(235, 147, 35, 'YES', '2018-02-24 02:12:26', '0000-00-00 00:00:00', 1),
(236, 147, 44, 'begitulah', '2018-02-24 22:31:23', '0000-00-00 00:00:00', 1),
(237, 147, 35, 'Apanya?', '2018-02-24 22:45:26', '0000-00-00 00:00:00', 1),
(238, 147, 44, 'Itunya', '2018-02-24 22:45:32', '0000-00-00 00:00:00', 1),
(239, 147, 35, 'mksdnya', '2018-02-24 22:45:46', '0000-00-00 00:00:00', 1),
(240, 147, 44, 'gitu dah', '2018-02-24 22:45:55', '0000-00-00 00:00:00', 1),
(241, 147, 35, 't', '2018-02-24 22:52:43', '0000-00-00 00:00:00', 1),
(242, 147, 44, 'l', '2018-02-24 22:53:05', '0000-00-00 00:00:00', 1),
(243, 147, 44, 'la', '2018-02-24 22:53:11', '0000-00-00 00:00:00', 1),
(244, 147, 44, 'iya', '2018-02-24 22:58:57', '0000-00-00 00:00:00', 1),
(245, 147, 35, 'apanya?', '2018-02-24 22:59:10', '0000-00-00 00:00:00', 1),
(246, 147, 44, 'iya itu', '2018-02-24 22:59:20', '0000-00-00 00:00:00', 1),
(247, 147, 44, 'gitu ya', '2018-02-24 23:01:40', '0000-00-00 00:00:00', 1),
(248, 147, 44, 'inget', '2018-02-24 23:02:41', '0000-00-00 00:00:00', 1),
(249, 147, 35, 'ya', '2018-02-24 23:02:48', '0000-00-00 00:00:00', 1),
(250, 147, 35, 'ya', '2018-02-24 23:02:59', '0000-00-00 00:00:00', 1),
(251, 147, 44, 'inget', '2018-02-24 23:03:31', '0000-00-00 00:00:00', 1),
(252, 147, 35, 'bawel', '2018-02-24 23:03:40', '0000-00-00 00:00:00', 1),
(253, 147, 35, 'sebel', '2018-02-24 23:03:56', '0000-00-00 00:00:00', 1),
(254, 147, 35, 'sebel', '2018-02-24 23:03:59', '0000-00-00 00:00:00', 1),
(255, 147, 35, 'sebel', '2018-02-24 23:03:59', '0000-00-00 00:00:00', 1),
(256, 147, 35, 'sebel', '2018-02-24 23:03:59', '0000-00-00 00:00:00', 1),
(257, 147, 35, 'sebel', '2018-02-24 23:03:59', '0000-00-00 00:00:00', 1),
(258, 147, 35, 'sebel iyuh', '2018-02-24 23:04:05', '0000-00-00 00:00:00', 1),
(259, 147, 44, 'inget', '2018-02-24 23:04:22', '0000-00-00 00:00:00', 1),
(260, 147, 35, 'ya', '2018-02-24 23:04:30', '0000-00-00 00:00:00', 1),
(261, 147, 35, 'ya inget ya', '2018-02-24 23:08:05', '0000-00-00 00:00:00', 1),
(262, 147, 44, 'gak lupa kok', '2018-02-24 23:08:14', '0000-00-00 00:00:00', 1),
(263, 147, 44, 'suer', '2018-02-24 23:08:25', '0000-00-00 00:00:00', 1),
(264, 147, 44, 'suer demi subur', '2018-02-24 23:08:42', '0000-00-00 00:00:00', 1),
(265, 147, 35, 'ok', '2018-02-24 23:08:57', '0000-00-00 00:00:00', 1),
(266, 147, 35, 'gmna?', '2018-02-25 13:01:33', '0000-00-00 00:00:00', 1),
(267, 147, 44, 'apanya?', '2018-02-25 13:01:55', '0000-00-00 00:00:00', 1),
(268, 147, 35, 'gmna?', '2018-02-25 13:02:09', '0000-00-00 00:00:00', 1),
(269, 147, 44, 'apa', '2018-02-25 13:02:17', '0000-00-00 00:00:00', 1),
(270, 147, 44, 'apa?', '2018-02-25 13:12:43', '0000-00-00 00:00:00', 1),
(271, 147, 44, 'gmna2?', '2018-02-25 13:18:40', '0000-00-00 00:00:00', 1),
(272, 147, 35, 'Jadi', '2018-02-25 13:35:49', '0000-00-00 00:00:00', 1),
(273, 147, 35, 'Jadi?', '2018-02-25 13:35:51', '0000-00-00 00:00:00', 1),
(274, 147, 44, 'Juaaaaddddiiii', '2018-02-25 13:36:02', '0000-00-00 00:00:00', 1),
(275, 147, 35, 'ok', '2018-02-25 13:36:12', '0000-00-00 00:00:00', 1),
(276, 147, 44, 'Sip', '2018-02-25 13:36:20', '0000-00-00 00:00:00', 1),
(277, 147, 35, 'Gmna jadi beli?', '2018-02-25 13:38:23', '0000-00-00 00:00:00', 1),
(278, 147, 44, 'Juaadi', '2018-02-25 13:38:28', '0000-00-00 00:00:00', 1),
(279, 147, 44, 'Mantap', '2018-02-25 13:39:56', '0000-00-00 00:00:00', 1),
(280, 147, 35, 'Thanks', '2018-02-25 13:40:13', '0000-00-00 00:00:00', 1),
(281, 147, 44, 'Sip', '2018-02-25 13:40:28', '0000-00-00 00:00:00', 1),
(282, 147, 44, 'ok', '2018-02-25 13:45:43', '0000-00-00 00:00:00', 1),
(283, 147, 44, 'ok', '2018-02-25 13:45:51', '0000-00-00 00:00:00', 1),
(284, 147, 44, 'sip', '2018-02-25 13:46:08', '0000-00-00 00:00:00', 1),
(285, 147, 44, 'ok', '2018-02-25 13:52:49', '0000-00-00 00:00:00', 1),
(286, 147, 44, 'sip', '2018-02-25 13:57:58', '0000-00-00 00:00:00', 1),
(287, 147, 44, 'ok', '2018-02-25 14:00:28', '0000-00-00 00:00:00', 1),
(288, 147, 44, 'Mantap', '2018-02-25 14:00:32', '0000-00-00 00:00:00', 1),
(289, 147, 35, 'ok', '2018-02-25 14:02:15', '0000-00-00 00:00:00', 1),
(290, 147, 35, 'sip', '2018-02-25 14:02:40', '0000-00-00 00:00:00', 1),
(291, 147, 35, 'sip', '2018-02-25 14:02:41', '0000-00-00 00:00:00', 1),
(292, 147, 35, 'sip', '2018-02-25 14:02:45', '0000-00-00 00:00:00', 1),
(293, 147, 35, 'mantap', '2018-02-25 14:02:52', '0000-00-00 00:00:00', 1),
(294, 147, 35, 'mantap', '2018-02-25 14:02:54', '0000-00-00 00:00:00', 1),
(295, 147, 35, '', '2018-02-25 14:03:04', '0000-00-00 00:00:00', 1),
(296, 147, 35, 'mantap', '2018-02-25 14:03:59', '0000-00-00 00:00:00', 1),
(297, 147, 35, 'ok', '2018-02-25 14:04:19', '0000-00-00 00:00:00', 1),
(298, 147, 35, 'Sing', '2018-02-25 14:04:42', '0000-00-00 00:00:00', 1),
(299, 147, 35, 'Ok sip', '2018-02-25 14:04:50', '0000-00-00 00:00:00', 1),
(300, 147, 35, 'mantap', '2018-02-25 14:04:56', '0000-00-00 00:00:00', 1),
(301, 147, 44, 'siap', '2018-02-25 14:05:03', '0000-00-00 00:00:00', 1),
(302, 147, 44, 'siap', '2018-02-25 14:05:05', '0000-00-00 00:00:00', 1),
(303, 147, 44, 'op', '2018-02-25 14:07:56', '0000-00-00 00:00:00', 1),
(304, 147, 44, 'op', '2018-02-25 14:07:57', '0000-00-00 00:00:00', 1),
(305, 147, 44, 'SNK', '2018-02-25 14:08:29', '0000-00-00 00:00:00', 1),
(306, 147, 44, 'Attack on Titan', '2018-02-25 14:08:39', '0000-00-00 00:00:00', 1),
(307, 147, 35, 'yes', '2018-03-01 15:25:40', '0000-00-00 00:00:00', 1),
(308, 147, 35, 'mantap', '2018-03-01 15:25:45', '0000-00-00 00:00:00', 1),
(309, 141, 35, 'sip', '2018-03-01 15:26:15', '0000-00-00 00:00:00', 1),
(310, 139, 35, 'sip gan', '2018-03-01 15:27:30', '0000-00-00 00:00:00', 1),
(311, 139, 35, 'ya', '2018-03-01 20:53:59', '0000-00-00 00:00:00', 1),
(312, 1, 35, 'sip', '2018-03-01 20:54:32', '0000-00-00 00:00:00', 1),
(313, 1, 35, 'ok', '2018-03-01 20:54:56', '0000-00-00 00:00:00', 1),
(314, 147, 35, 'ok', '2018-03-01 20:55:26', '0000-00-00 00:00:00', 1),
(315, 147, 35, 'manta', '2018-03-01 20:55:36', '0000-00-00 00:00:00', 1),
(316, 147, 35, 's', '2018-03-01 20:55:41', '0000-00-00 00:00:00', 1),
(317, 147, 35, 's', '2018-03-01 20:55:42', '0000-00-00 00:00:00', 1),
(318, 136, 35, 'sdsds', '2018-03-01 20:55:51', '0000-00-00 00:00:00', 1),
(319, 136, 35, 's', '2018-03-01 20:56:20', '0000-00-00 00:00:00', 1),
(320, 136, 35, 's', '2018-03-01 20:56:22', '0000-00-00 00:00:00', 1),
(321, 136, 35, 'd', '2018-03-01 20:56:23', '0000-00-00 00:00:00', 1),
(322, 136, 35, 'f', '2018-03-01 20:56:23', '0000-00-00 00:00:00', 1),
(323, 136, 35, 'g', '2018-03-01 20:56:24', '0000-00-00 00:00:00', 1),
(324, 136, 35, 'h', '2018-03-01 20:56:24', '0000-00-00 00:00:00', 1),
(325, 136, 35, 'dsd', '2018-03-01 21:42:05', '0000-00-00 00:00:00', 1),
(326, 135, 35, 'ok', '2018-03-01 21:42:20', '0000-00-00 00:00:00', 1),
(327, 133, 35, 'op', '2018-03-01 21:43:39', '0000-00-00 00:00:00', 1),
(328, 137, 35, 'hklj', '2018-03-01 21:43:53', '0000-00-00 00:00:00', 1),
(329, 136, 35, 'ok', '2018-03-02 18:07:04', '0000-00-00 00:00:00', 1),
(330, 136, 35, 'si', '2018-03-02 18:07:12', '0000-00-00 00:00:00', 1),
(331, 136, 35, 'sdf', '2018-03-02 18:07:13', '0000-00-00 00:00:00', 1),
(332, 136, 35, 'sdf', '2018-03-02 18:07:14', '0000-00-00 00:00:00', 1),
(333, 136, 35, 'dssd', '2018-03-02 18:07:33', '0000-00-00 00:00:00', 1),
(334, 136, 35, 'sdds', '2018-03-02 18:07:34', '0000-00-00 00:00:00', 1),
(335, 136, 35, 'sdsd', '2018-03-02 18:07:34', '0000-00-00 00:00:00', 1),
(336, 136, 35, 'ok', '2018-03-02 18:07:43', '0000-00-00 00:00:00', 1),
(337, 136, 35, 'ok', '2018-03-02 18:07:44', '0000-00-00 00:00:00', 1),
(338, 136, 35, 'oksip', '2018-03-02 18:07:49', '0000-00-00 00:00:00', 1),
(339, 124, 35, 'ok', '2018-03-02 18:08:49', '0000-00-00 00:00:00', 1),
(340, 124, 35, 'ok', '2018-03-02 18:54:17', '0000-00-00 00:00:00', 1),
(341, 124, 35, 'sip', '2018-03-02 18:54:28', '0000-00-00 00:00:00', 1),
(342, 135, 44, 'sip', '2018-03-02 19:47:52', '0000-00-00 00:00:00', 1),
(343, 135, 44, 'sio', '2018-03-02 19:47:54', '0000-00-00 00:00:00', 1),
(344, 137, 44, 'ok', '2018-03-02 19:49:10', '0000-00-00 00:00:00', 1),
(345, 137, 44, 'siap', '2018-03-02 19:49:13', '0000-00-00 00:00:00', 1),
(346, 137, 44, 'mantap', '2018-03-02 19:49:23', '0000-00-00 00:00:00', 1),
(347, 141, 44, 'ok', '2018-03-02 19:49:40', '0000-00-00 00:00:00', 1),
(348, 140, 44, 'ghc', '2018-03-02 19:49:46', '0000-00-00 00:00:00', 1),
(349, 150, 44, 'gmna?', '2018-05-12 13:00:57', '0000-00-00 00:00:00', 1),
(350, 152, 35, 'sip', '2018-05-13 01:15:07', '0000-00-00 00:00:00', 1),
(351, 152, 44, 'Bisa kirom ntar malam?', '2018-05-13 01:16:07', '0000-00-00 00:00:00', 1),
(352, 152, 35, 'bisa', '2018-05-13 01:16:18', '0000-00-00 00:00:00', 1),
(353, 152, 44, 'Mantap', '2018-05-13 01:19:39', '0000-00-00 00:00:00', 1),
(354, 152, 44, 'Ditunggu', '2018-05-13 01:20:26', '0000-00-00 00:00:00', 1),
(355, 152, 44, 'Ya', '2018-05-13 01:20:33', '0000-00-00 00:00:00', 1),
(356, 152, 44, 'Men', '2018-05-13 01:20:40', '0000-00-00 00:00:00', 1),
(357, 152, 44, 'Thanks', '2018-05-13 01:22:46', '0000-00-00 00:00:00', 1),
(358, 152, 44, 'We', '2018-05-13 01:23:01', '0000-00-00 00:00:00', 1),
(359, 152, 44, 'We', '2018-05-13 01:26:36', '0000-00-00 00:00:00', 1),
(360, 152, 44, 'Yesterday', '2018-05-13 01:27:39', '0000-00-00 00:00:00', 1),
(361, 152, 44, 'asas', '2018-05-13 01:30:46', '0000-00-00 00:00:00', 1),
(362, 152, 44, 'assasqqqq', '2018-05-13 01:30:54', '0000-00-00 00:00:00', 1),
(363, 152, 44, 'ok brow', '2018-05-13 01:31:02', '0000-00-00 00:00:00', 1),
(364, 152, 44, 'siap', '2018-05-13 01:31:17', '0000-00-00 00:00:00', 1),
(365, 152, 44, '654654', '2018-05-13 01:34:00', '0000-00-00 00:00:00', 1),
(366, 152, 44, 'xZxzXX  class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\" class=\"word-wrap\"', '2018-05-13 01:34:44', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsupport`
--

CREATE TABLE `tbsupport` (
  `SupportCode` varchar(20) NOT NULL,
  `IdMember` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Content` text NOT NULL,
  `IsClosed` int(11) NOT NULL,
  `DateSend` datetime NOT NULL,
  `DateRead` datetime NOT NULL,
  `FileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsupport`
--

INSERT INTO `tbsupport` (`SupportCode`, `IdMember`, `Subject`, `Content`, `IsClosed`, `DateSend`, `DateRead`, `FileName`) VALUES
('S180402001', 44, 'Tidak bisa ubah password', 'begini certanya bla bla bl;a', 0, '2018-04-02 00:00:00', '0000-00-00 00:00:00', 'keyboard-gold1.jpg'),
('S180419001', 44, 'Tidak bisa ubah password', 'begini certanya bla bla bl;a', 1, '2018-04-19 00:00:00', '0000-00-00 00:00:00', ''),
('S180419002', 35, 'Tidak bisa ubah password', 'begini certanya bla bla bl;a', 1, '2018-04-19 00:00:00', '0000-00-00 00:00:00', 'keyboard-gold1.jpg'),
('S180419003', 35, 'Tidak bisa ubah password', 'begini certanya bla bla bl;a', 0, '2018-04-19 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbsupportdetail`
--

CREATE TABLE `tbsupportdetail` (
  `IdSupportDetail` int(11) NOT NULL,
  `SupportCode` varchar(20) NOT NULL,
  `IdMember` int(11) NOT NULL,
  `Message` text NOT NULL,
  `DateSend` datetime NOT NULL,
  `DateRead` datetime NOT NULL,
  `IsRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsupportdetail`
--

INSERT INTO `tbsupportdetail` (`IdSupportDetail`, `SupportCode`, `IdMember`, `Message`, `DateSend`, `DateRead`, `IsRead`) VALUES
(1, 'S180402001', 47, 'masih kami proses', '2018-04-11 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'S180402001', 44, 'ditunggu', '2018-04-12 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'S180402001', 44, 'ok', '2018-04-12 18:29:32', '0000-00-00 00:00:00', 0),
(4, 'S180402001', 44, 'ya', '2018-04-12 18:32:03', '0000-00-00 00:00:00', 0),
(5, 'S180402001', 44, 'ok', '2018-04-12 18:45:01', '0000-00-00 00:00:00', 0),
(6, 'S180402001', 44, 'sip', '2018-04-12 18:45:34', '0000-00-00 00:00:00', 0),
(7, 'S180402001', 44, 'sip', '2018-04-12 18:52:48', '0000-00-00 00:00:00', 0),
(8, 'S180402001', 44, 'HCI', '2018-04-12 18:52:53', '0000-00-00 00:00:00', 0),
(9, 'S180402001', 44, 'TIPAR', '2018-04-12 18:53:29', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbgallerypic`
--
ALTER TABLE `tbgallerypic`
  ADD PRIMARY KEY (`IdGalleryPic`);

--
-- Indexes for table `tbmember`
--
ALTER TABLE `tbmember`
  ADD PRIMARY KEY (`IdMember`);

--
-- Indexes for table `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD PRIMARY KEY (`IdProduct`);

--
-- Indexes for table `tbproductcategory`
--
ALTER TABLE `tbproductcategory`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `tbproductpic`
--
ALTER TABLE `tbproductpic`
  ADD PRIMARY KEY (`IdProductPic`);

--
-- Indexes for table `tbproductsubcategory`
--
ALTER TABLE `tbproductsubcategory`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `tbquotation`
--
ALTER TABLE `tbquotation`
  ADD PRIMARY KEY (`IdQuotation`);

--
-- Indexes for table `tbquotationdetail`
--
ALTER TABLE `tbquotationdetail`
  ADD PRIMARY KEY (`IdQuotationDetail`);

--
-- Indexes for table `tbsupport`
--
ALTER TABLE `tbsupport`
  ADD PRIMARY KEY (`SupportCode`);

--
-- Indexes for table `tbsupportdetail`
--
ALTER TABLE `tbsupportdetail`
  ADD PRIMARY KEY (`IdSupportDetail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbgallerypic`
--
ALTER TABLE `tbgallerypic`
  MODIFY `IdGalleryPic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbmember`
--
ALTER TABLE `tbmember`
  MODIFY `IdMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `IdProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbproductpic`
--
ALTER TABLE `tbproductpic`
  MODIFY `IdProductPic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbquotation`
--
ALTER TABLE `tbquotation`
  MODIFY `IdQuotation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `tbquotationdetail`
--
ALTER TABLE `tbquotationdetail`
  MODIFY `IdQuotationDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `tbsupportdetail`
--
ALTER TABLE `tbsupportdetail`
  MODIFY `IdSupportDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
