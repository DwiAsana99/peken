-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 04:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dl`
--

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
  `CompanyAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmember`
--

INSERT INTO `tbmember` (`IdMember`, `Email`, `Pwd`, `Location`, `ZipCode`, `City`, `IsUser`, `IsSupplier`, `FirstName`, `LastName`, `CompanyName`, `Phone`, `ProfilImage`, `Tdp`, `Siup`, `Npwp`, `CompanyAddress`) VALUES
(29, 'dek.sandhiyasa990@gmail.com', '', 'Indonesia', '', '', 0, 0, '', '', 'Logitech', '', 'samsung.jpg', '', '', '', ''),
(31, 'wes@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Indonesia', '', '', 0, 1, 'Gede ', 'Waisnawa Putra', 'MCD', '', 'mcd.png', '', '', '', ''),
(35, 'premawaisnawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '80352', 'BADUNG', 0, 1, 'Kade Prema ', 'Waisnawa', 'KFC', '081236727741', 'PREMA.jpg', 'tampil.PNG', 'Capture_nim.PNG', '1235789', 'Banjar Lambing, Desa Sibangkaja'),
(36, 'tes', '', '', '', '', 0, 1, '', '', 'Rolex', '', 'rolex.png', '', '', '', ''),
(37, 's', '', '', '', '', 0, 1, '', '', 'Samsung', '', 'samsung-logo.jpeg', '', '', '', ''),
(38, 'w', '', '', '', '', 0, 1, '', '', 'One Plus', '', 'oneplus-logo-big.png', '', '', '', ''),
(39, 'e', '', '', '', '', 0, 1, '', '', 'Apple', '', 'apple-logo_318-40184.jpg', '', '', '', ''),
(40, 'w', '', '', '', '', 0, 1, '', '', 'Mangupura', '', 'Badung-Logo_lambang_Kabupaten.png', '', '', '', ''),
(41, 'e', '', '', '', '', 0, 1, '', '', 'Vertu', '', 'Vertu-Logo.jpg', '', '', '', ''),
(44, 'weizeinawa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'indonesia', '', '', 0, 0, 'Waisnawa', 'Ewes', 'WesEwes', '85623147', '', '', '', '', ''),
(45, 'actorit.tech@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE `tbproduct` (
  `IdProduct` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Unit` varchar(20) DEFAULT NULL,
  `Price` double(20,2) DEFAULT NULL,
  `ProductDescription` varchar(1000) NOT NULL,
  `PkgDelivery` varchar(750) NOT NULL,
  `SupplyAbility` double(20,2) DEFAULT NULL,
  `PeriodSupplyAbility` varchar(45) DEFAULT NULL,
  `ProductSubCategoryCode` varchar(10) DEFAULT NULL,
  `IdSupplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbproduct`
--

INSERT INTO `tbproduct` (`IdProduct`, `Name`, `Unit`, `Price`, `ProductDescription`, `PkgDelivery`, `SupplyAbility`, `PeriodSupplyAbility`, `ProductSubCategoryCode`, `IdSupplier`) VALUES
(1, 'Gold Ring', 'pcs', 1000000.00, '', '', 1000.00, 'monthly', '0101', 35),
(2, 'Kalung Anjing', 'dozen', 1000.00, 'Kalung Anjing', '', 1000.00, 'daily', '0101', 35),
(5, 'Kalung Laki', 'pcs', 12345.00, 'Kalung Laki', '', 10.00, 'daily', '0301', 35),
(7, 'Kalung Kaki', 'pcs', 9999.00, 'Kalung Kaki', '', 150.00, 'daily', '0101', 35),
(8, 'Kalung Metal', 'pcs', 3333.00, '', '', 3333.00, 'daily', '0101', 35),
(9, 'Iphone Gold', 'truck', 1000000000.00, 'Iphone Gold', '', 12.00, 'daily', '0101', 35),
(10, 'Keyboard Gold', 'pcs', 150000000.00, 'Gold Keyboard adalah keyboard yang berbahan dasar emas', 'Dibungkus dengan kayu kuat dan pengiriman dilakukan satu hari', 12.00, 'yearly', '0101', 35),
(11, 'USB Silver', 'pcs', 1500000.00, '', '', 100.00, 'daily', '0201', 35),
(12, 'Golden mouse ring', 'pcs', 123456789.00, 'Di buat Golden mouse ring', 'Di kirm Golden mouse ring', 15.00, 'daily', '0102', 35),
(13, 'OnePlus 5 Gold', 'Truck', 5600000.00, '', '', 10.00, '', '0202', 35),
(14, 'tes1044', '1044', 1044.00, '1044              ', '1044              ', 1044.00, 'daily', '0101', 35),
(15, 'tes1121', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35),
(16, 'tes1121', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35),
(17, 'Tes061017', 'Tes061017', 61017.00, '              61017', '              61017', 61017.00, 'daily', '0101', 35),
(18, 'tes 9 okto', '', 0.00, '              ', '              ', 0.00, 'daily', '0101', 35),
(19, 'Tes 937', '937', 12000.00, '        937', '              899', 123.00, 'daily', '0402', 35),
(20, 'Gelang Akik', '1043', 10430000.00, 'Dibuat jam 1043', 'Di Kirim jam 1043', 104300.00, 'daily', '0402', 35);

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
('03', 'Earrings'),
('04', 'Bracelets');

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
(36, 9, '1508206759xv.PNG');

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
('0201', '02', 'Diamond '),
('0202', '02', 'Gemstone'),
('0203', '02', 'Pearl'),
('0301', '03', 'Diamond'),
('0302', '03', 'Gemstone'),
('0303', '03', 'Pearl'),
('0401', '04', 'Diamond'),
('0402', '04', 'Gemstone');

-- --------------------------------------------------------

--
-- Table structure for table `tbrfq`
--

CREATE TABLE `tbrfq` (
  `IdRfq` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `IdBuyer` int(11) NOT NULL,
  `IdSupplier` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Content` text NOT NULL,
  `IdProduct` int(11) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbrfq`
--

INSERT INTO `tbrfq` (`IdRfq`, `Date`, `IdBuyer`, `IdSupplier`, `Subject`, `Content`, `IdProduct`, `Qty`) VALUES
(1, '2017-10-20 11:50:32', 29, 35, 'Request for quotation from Pembeli loyal sejati to buy Keyboard Gold', 'Pemesanan oleh : Pembeli loyal sejati to buy Keyboard Gold, qty : 1515meli sik gan', 10, 1515),
(2, '2017-10-28 10:53:54', 44, 35, 'Request for quotation from Pembeli loyal sejati to buy Tes061017', 'Pemesanan oleh : Pembeli loyal sejati to buy Tes061017, qty : 555meli sik gan, dibungkus tidak pakai plastik', 17, 555),
(3, '2017-10-28 11:00:29', 44, 35, 'Request for quotation from  to buy USB Silver', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy USB Silver, qty : 1beli satu mas', 11, 1),
(4, '2017-10-28 16:21:40', 44, 35, 'Request for quotation from  to buy Keyboard Gold', 'Pemesanan oleh : WaisnawaEwes(weizeinawa@gmail.com) to buy Keyboard Gold, qty : 1000meli banyak gan, ', 10, 1000);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbrfq`
--
ALTER TABLE `tbrfq`
  ADD PRIMARY KEY (`IdRfq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmember`
--
ALTER TABLE `tbmember`
  MODIFY `IdMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `IdProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbproductpic`
--
ALTER TABLE `tbproductpic`
  MODIFY `IdProductPic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbrfq`
--
ALTER TABLE `tbrfq`
  MODIFY `IdRfq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
